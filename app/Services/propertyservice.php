<?php
namespace App\Services;

use App\Models\Property;
use App\Models\User;
use App\Models\Notification;
use App\Models\PropertyPermission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class propertyservice
{
    public function propertyTextAddSave($request,$user_id)
    {

        try {

            if(isset($request->Non_Residential))
            {
                $property = [
                    'user_id' => $user_id ?? null,
                    'property'=> $request['Non_Residential'] ?? null,
                    'product_id'=> $request['product_id'] ?? null,
                    'ward_no'=>$request['ward_no'] ?? null,
                    'colony_name'=>$request['colony_name'] ?? null,
                    'building_type'=> $request['building_type'] ?? null,
                    'house_no'=> $request['house_no'] ?? null,
                    'property_owner_name'=> $request['property_owner_name'] ?? null,
                    'father_or_husband_name'=> $request['father_husband_name'] ?? null,
                    'mobile_number'=> $request['mobile_number'] ?? null,
                    'total_arv'=> $request['total_arv'] ?? null,
                    'house_tax_current'=> $request['house_tax_current'] ?? null,
                    'house_tax_arrear'=> $request['house_tax_arrear'] ?? null,
                    'surcharge'=> $request['surcharge'] ?? null,
                    'total_tax_house'=> $request['total_tax_number'] ?? null,
                    'water_tax_current'=> $request['water_tax_current'] ?? null,
                    'water_tax_arrear'=> $request['water_tax_arrear'] ?? null,
                    'water_tax_surcharge'=> $request['water_surcharge'] ?? null,
                    'total_water_tax'=> $request['total_water_tax'] ?? null,
                    'water_charge_current' => $request['water_charge_current'] ?? null,
                    'water_charge_arrear'=> $request['water_charge_arrear'] ?? null,
                    'water_charge_surcharge'=> $request['water_charge_surcharge'] ?? null,
                    'total_water_charge'=> $request['total_water_charge'] ?? null,
                    'total_property_tax'=> $request['total_property_tax_charge'] ?? null,
                    'deposite_house_tax'=> $request['deposite_house_tax'] ?? null,
                    'deposite_water_tax'=> $request['deposite_water_tax'] ?? null,
                    'deposite_water_charges'=> $request['deposite_water_charges'] ?? null,
                    'remarks'=> $request['remarks'] ?? null,
                  ];
            }
            else
            {
                $property = [
                    'user_id' => $user_id ?? null,
                    'property'=> $request['Residential'] ?? null,
                    'name_chairman_owner'=> $request['res_name_chairman_owner'] ?? null,
                    'name_fh_chairman_owner'=>$request['res_name_fh_chairman_owner'] ?? null,
                    'bhr_number_local_address'=>$request['res_bhr_number_local_address'] ?? null,
                    'bhp_owner_res_address'=> $request['res_bhp_owner_res_address'] ?? null,
                    'any_other_details'=> $request['res_any_other_details'] ?? null,
                    'buildings_area_covered'=> $request['res_buildings_area_covered'] ?? null,
                    'land_plot_area'=> $request['res_land_plot_area'] ?? null,
                    'other_details'=> $request['res_other_details'] ?? null,
                    'res_internal_dimenssion_room' => $request['res_internal_dimenssion_room'] ?? null,
                    'res_internal_dimenssion_balconies' => $request['res_internal_dimenssion_balconies'] ?? null,
                    'res_internal_dimenssion_garages' => $request['res_internal_dimenssion_garages'] ?? null,
                    'res_floor_area_building' => $request['res_floor_area_building'] ?? null,
                    'res_area_covered' => $request['res_area_covered'] ?? null,
                    'more_24_meter'=> $request['res_more_24_meter'] ?? null,
                    'more_12_meter'=> $request['res_more_12_meter'] ?? null,
                    'more_9_meter'=> $request['res_more_9_meter'] ?? null,
                    'wide_9_meter'=> $request['res_wide_9_meter'] ?? null,
                    'res_building_roof'=> $request['res_building_roof'] ?? null,
                    'res_concrete_building'=> $request['res_concrete_building'] ?? null,
                    'broken_building'=> $request['res_broken_building'] ?? null,
                    'res_land_located'=> $request['res_land_located'] ?? null,
                    'res_land_more_12_meter'=> $request['res_land_more_12_meter'] ?? null,
                    'res_land_more_9_meter'=> $request['res_land_more_9_meter'] ?? null,
                    'res_land_wide_9_meter'=> $request['res_land_wide_9_meter'] ?? null,
                    'res_building_owner_rent'=> $request['res_building_owner_rent'] ?? null,
                    'construction_year'=> $request['res_construction_year'] ?? null,
                    'res_rate_square'=> $request['res_rate_square'] ?? null,
                    'res_monthly_rate'=> $request['res_monthly_rate'] ?? null,
                  ];
            }

              $propertyData = Property::create($property);
              if($propertyData)
              {
                $admin = User::where('role', '1')->first();
                $data = [
                    'send' => $user_id,
                    'notification' => "Property Tax Created Which is Pending",
                    'received' => $admin->id,
                    'mark_as_read' => '0'
                ];
                Notification::create($data);

              }
            return $propertyData;
        } catch (\Exception $e) {
            // dd($e);
            Log::error('Error creating user: ' . $e->getMessage());
            throw new \Exception('Failed to create user');
        }
    }


    public function propertydeclarationAddSave($request)
    {

        try {

            dd($request->all());
            //   $property = Property


            //   $propertyData = Property::create( $property);
            // return $propertyData;
        } catch (\Exception $e) {
            Log::error('Error creating user: ' . $e->getMessage());
            throw new \Exception('Failed to create user');
        }
    }

    public function propertyPermissionAddSave($request,$user_id)
    {

        try {
                if(isset($request->Non_Residential))
                {
                    $property = [
                        'user_id' => $user_id ?? null,
                        'property'=> $request['Non_Residential'] ?? null,
                        'name_chairman_owner'=> $request['name_chairman_owner'] ?? null,
                        'name_fh_chairman_owner'=>$request['name_fh_chairman_owner'] ?? null,
                        'bhr_number_local_address'=>$request['bhr_number_local_address'] ?? null,
                        'bhp_owner_res_address'=> $request['bhp_owner_res_address'] ?? null,
                        'any_other_details'=> $request['any_other_details'] ?? null,
                        'buildings_area_covered'=> $request['buildings_area_covered'] ?? null,
                        'land_plot_area'=> $request['land_plot_area'] ?? null,
                        'other_details'=> $request['other_details'] ?? null,
                        'more_24_meter'=> $request['more_24_meter'] ?? null,
                        'more_12_meter'=> $request['more_12_meter'] ?? null,
                        'more_9_meter'=> $request['more_9_meter'] ?? null,
                        'wide_9_meter'=> $request['wide_9_meter'] ?? null,
                        'corporate_house_24_meter'=> $request['corporate_house_24_meter'] ?? null,
                        'other_premanent_buildings'=> $request['other_premanent_buildings'] ?? null,
                        'broken_building'=> $request['broken_building'] ?? null,
                        'construction_year'=> $request['construction_year'] ?? null,
                        'predetermind_value_year'=> $request['predetermind_value_year'] ?? null,
                        'calc_annual_value_building' => $request['calc_annual_value_building'] ?? null,
                        'rental_rate_residential_building'=> $request['rental_rate_residential_building'] ?? null,
                        'coefficient_res_building_rate'=> $request['coefficient_res_building_rate'] ?? null,
                        'received_rental_rate_building'=> $request['received_rental_rate_building'] ?? null,
                        'covered_area_building'=> $request['covered_area_building'] ?? null,
                        'annual_value_building'=> $request['annual_value_building'] ?? null,
                        'residential_rate_land'=> $request['residential_rate_land'] ?? null,
                        'coefficient_land'=> $request['coefficient_land'] ?? null,
                        'rent_received_land'=> $request['rent_received_land'] ?? null,
                        'area_of_land'=> $request['area_of_land'] ?? null,
                        'calc_month_annual_value_building'=> $request['calc_month_annual_value_building'] ?? null,
                        'total_annual_value'=> $request['total_annual_value'] ?? null,
                        'action_type' => $request['action_type'] ?? null,
                      ];
                }
                else
                {
                    $property = [
                        'user_id' => $user_id ?? null,
                        'property'=> $request['Residential'] ?? null,
                        'name_chairman_owner'=> $request['res_name_chairman_owner'] ?? null,
                        'name_fh_chairman_owner'=>$request['res_name_fh_chairman_owner'] ?? null,
                        'bhr_number_local_address'=>$request['res_bhr_number_local_address'] ?? null,
                        'bhp_owner_res_address'=> $request['res_bhp_owner_res_address'] ?? null,
                        'any_other_details'=> $request['res_any_other_details'] ?? null,
                        'buildings_area_covered'=> $request['res_buildings_area_covered'] ?? null,
                        'land_plot_area'=> $request['res_land_plot_area'] ?? null,
                        'other_details'=> $request['res_other_details'] ?? null,
                        'res_internal_dimenssion_room' => $request['res_internal_dimenssion_room'] ?? null,
                        'res_internal_dimenssion_balconies' => $request['res_internal_dimenssion_balconies'] ?? null,
                        'res_internal_dimenssion_garages' => $request['res_internal_dimenssion_garages'] ?? null,
                        'res_floor_area_building' => $request['res_floor_area_building'] ?? null,
                        'res_area_covered' => $request['res_area_covered'] ?? null,
                        'more_24_meter'=> $request['res_more_24_meter'] ?? null,
                        'more_12_meter'=> $request['res_more_12_meter'] ?? null,
                        'more_9_meter'=> $request['res_more_9_meter'] ?? null,
                        'wide_9_meter'=> $request['res_wide_9_meter'] ?? null,
                        'res_building_roof'=> $request['res_building_roof'] ?? null,
                        'res_concrete_building'=> $request['res_concrete_building'] ?? null,
                        'broken_building'=> $request['res_broken_building'] ?? null,
                        'res_land_located'=> $request['res_land_located'] ?? null,
                        'res_land_more_12_meter'=> $request['res_land_more_12_meter'] ?? null,
                        'res_land_more_9_meter'=> $request['res_land_more_9_meter'] ?? null,
                        'res_land_wide_9_meter'=> $request['res_land_wide_9_meter'] ?? null,
                        'res_building_owner_rent'=> $request['res_building_owner_rent'] ?? null,
                        'construction_year'=> $request['res_construction_year'] ?? null,
                        'res_rate_square'=> $request['res_rate_square'] ?? null,
                        'res_monthly_rate'=> $request['res_monthly_rate'] ?? null,
                        'action_type' => $request['res_action_type'] ?? null,
                      ];
                }

              $propertyData = PropertyPermission::create($property);

              if($propertyData)
              {
                  
                $admin = User::where('role', '1')->first();
                $data = [
                    'send' => $user_id,
                    'notification' => "Property Permission Created Which is Pending",
                    'received' => $admin->id,
                    'mark_as_read' => '0'
                ];
                Notification::create($data);

              }
            return $propertyData;
        } catch (\Exception $e) {
            Log::error('Error creating user: ' . $e->getMessage());
            throw new \Exception('Failed to create user');
        }
    }



}
