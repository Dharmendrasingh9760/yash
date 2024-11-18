<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\Ward;
use App\Models\Colony;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Exports\PropertyExport;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Services\propertyservice;
use App\Models\PropertyPermission;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Str;
use DB;
class PropertyController extends Controller
{

    protected $propertyservice;

    public function __construct(propertyservice $propertyservice)
    {
        $this->propertyservice = $propertyservice;
    }

    public function propertyText()
    {
        try {
            $user_id = Auth::user()->id;
            $totalCetificateCouont = Property::where('id', $user_id)->get()->Count();
            return view('property.property', [
                'totalCetificateCouont' => $totalCetificateCouont
            ]);
        } catch (\Exception $e) {
            Log::error('Error something want to wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function propertyTextList(Request $request)
    {
        try {

            // dd($request->all());
            $export = $request->input('export', '');
             $user_id = Auth::user()->id;
            $getData = [];
            $getDataes = Property::where('id', $user_id)->orderBy('id', 'DESC');

            if ($request['name_chairman_owner'] && $request['construction_year'] && $request['name_fh_chairman_owner']) {
                $name_chairman_owner = $request['name_chairman_owner'];
                $construction_year = $request['construction_year'];
                $name_fh_chairman_owner = $request['name_fh_chairman_owner'];
                $getDataes->where('name_chairman_owner', 'like', '%' . $name_chairman_owner . '%')->where('construction_year', 'like', '%' . $construction_year . '%')->where('property', $request->search)->where('name_fh_chairman_owner', $name_fh_chairman_owner);
                // dd($request->all());

                $getData = $getDataes->get();
                // dd($getData);
            }
            if ($export == 'excel') {
                return Excel::download(new PropertyExport($getData), 'property-list.xlsx');
            }
            // dd($getData);
            return view('property.property-pay-list', [
                'getData' => $getData
            ]);
        } catch (\Exception $e) {
            Log::error('Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function propertyTextAdd()
    {
        try {
            $wards = Ward::where('is_active', 1)->get();
            $colony = DB::table('colony')->where('is_active', 1)->get();
            return view('property.property-pay-add', compact('wards', 'colony')); 
        } catch (\Exception $e) {
            Log::error('Error something want to wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

   public function propertyTextAddSave(Request $request)
{
    try {
            $validator = Validator::make($request->all(), [
                'ward_no' => ['required'],
                'colony_name' => ['required'],
                'building_type' => ['required'],
                'house_no' => ['required', 'unique:properties,house_no'],
                'property_owner_name' => ['required', 'string'],
                'father_husband_name' => ['required', 'string'],
                'mobile_number' => ['required', 'numeric', 'digits:10'],
                'total_arv' => ['required', 'numeric', 'min:0'],
                'house_tax_current' => ['required', 'numeric', 'min:0'],
                'house_tax_arrear' => ['required', 'numeric', 'min:0'],
                'house_surcharge' => ['required', 'numeric', 'min:0'],
                'total_tax_number' => ['required', 'numeric', 'min:0'],
                // 'water_tax_current' => ['required', 'numeric', 'min:0'],
                // 'water_tax_arrear' => ['required', 'numeric', 'min:0'],
                // 'water_surcharge' => ['required', 'numeric', 'min:0'],
                // 'total_water_tax' => ['required', 'numeric', 'min:0'],
                // 'water_charge_current' => ['required', 'numeric', 'min:0'],
                // 'water_charge_arrear' => ['required', 'numeric', 'min:0'],
                // 'water_charge_surcharge' => ['required', 'numeric', 'min:0'],
                // 'total_water_charge' => 'required|min:4|max:4',
                // 'total_property_tax_charge' => 'required',
                // 'deposite_house_tax' => 'required',
                // 'deposite_water_tax' => 'required',
                // 'deposite_water_charges' => 'required',
                // 'remarks' => 'required',
            ], [
                'ward_no.required' => 'Ward No is required.',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $property = new Property();
            // $property->property_id = "PRTY".mt_rand(100000, 999999);
            $property->property_id = "PRTY".Str::random(8);
            $property->property   = $request->property_type;
            $property->ward_no = $request->ward_no;
            $property->colony_name = $request->colony_name;
            $property->building_type = $request->building_type;
            $property->house_no = $request->house_no;
            $property->property_owner_name = $request->property_owner_name;
            $property->father_or_husband_name = $request->father_husband_name;
            $property->mobile_number = $request->mobile_number;
            $property->total_arv = $request->total_arv;
            $property->house_tax_current = $request->house_tax_current;
            $property->house_tax_arrear = $request->house_tax_arrear;
            $property->house_surcharge = $request->house_surcharge;
            $property->total_tax_number = $request->total_tax_number;
            // $property->water_tax_current = $request->water_tax_current;
            // $property->water_tax_arrear = $request->water_tax_arrear;
            // $property->water_surcharge = $request->water_surcharge;
            // $property->total_water_tax = $request->total_water_tax;
            // $property->water_charge_current = $request->water_charge_current;
            // $property->water_charge_arrear = $request->water_charge_arrear;
            // $property->water_charge_surcharge = $request->water_charge_surcharge;
            // $property->total_water_charge = $request->total_water_charge;
            // $property->total_property_tax_charge = $request->total_property_tax_charge;
            // $property->deposite_house_tax = $request->deposite_house_tax;
            // $property->deposite_water_tax = $request->deposite_water_tax;
            // $property->deposite_water_charges = $request->deposite_water_charges;
            // $property->remarks = $request->remarks;
            $property->user_id = Auth::user()->id;
            $property->save();

            return redirect()->route('property.text')->with(['success' => 'Property successfully registered']);
    } catch (\Exception $e) {
        Log::error('Error something went to wrong: ' . $e->getMessage());
        return redirect()->back()->with('error', 'An error occurred. Please try again.');
    }
}


    public function propertyTextAddSave33(Request $request)
    {
        try {
            if (isset($request->Non_Residential)) {
                $validator = Validator::make($request->all(), [
                    'property_id' => ['required'],
                    'ward_no' => ['required'],

                    'colony_name' => ['required', 'regex:/^[\pL\s\d]+$/u'],
                    'building_type' => ['required', 'regex:/^[\pL\s\d]+$/u'],
                    'house_no' => ['required', 'regex:/^[\pL\s\d]+$/u'],
                    'property_owner_name' => ['required', 'regex:/^[\pL\s\d]+$/u'],
                    'father_husband_name' => ['required', 'regex:/^[\pL\s\d]+$/u'],
                    'mobile_number' => ['required', 'regex:/^[\pL\s\d]+$/u'],
                    'total_arv' => ['required', 'regex:/^[\pL\s\d]+$/u'],
                    'house_tax_current' => ['required', 'regex:/^[\pL\s\d]+$/u'],
                    'house_tax_arrear' => ['required', 'regex:/^[\pL\s\d]+$/u'],
                    'surcharge' => ['required', 'regex:/^[\pL\s\d]+$/u'],
                    'total_tax_number' => ['required', 'numeric', 'min:0'],
                    'water_tax_current' => ['required', 'numeric', 'min:0'],
                    'water_tax_arrear' => ['required', 'numeric', 'min:0'],
                    'water_surcharge' => ['required', 'numeric', 'min:0'],
                    'total_water_tax' => ['required', 'numeric', 'min:0'],
                    'water_charge_current' => ['required', 'numeric', 'min:0'],
                    'water_charge_arrear' => ['required', 'numeric', 'min:0'],
                    'water_charge_surcharge' => ['required', 'numeric', 'min:0'],
                    'total_water_charge' => 'required|min:4|max:4',
                    'total_property_tax_charge' => 'required',
                    'deposite_house_tax' => 'required',
                    'deposite_water_tax' => 'required',
                    'deposite_water_charges' => 'required',
                    'remarks' => 'required',
                ], [
                    'property_id.required' => 'Property ID is required.',
                    'ward_no.required' => 'Ward No is required.',
                    
                    'colony_name.required' => 'The Colony Name is required.',
                    'colony_name.regex' => 'Colony Name should contain only letters, numbers, and spaces.',
                    'building_type.required' => 'The Building Type is required.',
                    'building_type.regex' => 'Building Type should contain only letters, numbers, and spaces.',
                    'house_no.required' => 'House No is required.',
                    'house_no.regex' => 'House No should contain only letters, numbers, and spaces.',
                    'property_owner_name.required' => 'Property Owner Name is required.',
                    'property_owner_name.regex' => 'Property Owner Name should contain only letters, numbers, and spaces.',
                    'father_husband_name.required' => 'Father/Husband Name is required.',
                    'father_husband_name.regex' => 'Father/Husband Name should contain only letters, numbers, and spaces.',
                    'mobile_number.required' => 'Mobile Number is required.',
                    'mobile_number.regex' => 'Mobile Number should contain only letters, numbers, and spaces.',
                    'total_arv.required' => 'Total ARV is required.',
                    'total_arv.regex' => 'Total ARV should contain only letters, numbers, and spaces.',
                    
                    'house_tax_current.required' => 'House Tax (Current) is required.',
                    'house_tax_current.regex' => 'House Tax (Current) should contain only letters, numbers, and spaces.',
                    'house_tax_arrear.required' => 'House Tax (Arrear) is required.',
                    'house_tax_arrear.regex' => 'House Tax (Arrear) should contain only letters, numbers, and spaces.',
                    'surcharge.required' => 'Surcharge is required.',
                    'surcharge.regex' => 'Surcharge should contain only letters, numbers, and spaces.',
                    
                    'total_tax_number.required' => 'Total Tax Number is required.',
                    'total_tax_number.numeric' => 'Total Tax Number must be a numeric value.',
                    'total_tax_number.min' => 'Total Tax Number must be at least 0.',
                    
                    'water_tax_current.required' => 'Water Tax (Current) is required.',
                    'water_tax_current.numeric' => 'Water Tax (Current) must be a numeric value.',
                    'water_tax_current.min' => 'Water Tax (Current) must be at least 0.',
                    'water_tax_arrear.required' => 'Water Tax (Arrear) is required.',
                    'water_tax_arrear.numeric' => 'Water Tax (Arrear) must be a numeric value.',
                    'water_tax_arrear.min' => 'Water Tax (Arrear) must be at least 0.',
                    'water_surcharge.required' => 'Water Surcharge is required.',
                    'water_surcharge.numeric' => 'Water Surcharge must be a numeric value.',
                    'water_surcharge.min' => 'Water Surcharge must be at least 0.',
                    
                    'total_water_tax.required' => 'Total Water Tax is required.',
                    'total_water_tax.numeric' => 'Total Water Tax must be a numeric value.',
                    'total_water_tax.min' => 'Total Water Tax must be at least 0.',
                    
                    'water_charge_current.required' => 'Water Charge (Current) is required.',
                    'water_charge_current.numeric' => 'Water Charge (Current) must be a numeric value.',
                    'water_charge_current.min' => 'Water Charge (Current) must be at least 0.',
                    'water_charge_arrear.required' => 'Water Charge (Arrear) is required.',
                    'water_charge_arrear.numeric' => 'Water Charge (Arrear) must be a numeric value.',
                    'water_charge_arrear.min' => 'Water Charge (Arrear) must be at least 0.',
                    'water_charge_surcharge.required' => 'Water Charge Surcharge is required.',
                    'water_charge_surcharge.numeric' => 'Water Charge Surcharge must be a numeric value.',
                    'water_charge_surcharge.min' => 'Water Charge Surcharge must be at least 0.',
                    
                    'total_water_charge.required' => 'Total Water Charge is required.',
                    'total_water_charge.min' => 'Total Water Charge must be exactly 4 digits.',
                    'total_water_charge.max' => 'Total Water Charge must be exactly 4 digits.',
                    
                    'total_property_tax_charge.required' => 'Total Property Tax Charge is required.',
                    'deposite_house_tax.required' => 'House Tax Deposit is required.',
                    'deposite_water_tax.required' => 'Water Tax Deposit is required.',
                    'deposite_water_charges.required' => 'Water Charges Deposit is required.',
                    'remarks.required' => 'Remarks are required.',
                ]);

                if ($validator->fails()) {
                    return redirect()->back()
                        ->withErrors($validator)
                        ->with('data', $request->Non_Residential)
                        ->withInput();
                }
            } else {
                $validator = Validator::make($request->all(), [
                    'res_name_chairman_owner' => ['required', 'regex:/^[\pL\s]+$/u'],
                    'res_name_fh_chairman_owner' => ['required', 'regex:/^[\pL\s]+$/u'],
                    'res_bhr_number_local_address' => ['numeric'],
                    'res_bhp_owner_res_address' => ['required', 'regex:/^[\pL\s]+$/u'],
                    'res_any_other_details' => ['required', 'regex:/^[\pL\s]+$/u'],
                    'res_buildings_area_covered' => ['required', 'regex:/^[\pL\s]+$/u'],
                    'res_land_plot_area' => ['required', 'regex:/^[\pL\s]+$/u'],
                    'res_other_details' => ['required', 'regex:/^[\pL\s]+$/u'],
                    'res_internal_dimenssion_room' => ['required', 'regex:/^[\pL\s]+$/u'],
                    'res_internal_dimenssion_balconies' => ['required', 'regex:/^[\pL\s]+$/u'],
                    'res_internal_dimenssion_garages' => ['required', 'regex:/^[\pL\s]+$/u'],
                    'res_building_roof' => ['required', 'regex:/^[\pL\s]+$/u'],
                    'res_concrete_building' => ['required', 'regex:/^[\pL\s]+$/u'],
                    'res_broken_building' => ['required', 'regex:/^[\pL\s]+$/u'],
                    'res_rate_square' => ['required', 'string'],
                    'res_monthly_rate' => ['required', 'string'],
                    'res_floor_area_building' => ['nullable'],
                    'res_area_covered' => ['required'],

                    // 'land_plot_area' => ['required', 'numeric', 'min:0'],
                    'res_more_24_meter' => ['required', 'numeric', 'min:0'],
                    'res_more_12_meter' => ['required', 'numeric', 'min:0'],
                    'res_more_9_meter' => ['required', 'numeric', 'min:0'],
                    'res_wide_9_meter' => ['required', 'numeric', 'min:0'],
                    'res_land_located_24_meter' => ['required', 'numeric', 'min:0'],
                    'res_land_more_12_meter' => ['required', 'numeric', 'min:0'],
                    'res_land_more_9_meter' => ['required', 'numeric', 'min:0'],
                    'res_land_wide_9_meter' => ['required', 'numeric', 'min:0'],
                    'res_building_owner_rent' => ['required', 'numeric', 'min:0'],
                    'res_construction_year' => ['required', 'numeric', 'min:0'],
                    // 'construction_year' => 'nullable|min:4|max:4',
                    // 'total_annual_value' => 'nullable',
                ], [
                    'res_name_chairman_owner.required' => 'The chairman/owner name is required.',
                    'res_name_chairman_owner.regex' => 'The chairman/owner name must only contain letters and spaces.',
                    'res_name_fh_chairman_owner.required' => 'The father/husband name of the chairman/owner is required.',
                    'res_name_fh_chairman_owner.regex' => 'The father/husband name must only contain letters and spaces.',
                    'res_bhr_number_local_address.numeric' => 'The local address number must be numeric.',
                    'res_bhp_owner_res_address.required' => 'The owner\'s residential address is required.',
                    'res_bhp_owner_res_address.regex' => 'The owner\'s residential address must only contain letters and spaces.',
                    'res_any_other_details.required' => 'The any other details field is required.',
                    'res_any_other_details.regex' => 'The any other details field must only contain letters and spaces.',
                    'res_buildings_area_covered.required' => 'The building\'s covered area is required.',
                    'res_buildings_area_covered.regex' => 'The building\'s covered area must only contain letters and spaces.',
                    'res_land_plot_area.required' => 'The land plot area is required.',
                    'res_land_plot_area.regex' => 'The land plot area must only contain letters and spaces.',
                    'res_other_details.required' => 'The other details field is required.',
                    'res_other_details.regex' => 'The other details field must only contain letters and spaces.',
                    'res_internal_dimenssion_room.required' => 'The internal dimensions of the room are required.',
                    'res_internal_dimenssion_room.regex' => 'The internal dimensions of the room must only contain letters and spaces.',
                    'res_internal_dimenssion_balconies.required' => 'The internal dimensions of the balconies are required.',
                    'res_internal_dimenssion_balconies.regex' => 'The internal dimensions of the balconies must only contain letters and spaces.',
                    'res_internal_dimenssion_garages.required' => 'The internal dimensions of the garages are required.',
                    'res_internal_dimenssion_garages.regex' => 'The internal dimensions of the garages must only contain letters and spaces.',
                    'res_building_roof.required' => 'The building roof details are required.',
                    'res_building_roof.regex' => 'The building roof details must only contain letters and spaces.',
                    'res_concrete_building.required' => 'The concrete building details are required.',
                    'res_concrete_building.regex' => 'The concrete building details must only contain letters and spaces.',
                    'res_broken_building.required' => 'The broken building details are required.',
                    'res_broken_building.regex' => 'The broken building details must only contain letters and spaces.',
                    'res_rate_square.required' => 'The rate per square is required.',
                    'res_rate_square.string' => 'The rate per square must be a string.',
                    'res_monthly_rate.required' => 'The monthly rate is required.',
                    'res_monthly_rate.string' => 'The monthly rate must be a string.',
                    'res_floor_area_building.nullable' => 'The floor area of the building is optional.',
                    'res_area_covered.nullable' => 'The area covered is optional.',
                    'land_plot_area.numeric' => 'The land plot area must be numeric.',
                    'land_plot_area.min' => 'The land plot area must be at least 0.',
                    'res_more_24_meter.required' => 'The value for more than 24 meters is required.',
                    'res_more_24_meter.numeric' => 'The value for more than 24 meters must be numeric.',
                    'res_more_24_meter.min' => 'The value for more than 24 meters must be at least 0.',
                    'res_more_12_meter.required' => 'The value for more than 12 meters is required.',
                    'res_more_12_meter.numeric' => 'The value for more than 12 meters must be numeric.',
                    'res_more_12_meter.min' => 'The value for more than 12 meters must be at least 0.',
                    'res_more_9_meter.required' => 'The value for more than 9 meters is required.',
                    'res_more_9_meter.numeric' => 'The value for more than 9 meters must be numeric.',
                    'res_more_9_meter.min' => 'The value for more than 9 meters must be at least 0.',
                    'res_wide_9_meter.required' => 'The wide 9 meter value is required.',
                    'res_wide_9_meter.numeric' => 'The wide 9 meter value must be numeric.',
                    'res_wide_9_meter.min' => 'The wide 9 meter value must be at least 0.',
                    'res_land_located_24_meter.required' => 'The land located 24 meter value is required.',
                    'res_land_located_24_meter.numeric' => 'The land located 24 meter value must be numeric.',
                    'res_land_located_24_meter.min' => 'The land located 24 meter value must be at least 0.',
                    'res_land_more_12_meter.required' => 'The land more than 12 meter value is required.',
                    'res_land_more_12_meter.numeric' => 'The land more than 12 meter value must be numeric.',
                    'res_land_more_12_meter.min' => 'The land more than 12 meter value must be at least 0.',
                    'res_land_more_9_meter.required' => 'The land more than 9 meter value is required.',
                    'res_land_more_9_meter.numeric' => 'The land more than 9 meter value must be numeric.',
                    'res_land_more_9_meter.min' => 'The land more than 9 meter value must be at least 0.',
                    'res_land_wide_9_meter.required' => 'The land wide 9 meter value is required.',
                    'res_land_wide_9_meter.numeric' => 'The land wide 9 meter value must be numeric.',
                    'res_land_wide_9_meter.min' => 'The land wide 9 meter value must be at least 0.',
                    'res_building_owner_rent.required' => 'The building owner rent value is required.',
                    'res_building_owner_rent.numeric' => 'The building owner rent value must be numeric.',
                    'res_building_owner_rent.min' => 'The building owner rent value must be at least 0.',
                    'res_construction_year.required' => 'The construction year is required.',
                    'res_construction_year.numeric' => 'The construction year must be numeric.',
                    'res_construction_year.min' => 'The construction year must be at least 0.',
                    'construction_year.min' => 'The construction year must be exactly 4 digits.',
                    'construction_year.max' => 'The construction year must be exactly 4 digits.',
                    // 'total_annual_value.nullable' => 'The total annual value is optional.',
                ]);

                if ($validator->fails()) {
                    return redirect()->back()
                        ->withErrors($validator)
                        ->with('data', $request->Residential)
                        ->withInput();
                }
            }

            $user_id = Auth::user()->id;
            $property = $this->propertyservice->propertyTextAddSave($request, $user_id);
            return redirect()->route('property.text')->with(['success' => 'Property successfully registered']);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function propertydeclarationAddSave(Request $request)
    {
        try {

            $property = $this->propertyservice->propertydeclarationAddSave($request);
            return redirect()->route('property.pay.list')->with('success', 'User successfully registered');
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }


    public function myPropertyList(Request $request)
    {
        try {
            $user_id = Auth::user()->id;
            $property = Property::OrderBy('id', 'DESC')->where('user_id', $user_id)->get();
            return view('property.my-property-list', [
                "property" => $property,
            ]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function myPropertyApplicationList()
    {
        try {
            $mobile_number = Auth::user()->mobile_number;
            $user_id = Auth::user()->id;

            $allproperty = Property::OrderBy('id', 'DESC')->where('mobile_number', $mobile_number)->paginate(20);
            $property = Property::where('mobile_number', $mobile_number)->where('building_type', 'RESIDENTIAL')->OrderBy('id', 'DESC')->get();
            $nonproperty = Property::where('mobile_number', $mobile_number)->where('building_type', 'COMERCIAL')->OrderBy('id', 'DESC')->get();
            return view('property.my-property-application-list', compact('property', 'allproperty', 'nonproperty') );
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function downloadPdf($id)
    {
        try {
            $userId = Auth::user()->id;
            $modelId = $id;
            $payment = Payment::where('data_id', $modelId)->where('user_id', $userId)->first();
            // $pdf = PDF::loadView('payments.pdf', compact('payment'));
            $pdf = PDF::loadView('payments.pay_pdf', compact('payment'));
           return $pdf->download('payment.pdf');
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function myPropertyView($id)
    {
        try {
            $user_id = Auth::user()->id;
            $property = Property::where('id', $id)->where('user_id', $user_id)->first();
            return view('property.my-property-nonresidential-view', [
                "property" => $property,
            ]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function myPropertyResidentialView($id)
    {
        try {
            $user_id = Auth::user()->id;
            $property = Property::where('id', $id)->where('user_id', $user_id)->first();
            return view('property.my-property-residential-view', [
                "property" => $property,
            ]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function myPropertyApplicationNonResidentialView($id)
    {
        try {
            $property = Property::where('id', $id)->first();
            return view('property.my-property-application-nonresidential-view', [
                "property" => $property,
            ]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function myPropertyApplicationResidentialView($id)
    {
        try {
            $user_id = Auth::user()->id;
            $property = Property::where('id', $id)->first();
            return view('property.my-property-application-residential-view', [
                "property" => $property,
            ]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function propertyresidentialPdf($id)
    {
        try {
            $user_id = Auth::user()->id;
            $Property = Property::where('id', $id)->where('user_id', $user_id)->first();
            $Property = ['Property' => $Property];
            $options = array(
                'margin-left'   => '10px',
                'dpi' => '115',
                'header-font-size' => '14',
            );
            $pdf = PDF::loadView('PDF.PropertyResidential', $Property)
                ->setPaper('a4', 'portrait') // Set paper size to A4
                ->setOption($options)
                ->setPaper('Letter');
            return $pdf->download('property.pdf');
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function propertynonresidentialPdf($id)
    {
        try {
            $user_id = Auth::user()->id;
            $Property = Property::where('id', $id)->where('user_id', $user_id)->first();
            $Property = ['Property' => $Property];
            $options = array(
                'margin-left'   => '10px',
                'dpi' => '115',
                'header-font-size' => '14',
            );
            $pdf = PDF::loadView('PDF.PropertyNonResidential', $Property)
                ->setPaper('a4', 'portrait') // Set paper size to A4
                ->setOption($options)
                ->setPaper('Letter');
            return $pdf->download('Property.pdf');
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function propertynonresidentialPrintPdf($id)
    {
        try {
            $user_id = Auth::user()->id;
            $Property = Property::where('id', $id)->where('user_id', $user_id)->first();
            $Property = ['Property' => $Property];
            $options = array(
                'margin-left'   => '10px',
                'dpi' => '115',
                'header-font-size' => '14',
            );
            $pdf = PDF::loadView('PDF.PropertyNonResidential', $Property)
                ->setPaper('a4', 'portrait') // Set paper size to A4
                ->setOption($options)
                ->setPaper('Letter');
            return $pdf->stream('Property.pdf');
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function propertyresidentialPrintPdf($id)
    {
        try {
            $user_id = Auth::user()->id;
            $Property = Property::where('id', $id)->where('user_id', $user_id)->first();
            $Property = ['Property' => $Property];
            $options = array(
                'margin-left'   => '10px',
                'dpi' => '115',
                'header-font-size' => '14',
            );
            $pdf = PDF::loadView('PDF.PropertyResidential', $Property)
                ->setPaper('a4', 'portrait') // Set paper size to A4
                ->setOption($options)
                ->setPaper('Letter');
            return $pdf->stream('Property.pdf');
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function propertySearch(Request $request)
    {

        try {
            if ($request->search == "property") {
                $status = "In Progress";
                if ($request->residential_type == "Residential") {
                    $route = "residential";
                } else {
                    $route = "nonresidential";
                }
            } else {
                $status = "Approved";
                if ($request->residential_type == "Residential") {
                    $route = "application.residential";
                } else {
                    $route = "application.nonresidential";
                }
            }


            $user_id = Auth::user()->id;
            $property = Property::where('details_of_owner', $request->res_details_of_owner)->where('construction_year', $request->construction_year)->where('property', $request->residential_type)->where('user_id', $user_id)->get();

            return response()->json([
                'property' => $property,
                'status' => $status,
                'route' => $route
            ]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function propertyexcelExport(Request $request)
    {

        $properties = $request->listData;
        $status = $request->status;


        // Return the Excel file download response
        return Excel::download(new PropertyExport($properties), 'report_pf_contributions.xlsx');
    }


    // property permission

    public function propertyPermission()
    {
        try {
            $user_id = Auth::user()->id;
            $totalCetificateCouont = PropertyPermission::where('user_id', $user_id)->get()->Count();
            return view('property-permission.property-permission', [
                'totalCetificateCouont' => $totalCetificateCouont
            ]); // Replace with your actual view name
        } catch (\Exception $e) {
            Log::error('Error something want to wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function propertyPermissionSearch(Request $request)
    {
        try {

            $export = $request->input('export', '');
            // dd($request->all());
            $getData = [];
            $getDataes = PropertyPermission::orderBy('id', 'DESC');

            if ($request['name_chairman_owner'] && $request['construction_year'] && $request['residential_type']) {
                $name_chairman_owner = $request['name_chairman_owner'];
                $construction_year = $request['construction_year'];
                $residential_type = $request['residential_type'];
                $getDataes->where('name_chairman_owner', 'like', '%' . $name_chairman_owner . '%')->where('construction_year', 'like', '%' . $construction_year . '%')->where('property', $residential_type);
                // dd($request->all());

                $getData = $getDataes->get();
                // dd($getData);
            }


            if ($export == 'excel') {
                return Excel::download(new PropertyExport($getData), 'property-list.xlsx');
            }
            // dd($getData);
            return view('property-permission.property-permission-search', [
                'getData' => $getData
            ]);
        } catch (\Exception $e) {
            Log::error('Error: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function propertyPermissionAdd()
    {
        try {
            return view('property-permission.property-permission-add'); // Replace with your actual view name
        } catch (\Exception $e) {
            Log::error('Error something want to wrong: ' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function propertyPermissionAddSave(Request $request)
    {
        try {
            // if(isset($request->Non_Residential))
            // {
            //     $validator = Validator::make($request->all(), [
            //         'details_of_owner' => 'required',
            //         'land_building_description' => 'required',
            //         'construction_year' => 'required',

            //     ]);

            //     if ($validator->fails()) {
            //         return redirect()->back()
            //                     ->withErrors($validator)
            //                     ->withInput();
            //     }
            // }
            // else
            // {
            //     $validator = Validator::make($request->all(), [
            //         'res_details_of_owner' => 'required',
            //         'res_land_building_description' => 'required',
            //         'res_construction_year' => 'required',

            //     ]);

            //     if ($validator->fails()) {
            //         return redirect()->back()
            //                     ->withErrors($validator)
            //                     ->withInput();
            //     }
            // }

            $user_id = Auth::user()->id;
            $property = $this->propertyservice->propertyPermissionAddSave($request, $user_id);
            return redirect()->route('property.permission')->with(['success' => 'Property successfully registered']);


            //    return redirect()->route('property.pay.list')->with('success', 'User successfully registered');

        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function PropertyPermissionApplicationList()
    {
        try {
            $user_id = Auth::user()->id;
            $property = PropertyPermission::OrderBy('id', 'DESC')->where('user_id', $user_id)->get();
            return view('property-permission.property-permission-application-list', [
                "property" => $property,
            ]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function PropertyPermissionApplicationNonResidentialView($id)
    {
        try {
            $user_id = Auth::user()->id;
            $property = PropertyPermission::where('id', $id)->where('user_id', $user_id)->first();
            return view('property-permission.property-permission-application-nonresidential-view', [
                "property" => $property,
            ]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function PropertyPermissionApplicationResidentialView($id)
    {
        try {
            $user_id = Auth::user()->id;
            $property = PropertyPermission::where('id', $id)->where('user_id', $user_id)->first();
            return view('property-permission.property-permission-application-residential-view', [
                "property" => $property,
            ]);
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function propertypermissionresidentialPdf($id)
    {
        try {
            $user_id = Auth::user()->id;
            $Property = PropertyPermission::where('id', $id)->where('user_id', $user_id)->first();
            $Property = ['Property' => $Property];
            $options = array(
                'margin-left'   => '10px',
                'dpi' => '115',
                'header-font-size' => '14',
            );
            $pdf = PDF::loadView('PDF.PropertyResidential', $Property)
                ->setPaper('a4', 'portrait') // Set paper size to A4
                ->setOption($options)
                ->setPaper('Letter');
            return $pdf->download('property.pdf');
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }



    public function propertypermissionnonresidentialPdf($id)
    {
        try {
            $user_id = Auth::user()->id;
            $Property = PropertyPermission::where('id', $id)->where('user_id', $user_id)->first();
            $Property = ['Property' => $Property];
            $options = array(
                'margin-left'   => '10px',
                'dpi' => '115',
                'header-font-size' => '14',
            );
            $pdf = PDF::loadView('PDF.PropertyNonResidential', $Property)
                ->setPaper('a4', 'portrait')
                ->setOption($options)
                ->setPaper('Letter');
            return $pdf->download('property.pdf');
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function propertypermissionresidentialPrintPdf($id)
    {
        try {
            $user_id = Auth::user()->id;
            $Property = PropertyPermission::where('id', $id)->where('user_id', $user_id)->first();
            $Property = ['Property' => $Property];
            $options = array(
                'margin-left'   => '10px',
                'dpi' => '115',
                'header-font-size' => '14',
            );
            $pdf = PDF::loadView('PDF.PropertyResidential', $Property)
                ->setPaper('a4', 'portrait')
                ->setOption($options)
                ->setPaper('Letter');
            return $pdf->stream('property.pdf');
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function propertypermissionnonresidentialPrintPdf($id)
    {
        try {
            $user_id = Auth::user()->id;
            $Property = PropertyPermission::where('id', $id)->where('user_id', $user_id)->first();
            $Property = ['Property' => $Property];
            $options = array(
                'margin-left'   => '10px',
                'dpi' => '115',
                'header-font-size' => '14',
            );
            $pdf = PDF::loadView('PDF.PropertyNonResidential', $Property)
                ->setPaper('a4', 'portrait') // Set paper size to A4
                ->setOption($options)
                ->setPaper('Letter');
            return $pdf->stream('property.pdf');
        } catch (\Exception $e) {
            Log::error('Error something went to wrong:' . $e->getMessage());
            return redirect()->back()->with('error', 'An error occurred. Please try again.');
        }
    }



    public function getColonies(Request $request)
    {
        $formData = $request->all();
        $modelId = $request->id;
        $colonies = Colony::where('ward_id', $modelId)->pluck('name', 'id')->toArray();
        // dd($modelId, $colonies);
        return response()->json($colonies);
    }

    public function getHouses(Request $request)
    {
        $formData = $request->all();
        $modelId = $request->id;
        $ward = Colony::where('id', $modelId)->select('id', 'ward_id', 'name')->first();
        $houses = Property::where('ward_no', $ward->ward_id)->where('colony_name', $ward->name)->pluck('house_no', 'id')->toArray();
        return response()->json($houses);
    }

    public function getProperty(Request $request)
    {
        $formData = $request->all();
        $modelId = $request->id;
        $property = Property::where('id', $modelId)->select('id', 'user_id', 'property', 'property_id', 'ward_no', 'colony_name', 'building_type', 'house_no', 'property_owner_name', 'father_or_husband_name', 'mobile_number', 'total_arv', 'house_tax_current', 'house_tax_arrear', 'surcharge', 'total_tax_house', 'water_tax_current', 'water_tax_arrear', 'water_tax_surcharge', 'total_water_tax', 'water_charge_current', 'water_charge_arrear', 'water_charge_surcharge', 'water_surcharge', 'total_water_charge', 'total_property_tax', 'deposite_house_tax', 'deposite_water_tax', 'deposite_water_charges', 'total_property_tax_charge', 'remarks', 'total_tax_number', 'house_surcharge', 'registry_file', 'amount', 'remaining', 'status', 'payment_status', 'created_at', 'updated_at')->first();
        return response()->json($property);
    }


}