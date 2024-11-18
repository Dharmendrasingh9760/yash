<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyPermission extends Model
{
    use HasFactory;
    protected $table = 'properties_permission';
    protected $fillable = [
       'user_id',
        'property',
        'name_chairman_owner',
        'name_fh_chairman_owner',
        'bhr_number_local_address',
        'bhp_owner_res_address',
        'any_other_details',
        'buildings_area_covered',
        'land_plot_area',
        'other_details',
        'more_24_meter',
        'more_12_meter',
        'more_9_meter',
        'wide_9_meter',
        'corporate_house_24_meter',
        'other_premanent_buildings',
        'broken_building',
        'construction_year',
        'predetermind_value_year',
        'calc_annual_value_building',
        'rental_rate_residential_building',
        'coefficient_res_building_rate',
        'received_rental_rate_building',
        'covered_area_building',
        'annual_value_building',
        'residential_rate_land',
        'coefficient_land',
        'rent_received_land',
        'area_of_land',
        'calc_month_annual_value_building',
        'total_annual_value',
        'res_internal_dimenssion_room',
        'res_internal_dimenssion_balconies',
        'res_internal_dimenssion_garages',
        'res_floor_area_building',
        'res_area_covered',
        'res_building_roof',
        'res_concrete_building',
        'res_land_located',
        'res_land_more_12_meter',
        'res_land_more_9_meter',
        'res_land_wide_9_meter',
        'res_building_owner_rent',
        'res_rate_square',
        'res_monthly_rate',
        'action_type',
    ];
}
