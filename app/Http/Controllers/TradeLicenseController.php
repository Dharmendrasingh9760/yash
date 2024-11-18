<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TradeLicense;
use App\Models\Notification;
use App\Models\TradeCategory;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\TradeLicenseUnit;
use App\Models\TradeSubCategory;
use App\Models\TradeLicenseOwner;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class TradeLicenseController extends Controller
{

    public function tradeLicense()
    {
        try {
            $user_id = Auth::user()->id;
            $totalCetificateCouont = TradeLicense::where('user_id', $user_id)->get()->Count();
            return view('tradelicense.tradelicense', [
                'totalCetificateCouont' => $totalCetificateCouont
            ]);
        } catch (\Exception $e) {
            Log::error('Error something want to wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function tradeLicenseAdd()
    {
        try {
            $TradeCategory = TradeCategory::all();
            $TradeSubCategory = TradeSubCategory::all();

            $TradeSubCategory = $TradeSubCategory->map(function ($subCategory) use ($TradeCategory) {
                $category = $TradeCategory->firstWhere('id', $subCategory->category_id);

                return [
                    'sub_category' => $subCategory->sub_category,
                    'category_name' => $category ? $category->name : null,
                ];
            });

            return view('tradelicense.add-trade-license', compact('TradeCategory', 'TradeSubCategory'));
        } catch (\Exception $e) {
            Log::error('Error something went wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function tradeLicenseSave(Request $request)
    {
        $user_id = Auth::user()->id;

        $rules = [
            'license_type' => 'required|string',
            'name' => 'required|string|max:255',
            'commencement_date' => 'required|date|before:tomorrow',
            'trade_period' => 'required|string',
            'trade_gst_no' => 'nullable|string|max:15',
            'trade_purpose' => 'required|string|max:255',
            'unit.*.trade_type' => 'required|string',
            'unit.*.trade_subType' => 'required|string',
            'unit.*.mou' => 'required|string|max:50',
            'unit.*.mou_value' => 'required|numeric',
            'city' => 'required|string',
            'door' => 'required|integer|min:1',
            'colony_name' => 'nullable|string|max:255',
            'state_name' => 'nullable|string|max:255',
            'village' => 'required|string',
            'pin_code' => 'required|numeric|digits:6',
            'collection_name' => 'nullable|string|max:100',
            'type_of_ownership' => 'required|string',
            'type_of_sub_ownership' => 'required|string',
            'owner.*.mobile_no' => 'required|numeric|digits:10',
            'owner.*.name' => 'required|string|max:255',
            'owner.*.father_name' => 'required|string|max:255',
            'owner.*.relationship' => 'required|string',
            'owner.*.gender' => 'required|string',
            'owner.*.dob' => 'required|date|before:today',
            'owner.*.email' => 'nullable|email|max:255',
            'owner.*.pan_no' => 'nullable|string|max:10',
            'owner.*.address' => 'required|string|max:255',
            // 'owner.*.category' => 'required|string',
            'ownership_id_proof' => 'required|string',
            'ownership_id_proof_img' => 'required|file|mimes:jpg,pdf,png|max:5120', // 5 MB
            'ownership_proof' => 'required|string',
            'ownership_proof_img' => 'required|file|mimes:jpg,pdf,png|max:5120', // 5 MB
            'ownership_photo' => 'required|string',
            'ownership_photo_img' => 'required|file|mimes:jpg,pdf,png|max:3072', // 3 MB
        ];

        $messages = [
            'license_type.required' => 'The trade license type field is required.',
            'license_type.string' => 'The trade license type must be a valid string.',
            'name.required' => 'The name of trade field is required.',
            'name.string' => 'The name of trade must be a valid string.',
            'name.max' => 'The name of trade may not be greater than 255 characters.',
            'commencement_date.required' => 'The trade commencement date field is required.',
            'commencement_date.date' => 'The trade commencement date must be a valid date.',
            'commencement_date.before' => 'The trade commencement date must be before tomorrow.',
            'trade_period.required' => 'The trade period field is required.',
            'trade_period.string' => 'The trade period must be a valid string.',
            'trade_gst_no.max' => 'The trade GST number may not be greater than 15 characters.',
            'trade_purpose.required' => 'The trade purpose field is required.',
            'trade_purpose.string' => 'The trade purpose must be a valid string.',
            'trade_purpose.max' => 'The trade purpose may not be greater than 255 characters.',
            'unit.*.trade_type.required' => 'The trade type field is required for each unit.',
            'unit.*.trade_type.string' => 'The trade type must be a valid string.',
            'unit.*.trade_subType.required' => 'The trade sub-type field is required for each unit.',
            'unit.*.trade_subType.string' => 'The trade sub-type must be a valid string.',
            'unit.*.mou.required' => 'The UOM field is required for each unit.',
            'unit.*.mou.string' => 'The UOM must be a valid string.',
            'unit.*.mou.max' => 'The UOM may not be greater than 50 characters.',
            'unit.*.mou_value.required' => 'The UOM value field is required for each unit.',
            'unit.*.mou_value.numeric' => 'The UOM value must be a number.',
            'city.required' => 'The city field is required.',
            'city.string' => 'The city must be a valid string.',
            'door.required' => 'The door/house number field is required.',
            'door.string' => 'The door/house number must be a valid string.',
            'door.max' => 'The door/house number may not be greater than 100 characters.',
            'colony_name.max' => 'The colony name may not be greater than 255 characters.',
            'state_name.max' => 'The street name may not be greater than 255 characters.',
            'village.required' => 'The village field is required.',
            'village.string' => 'The village must be a valid string.',
            'pin_code.required' => 'The pin code field is required.',
            'pin_code.numeric' => 'The pin code must be a number.',
            'pin_code.digits' => 'The pin code must be 6 digits.',
            'collection_name.max' => 'The electricity connection number may not be greater than 100 characters.',
            'type_of_ownership.required' => 'The type of ownership field is required.',
            'type_of_ownership.string' => 'The type of ownership must be a valid string.',
            'type_of_sub_ownership.required' => 'The type of sub-ownership field is required.',
            'type_of_sub_ownership.string' => 'The type of sub-ownership must be a valid string.',
            'owner.*.mobile_no.required' => 'The mobile number field is required for each owner.',
            'owner.*.mobile_no.numeric' => 'The mobile number must be numeric.',
            'owner.*.mobile_no.digits' => 'The mobile number must be 10 digits long.',
            'owner.*.name.required' => 'The name field is required for each owner.',
            'owner.*.name.string' => 'The name must be a valid string.',
            'owner.*.name.max' => 'The name may not be greater than 255 characters.',
            'owner.*.father_name.required' => 'The father/husband’s name field is required for each owner.',
            'owner.*.father_name.string' => 'The father/husband’s name must be a valid string.',
            'owner.*.father_name.max' => 'The father/husband’s name may not be greater than 255 characters.',
            'owner.*.relationship.required' => 'The relationship field is required for each owner.',
            'owner.*.relationship.string' => 'The relationship must be a valid string.',
            'owner.*.gender.required' => 'The gender field is required for each owner.',
            'owner.*.gender.string' => 'The gender must be a valid string.',
            'owner.*.dob.required' => 'The date of birth field is required for each owner.',
            'owner.*.dob.date' => 'The date of birth must be a valid date.',
            'owner.*.dob.before' => 'The date of birth must be a date before today.',
            'owner.*.email.email' => 'The email must be a valid email address.',
            'owner.*.email.max' => 'The email may not be greater than 255 characters.',
            'owner.*.pan_no.max' => 'The PAN number may not be greater than 10 characters.',
            'owner.*.address.required' => 'The correspondence address field is required for each owner.',
            'owner.*.address.string' => 'The correspondence address must be a valid string.',
            'owner.*.address.max' => 'The correspondence address may not be greater than 255 characters.',
            'owner.*.category.required' => 'The special owner category field is required for each owner.',
            'owner.*.category.string' => 'The special owner category must be a valid string.',
            'ownership_id_proof.required' => 'The owners ID proof field is required.',
            'ownership_id_proof.string' => 'The owners ID proof must be a valid string.',
            'ownership_id_proof_img.required' => 'The owners ID proof image is required.',
            'ownership_id_proof_img.file' => 'The owners ID proof image must be a file.',
            'ownership_id_proof_img.mimes' => 'The owners ID proof image must be a jpg or pdf file.',
            'ownership_id_proof_img.max' => 'The owners ID proof image must not exceed 5 MB.',
            'ownership_proof.required' => 'The ownership proof field is required.',
            'ownership_proof.string' => 'The ownership proof must be a valid string.',
            'ownership_proof_img.required' => 'The ownership proof image is required.',
            'ownership_proof_img.file' => 'The ownership proof image must be a file.',
            'ownership_proof_img.mimes' => 'The ownership proof image must be a jpg or pdf file.',
            'ownership_proof_img.max' => 'The ownership proof image must not exceed 5 MB.',
            'ownership_photo.required' => 'The owners photo field is required.',
            'ownership_photo.string' => 'The owners photo must be a valid string.',
            'ownership_photo_img.required' => 'The owners photo image is required.',
            'ownership_photo_img.file' => 'The owners photo image must be a file.',
            'ownership_photo_img.mimes' => 'The owners photo image must be a jpg or pdf file.',
            'ownership_photo_img.max' => 'The owners photo image must not exceed 3 MB.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            // Log validation errors
            Log::error('Validation errors:', $validator->errors()->toArray());
    
            // Return back with errors and old input
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        try {

            $ownership_id_proof_img = (!$request->hasFile('ownership_id_proof_img'))
                ? null
                : fileUploadOnServer($request->file('ownership_id_proof_img'), "ownership-id-proof");

            $ownership_proof_img = (!$request->hasFile('ownership_proof_img'))
                ? null
                : fileUploadOnServer($request->file('ownership_proof_img'), "ownership-roof");

            $ownership = (!$request->hasFile('ownership_photo_img'))
                ? null
                : fileUploadOnServer($request->file('ownership_photo_img'), "ownership");

            $trade = [
                "name" => $request['name'] ?? NUll,
                "commencement_date" => $request['commencement_date']  ?? NUll,
                "trade_period" => $request['trade_period'] ?? NUll,
                "trade_gst_no" => $request['trade_gst_no'] ?? NUll,
                "trade_purpose" => $request['trade_purpose'] ?? NUll,
                "city" => $request['city'] ?? NUll,
                "door" => $request['door'] ?? NUll,
                "colony_name" => $request['colony_name'] ?? NUll,
                "state_name" => $request['state_name'] ?? NUll,
                "village" => $request['village'] ?? NUll,
                "pin_code" => $request['pin_code'] ?? NUll,
                "collection_name" => $request['collection_name'] ?? NUll,
                "type_of_ownership" => $request['type_of_ownership'] ?? NUll,
                "type_of_sub_ownership" => $request['type_of_sub_ownership'] ?? NUll,
                "ownership_id_proof_img" => $ownership_id_proof_img ?? NUll,
                "ownership_id_proof" => $request['ownership_id_proof'] ?? NUll,
                "ownership_proof_img" => $ownership_proof_img ?? NUll,
                "ownership_proof" => $request['ownership_proof'] ?? NUll,
                "ownership" => $request['ownership_photo'] ?? NUll,
                "ownership_photu" => $ownership ?? NUll,
                "user_id" => $user_id ?? NUll,
                "license_type" => $request['license_type'] ?? NUll,
            ];
            $tradeData = TradeLicense::create($trade);

            foreach ($request->unit as $unitData) {
                $tradeUnit = [
                    'trade_id' => $tradeData['id'] ?? null,
                    'trade_type' => $unitData['trade_type'] ?? null,
                    'trade_subType' => $unitData['trade_subType'] ?? null,
                    'uom' => $unitData['mou'] ?? null,
                    'uom_value' => $unitData['mou_value'] ?? null,
                ];
                TradeLicenseUnit::create($tradeUnit);
            }

            foreach ($request->owner as $ownerData) {
                if (!isset($ownerData['relationship']) || !isset($ownerData['gender'])) {
                    return redirect()->back()->withErrors(['message' => 'Relationship and gender are required for each owner.']);
                }

                $tradeOwner = [
                    'trade_id' => $tradeData['id'] ?? null,
                    'mobile_no' => $ownerData['mobile_no'] ?? null,
                    'father_name' => $ownerData['father_name'] ?? null,
                    'dob' => $ownerData['dob'] ?? null,
                    'email' => $ownerData['email'] ?? null,
                    'pan_no' => $ownerData['pan_no'] ?? null,
                    'address' => $ownerData['address'] ?? null,
                    'category' => $ownerData['category'] ?? null,
                    'relationship' => $ownerData['relationship'] ?? null,
                    'gender' => $ownerData['gender'] ?? null,
                    'name' => $ownerData['name'] ?? null,
                ];

                $tradeOwnerData = TradeLicenseOwner::create($tradeOwner);
            }

            if ($tradeData) {
                $admin = User::where('role', '1')->first();
                $data = [
                    'send' => $user_id,
                    'notification' => "Trade License Created Which is Pending",
                    'received' => $admin->id,
                    'mark_as_read' => '0'
                ];
                Notification::create($data);
            }
            return redirect()->route('trade.license')->with('success', 'Trade License Apply Successfully');
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }


    public function tradeLicenseList()
    {
        try {
            $user_id = Auth::user()->id;
            $trades = TradeLicense::OrderBy('id', "Desc")->where('user_id', $user_id)->get();
            return view('tradelicense.trade-list', [
                'trades' =>   $trades,
            ]);
        } catch (\Exception $e) {
            Log::error('Error something want to wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function tradeLicenseView($id)
    {
        try {
            $trade = TradeLicense::where('id', $id)->first();
            $tradeUnits = TradeLicenseUnit::where('trade_id', $id)->get();
            $tradeOwners = TradeLicenseOwner::where('trade_id', $id)->get();
            return view('tradelicense.trade-view', [
                "trades" => $trade,
                "tradeUnits" => $tradeUnits,
                "tradeOwners" => $tradeOwners,
                "tradeOwners" => $tradeOwners,

            ]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function tradeLicensePdf($id)
    {
        try {
            $data = TradeLicense::findOrFail($id);

            $tradeUnits = TradeLicenseUnit::where('trade_id', $id)->get();
            $tradeOwners = TradeLicenseOwner::where('trade_id', $id)->get();

            $trades = [
                'trade' => $data,
                'tradeUnits' => $tradeUnits,
                'tradeOwners' => $tradeOwners,
            ];

            $options = array(
                'margin-left' => '10px',
                'dpi' => '115',
                'header-font-size' => '14',
            );

            $pdf = PDF::loadView('tradeLicense.trade-certificate', $trades)
                ->setPaper('a4', 'portrait')
                ->setOption($options);

            return $pdf->download('tradeLicense-certificate.pdf');
        } catch (\Exception $e) {
            Log::error('Error occurred while generating trade license PDF: ' . $e->getMessage());

            return redirect()->back()->with('error', 'An error occurred while generating the PDF. Please try again.');
        }
    }


    public function tradeLicensePrintPdf($id)
    {
        try {
            $data = TradeLicense::findOrFail($id);
            $tradeUnits = TradeLicenseUnit::where('trade_id', $id)->get();
            $tradeOwners = TradeLicenseOwner::where('trade_id', $id)->get();

            $trades = [
                'trade' => $data,
                'tradeUnits' => $tradeUnits,
                'tradeOwners' => $tradeOwners,
            ];

            $options = array(
                'margin-left' => '10px',
                'dpi' => '115',
                'header-font-size' => '14',
            );

            $pdf = PDF::loadView('tradeLicense.trade-certificate', $trades)
                ->setPaper('a4', 'portrait')
                ->setOption($options);

            return $pdf->stream('tradeLicense-certificate.pdf');
        } catch (\Exception $e) {
            Log::error('Error occurred while generating trade license PDF: ' . $e->getMessage());

            return redirect()->back()->with('error', 'An error occurred while generating the PDF. Please try again.');
        }
    }
}
