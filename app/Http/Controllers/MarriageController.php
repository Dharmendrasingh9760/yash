<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Country;
use App\Models\Marriage;
use Illuminate\Http\Request;
use App\Models\Notification;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class MarriageController extends Controller
{

    public function marriageCertificate()
    {
        try {
            $user_id = Auth::user()->id;
            $totalCetificateCouont = Marriage::where('user_id', $user_id)->get()->Count();
            return view('marriage.marriage', [
                'totalCetificateCouont' => $totalCetificateCouont
            ]);
        } catch (\Exception $e) {
            Log::error('Error something want to wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function marriageCertificateAdd()
    {
        try {
            $country = Country::all();
            return view('marriage.add-marriage', [
                'country'   => $country,
            ]);
        } catch (\Exception $e) {
            Log::error('Error something want to wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function marriageCertificateSave(Request $request)
    {

        $user_id = Auth::user()->id;
        
        $rules = [
            'bride_name' => 'required|string',
            'groom_name' => 'required|string',
            'city' => 'required|string',
            'village' => 'required|string',
            'marrage_place' => 'required|string',
            'marrage_date' => 'required|date',
            'pin_code' => 'required|integer|digits:6',
            'bride_date_birth' => 'required|date',
            'bride_contact' => 'required|digits:10',
            'bride_email' => 'required|email',
            'bride_father_name' => 'required|string',
            'bride_mother_name' => 'required|string',
            'bride_address_name' => 'required|string',
            'bride_district_name' => 'required|string',
            'bride_state_name' => 'required|string',
            'bride_pincode' => 'required|integer|digits:6',
            'bride_is_divyang' => 'required|string',
            'groom_date_birth' => 'required|date',
            'groom_contact' => 'required|digits:10',
            'groom_email' => 'required|email',
            'groom_father_name' => 'required|string',
            'groom_mother_name' => 'required|string',
            'groom_address' => 'required|string',
            'groom_district' => 'required|string',
            'groom_state' => 'required|string',
            'groom_pincode' => 'required|integer|digits:6',
            'groom_is_divyang' => 'required|string',
            'relation_with_bride' => 'required|string',
            'bride_guardian_name' => 'required|string',
            'bride_guardian_address' => 'required|string',
            'bride_guardian_district' => 'required|string',
            'bride_guardian_state' => 'required|string',
            'bride_guardian_pincode' => 'required|integer|digits:6',
            'bride_guardian_contact' => 'required|digits:10',
            'bride_guardian_email' => 'required|email',
            'guardian_relation_with_groom' => 'required|string',
            'groom_guardian_name' => 'required|string',
            'guardian_groom_address' => 'required|string',
            'guardian_groom_district' => 'required|string',
            'guardian_groom_state' => 'required|string',
            'guardian_groom_pincode' => 'required|integer|digits:6',
            'guardian_groom_contact' => 'required|digits:10',
            'guardian_groom_email' => 'required|email',
            'bride_witness_name' => 'required|string',
            'bride_witness_address' => 'required|string',
            'bride_witness_district' => 'required|string',
            'bride_witness_state' => 'required|string',
            'bride_witness_pincode' => 'required|integer|digits:6',
            'bride_witness_contact' => 'required|digits:10',
            'groom_witness_name' => 'required|string',
            'groom_witness_address' => 'required|string',
            'groom_witness_district' => 'required|string',
            'groom_witness_state' => 'required|string',
            'groom_witness_pincode' => 'required|integer|digits:6',
            'groom_witness_contact' => 'required|digits:10',
            'birde_age_proof' => 'required|image|mimes:jpg,jpeg,png,gif|max:5120',
            'bride_age_father_proof' => 'required|image|mimes:jpg,jpeg,png,gif|max:5120',
            'bride_age_mother_proof' => 'required|image|mimes:jpg,jpeg,png,gif|max:5120',
        ];
     

        $messages = [
            'bride_name.required' => 'The bride name field is required.',
            'bride_name.string' => 'The bride name must be a string.',
            'groom_name.required' => 'The groom name field is required.',
            'groom_name.string' => 'The groom name must be a string.',
            'city.required' => 'The city field is required.',
            'city.string' => 'The city must be a string.',
            'village.required' => 'The village field is required.',
            'village.string' => 'The village must be a string.',
            'marrage_place.required' => 'The marriage place field is required.',
            'marrage_place.string' => 'The marriage place must be a string.',
            'marrage_date.required' => 'The marriage date field is required.',
            'marrage_date.date' => 'The marriage date must be a valid date.',
            'pin_code.required' => 'The pin code field is required.',
            'pin_code.integer' => 'The pin code must be a number.',
            'pin_code.digits' => 'The pin code must be exactly 6 digits.',
            'bride_date_birth.required' => 'The bride date of birth field is required.',
            'bride_date_birth.date' => 'The bride date of birth must be a valid date.',
            'bride_contact.required' => 'The bride contact field is required.',
            'bride_contact.digits_between' => 'The bride contact must be 10 digits.',
            'bride_email.required' => 'The bride email field is required.',
            'bride_email.email' => 'The bride email must be a valid email address.',
            'bride_father_name.required' => 'The bride father name field is required.',
            'bride_father_name.string' => 'The bride father name must be a string.',
            'bride_mother_name.required' => 'The bride mother name field is required.',
            'bride_mother_name.string' => 'The bride mother name must be a string.',
            'bride_address_name.required' => 'The bride address field is required.',
            'bride_address_name.string' => 'The bride address must be a string.',
            'bride_district_name.required' => 'The bride district field is required.',
            'bride_district_name.string' => 'The bride district must be a string.',
            'bride_state_name.required' => 'The bride state field is required.',
            'bride_state_name.string' => 'The bride state must be a string.',
            'bride_pincode.required' => 'The bride pincode field is required.',
            'bride_pincode.integer' => 'The bride pincode must be a number.',
            'bride_pincode.digits' => 'The bride pincode must be exactly 6 digits.',
            'bride_is_divyang.required' => 'The bride is divyang field is required.',
            'groom_date_birth.required' => 'The groom date of birth field is required.',
            'groom_date_birth.date' => 'The groom date of birth must be a valid date.',
            'groom_contact.required' => 'The groom contact field is required.',
            'groom_contact.digits_between' => 'The groom contact must be 10 digits.',
            'groom_email.required' => 'The groom email field is required.',
            'groom_email.email' => 'The groom email must be a valid email address.',
            'groom_father_name.required' => 'The groom father name field is required.',
            'groom_father_name.string' => 'The groom father name must be a string.',
            'groom_mother_name.required' => 'The groom mother name field is required.',
            'groom_mother_name.string' => 'The groom mother name must be a string.',
            'groom_address.required' => 'The groom address field is required.',
            'groom_address.string' => 'The groom address must be a string.',
            'groom_district.required' => 'The groom district field is required.',
            'groom_district.string' => 'The groom district must be a string.',
            'groom_state.required' => 'The groom state field is required.',
            'groom_state.string' => 'The groom state must be a string.',
            'groom_pincode.required' => 'The groom pincode field is required.',
            'groom_pincode.integer' => 'The groom pincode must be a number.',
            'groom_pincode.digits' => 'The groom pincode must be exactly 6 digits.',
            'groom_is_divyang.required' => 'The groom is divyang field is required.',
            'relation_with_bride.required' => 'The relation with bride field is required.',
            'relation_with_bride.string' => 'The relation with bride must be a string.',
            'bride_guardian_name.required' => 'The bride guardian name field is required.',
            'bride_guardian_name.string' => 'The bride guardian name must be a string.',
            'bride_guardian_address.required' => 'The bride guardian address field is required.',
            'bride_guardian_address.string' => 'The bride guardian address must be a string.',
            'bride_guardian_district.required' => 'The bride guardian district field is required.',
            'bride_guardian_district.string' => 'The bride guardian district must be a string.',
            'bride_guardian_state.required' => 'The bride guardian state field is required.',
            'bride_guardian_state.string' => 'The bride guardian state must be a string.',
            'bride_guardian_pincode.required' => 'The bride guardian pincode field is required.',
            'bride_guardian_pincode.integer' => 'The bride guardian pincode must be a number.',
            'bride_guardian_pincode.digits' => 'The bride guardian pincode must be exactly 6 digits.',
            'bride_guardian_contact.required' => 'The bride guardian contact field is required.',
            'bride_guardian_contact.digits_between' => 'The bride guardian contact must be 10 digits.',
            'bride_guardian_email.required' => 'The bride guardian email field is required.',
            'bride_guardian_email.email' => 'The bride guardian email must be a valid email address.',
            'guardian_relation_with_groom.required' => 'The guardian relation with groom field is required.',
            'guardian_relation_with_groom.string' => 'The guardian relation with groom must be a string.',
            'groom_guardian_name.required' => 'The groom guardian name field is required.',
            'groom_guardian_name.string' => 'The groom guardian name must be a string.',
            'guardian_groom_address.required' => 'The guardian groom address field is required.',
            'guardian_groom_address.string' => 'The guardian groom address must be a string.',
            'guardian_groom_district.required' => 'The guardian groom district field is required.',
            'guardian_groom_district.string' => 'The guardian groom district must be a string.',
            'guardian_groom_state.required' => 'The guardian groom state field is required.',
            'guardian_groom_state.string' => 'The guardian groom state must be a string.',
            'guardian_groom_pincode.required' => 'The guardian groom pincode field is required.',
            'guardian_groom_pincode.integer' => 'The guardian groom pincode must be a number.',
            'guardian_groom_pincode.digits' => 'The guardian groom pincode must be exactly 6 digits.',
            'guardian_groom_contact.required' => 'The guardian groom contact field is required.',
            'guardian_groom_contact.digits_between' => 'The guardian groom contact must be 10 digits.',
            'guardian_groom_email.required' => 'The guardian groom email field is required.',
            'guardian_groom_email.email' => 'The guardian groom email must be a valid email address.',
            'bride_witness_name.required' => 'The bride witness name field is required.',
            'bride_witness_name.string' => 'The bride witness name must be a string.',
            'bride_witness_address.required' => 'The bride witness address field is required.',
            'bride_witness_address.string' => 'The bride witness address must be a string.',
            'bride_witness_district.required' => 'The bride witness district field is required.',
            'bride_witness_district.string' => 'The bride witness district must be a string.',
            'bride_witness_state.required' => 'The bride witness state field is required.',
            'bride_witness_state.string' => 'The bride witness state must be a string.',
            'bride_witness_pincode.required' => 'The bride witness pincode field is required.',
            'bride_witness_pincode.integer' => 'The bride witness pincode must be a number.',
            'bride_witness_pincode.digits' => 'The bride witness pincode must be exactly 6 digits.',
            'bride_witness_contact.required' => 'The bride witness contact field is required.',
            'bride_witness_contact.digits_between' => 'The bride witness contact must be 10 digits.',
            'groom_witness_name.required' => 'The groom witness name field is required.',
            'groom_witness_name.string' => 'The groom witness name must be a string.',
            'groom_witness_address.required' => 'The groom witness address field is required.',
            'groom_witness_address.string' => 'The groom witness address must be a string.',
            'groom_witness_district.required' => 'The groom witness district field is required.',
            'groom_witness_district.string' => 'The groom witness district must be a string.',
            'groom_witness_state.required' => 'The groom witness state field is required.',
            'groom_witness_state.string' => 'The groom witness state must be a string.',
            'groom_witness_pincode.required' => 'The groom witness pincode field is required.',
            'groom_witness_pincode.integer' => 'The groom witness pincode must be a number.',
            'groom_witness_pincode.digits' => 'The groom witness pincode must be exactly 6 digits.',
            'groom_witness_contact.required' => 'The groom witness contact field is required.',
            'groom_witness_contact.digits_between' => 'The groom witness contact must be 10 digits.',
            'birde_age_proof.required' => 'File upload is required.',
            'birde_age_proof.image' => 'The uploaded file must be an image.',
            'birde_age_proof.mimes' => 'Invalid file type. Please upload an image (JPG, JPEG, PNG, GIF).',
            'birde_age_proof.max' => 'File size exceeds the 5MB limit. Please upload a smaller image.',
            'bride_age_father_proof.required' => 'Father\'s proof file upload is required.',
            'bride_age_father_proof.image' => 'Father\'s proof must be an image.',
            'bride_age_father_proof.mimes' => 'Father\'s proof must be a JPG, JPEG, PNG, or GIF image.',
            'bride_age_father_proof.max' => 'Father\'s proof file size exceeds the 5MB limit. Please upload a smaller image.',
            'bride_age_mother_proof.required' => 'Mother\'s proof file upload is required.',
            'bride_age_mother_proof.image' => 'Mother\'s proof must be an image.',
            'bride_age_mother_proof.mimes' => 'Mother\'s proof must be a JPG, JPEG, PNG, or GIF image.',
            'bride_age_mother_proof.max' => 'Mother\'s proof file size exceeds the 5MB limit. Please upload a smaller image.',
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
            if ($request->hasFile('birde_age_proof')) {
                $bride_name = $request['bride_name'] ?? null;
                $file = $request->file('birde_age_proof');
                $extension = $file->getClientOriginalExtension();
                $birde_age_proof = $bride_name . time() . '.' . $extension;
                $file->storeAs('public/bride_age/', $birde_age_proof);
            }

            if ($request->hasFile('bride_age_father_proof')) {
                $bride_father_name = $request['bride_father_name'] ?? null;
                $file = $request->file('bride_age_father_proof');
                $extension = $file->getClientOriginalExtension();
                $bride_age_father_proof = $bride_father_name . time() . '.' . $extension;
                $file->storeAs('public/bride_age/', $bride_age_father_proof);
            }

            if ($request->hasFile('bride_age_mother_proof')) {

                $bride_mother_name = $request['bride_mother_name'] ?? null;

                $file = $request->file('bride_age_mother_proof');
                $extension = $file->getClientOriginalExtension();
                $bride_age_mother_proof = $bride_mother_name . time() . '.' . $extension;
                $file->storeAs('public/bride_age/', $bride_age_mother_proof);
            }

            $marriage = [
                'city' => $request['city'] ?? null,
                'village' => $request['village'] ?? null,
                'marriage_place' => $request['marrage_place'] ?? null,
                'marriage_date' => $request['marrage_date'] ?? null,
                'pin_code' => $request['pin_code'] ?? null,
                'bride_name' => $request['bride_name'] ?? null,
                'bride_date_of_birth' => $request['bride_date_birth'] ?? null,
                'bride_contact' => $request['bride_contact'] ?? null,
                'bride_email' => $request['bride_email'] ?? null,
                'bride_father_name' => $request['bride_father_name'] ?? null,
                'bride_mother_name' => $request['bride_mother_name'] ?? null,
                'bride_address' => $request['bride_address_name'] ?? null,
                'bride_district' => $request['bride_district_name'] ?? null,
                'bride_state' => $request['bride_state_name'] ?? null,
                'bride_pincode' => $request['bride_pincode'] ?? null,
                'bride_is_divyang' => $request['bride_is_divyang'] ?? null,
                'groom_name' => $request['groom_name'] ?? null,
                'groom_date_of_birth' => $request['groom_date_birth'] ?? null,
                'groom_contact' => $request['groom_contact'] ?? null,
                'groom_email' => $request['groom_email'] ?? null,
                'groom_father_name' => $request['groom_father_name'] ?? null,
                'groom_mother_name' => $request['groom_mother_name'] ?? null,
                'groom_address' => $request['groom_address'] ?? null,
                'groom_district' => $request['groom_district'] ?? null,
                'groom_state' => $request['groom_state'] ?? null,
                'groom_pincode' => $request['groom_pincode'] ?? null,
                'groom_is_divyang' => $request['groom_is_divyang'] ?? null,
                'bride_guardian_relation_with_bride' => $request['relation_with_bride'] ?? null,
                'bride_guardian_name' => $request['bride_guardian_name'] ?? null,
                'bride_guardian_address' => $request['bride_guardian_address'] ?? null,
                'bride_guardian_district' => $request['bride_guardian_district'] ?? null,
                'bride_guardian_state' => $request['bride_guardian_state'] ?? null,
                'bride_guardian_pincode' => $request['bride_guardian_pincode'] ?? null,
                'bride_guardian_contact' => $request['bride_guardian_contact'] ?? null,
                'bride_guardian_email' => $request['bride_guardian_email'] ?? null,
                'groom_guardian_relation_with_bride' => $request['guardian_relation_with_groom'] ?? null,
                'groom_guardian_name' => $request['groom_guardian_name'] ?? null,
                'groom_guardian_address' => $request['guardian_groom_address'] ?? null,
                'groom_guardian_district' => $request['guardian_groom_district'] ?? null,
                'groom_guardian_state' => $request['guardian_groom_state'] ?? null,
                'groom_guardian_pincode' => $request['guardian_groom_pincode'] ?? null,
                'groom_guardian_contact' => $request['guardian_groom_contact'] ?? null,
                'groom_guardian_email' => $request['guardian_groom_email'] ?? null,
                'bride_witness_name' => $request['bride_witness_name'],
                // 'bride_witness_name'=> $request['bride_witness_name'],
                'bride_witness_address' => $request['bride_witness_address'] ?? null,
                'bride_witness_district' => $request['bride_witness_district'] ?? null,
                'bride_witness_state' => $request['bride_witness_state'] ?? null,
                'bride_witness_pincode' => $request['bride_witness_pincode'] ?? null,
                'bride_witness_contact' => $request['bride_witness_contact'] ?? null,
                'groom_witness_name' => $request['groom_witness_name'] ?? null,
                'groom_witness_address' => $request['groom_witness_address'] ?? null,
                'groom_witness_district' => $request['groom_witness_district'] ?? null,
                'groom_witness_state' => $request['groom_witness_state'] ?? null,
                'groom_witness_pincode' => $request['groom_witness_pincode'] ?? null,
                'groom_witness_contact' => $request['groom_witness_contact'] ?? null,
                'age_proof_bride' => $birde_age_proof ?? null,
                'age_proof_father' => $bride_age_father_proof ?? null,
                'age_proof_mother' => $bride_age_mother_proof ?? null,
                'user_id' => $user_id ?? null
            ];

            $mariageData = Marriage::create($marriage);
            if ($mariageData) {
                $admin = User::where('role', '1')->first();
                $data = [
                    'send' => $user_id,
                    'notification' => "Marriage Certificate Created Which is Pending",
                    'received' => $admin->id,
                    'mark_as_read' => '0'
                ];
                Notification::create($data);
            }
            return redirect()->route('marriage.certificate')->with('success', 'Marriage Registration successfully');
        } catch (\Exception $e) {
            \Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }


    public function marriageCertificateList()
    {
        try {
            $user_id = Auth::user()->id;
            $marriage = Marriage::OrderBy('id', "Desc")->where('user_id', $user_id)->get();
            $marriage_data = [];
            foreach ($marriage as $marriage_list) {
                if ($marriage_list->status == 1) {
                    $givenDate = Carbon::create($marriage_list->marriage_date);

                    $currentDate = Carbon::now();
                    $differenceInDays = $currentDate->diffInDays($givenDate);

                    if ($differenceInDays < 21) {
                        $marriage_list->amount = "0";
                    } elseif ($differenceInDays <= 30) {
                        $marriage_list->amount = "2";
                    } elseif ($differenceInDays <= 365) {
                        $marriage_list->amount = "5";
                    } else {
                        $marriage_list->amount = "10";
                    }

                    $data = [
                        'amount' => $marriage_list->amount
                    ];
                    Marriage::where('id', $marriage_list->id)->update($data);
                }

                $marriage_data[] = $marriage_list;
            }
            return view('marriage.marriage-list', [
                'marriage' =>   $marriage_data,
            ]);
        } catch (\Exception $e) {
            Log::error('Error something want to wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function marriageCertificateView($id)
    {
        try {
            $marriage = Marriage::where('id', $id)->first();
            return view('marriage.marriage-view', [
                "marriage" => $marriage,
            ]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function marriageCertificatePdf($id)
    {
        $data  = Marriage::findOrFail($id);
        $marriage = ['marriage' => $data];
        $pdf = PDF::loadView('marriage.marriage-certificate', $marriage);
        return $pdf->download('marriage-certificate.pdf');
    }

    public function marriageCertificatePrintPdf($id)
    {
        $data  = Marriage::findOrFail($id);
        $marriage = ['marriage' => $data];
        $pdf = PDF::loadView('marriage.marriage-certificate', $marriage);
        return $pdf->stream('marriage-certificate.pdf');
    }
}
