<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Adjust the column position as needed
                    $table->string('property')->nullable();
                    $table->string('name_chairman_owner')->nullable();
                    $table->string('name_fh_chairman_owner')->nullable();
                    $table->string('bhr_number_local_address')->nullable();
                    $table->string('bhp_owner_res_address')->nullable();
                    $table->string('any_other_details')->nullable();
                    $table->string('buildings_area_covered')->nullable();
                    $table->string('land_plot_area')->nullable();
                    $table->string('other_details')->nullable();
                    $table->string('more_24_meter')->nullable();
                    $table->string('more_12_meter')->nullable();
                    $table->string('more_9_meter')->nullable();
                    $table->string('wide_9_meter')->nullable();
                    $table->string('corporate_house_24_meter')->nullable();
                    $table->string('other_premanent_buildings')->nullable();
                    $table->string('broken_building')->nullable();
                    $table->string('construction_year')->nullable();
                    $table->string('predetermind_value_year')->nullable();
                    $table->string('calc_annual_value_building')->nullable();
                    $table->string('rental_rate_residential_building')->nullable();
                    $table->string('coefficient_res_building_rate')->nullable();
                    $table->string('received_rental_rate_building')->nullable();
                    $table->string('covered_area_building')->nullable();
                    $table->string('annual_value_building')->nullable();
                    $table->string('residential_rate_land')->nullable();
                    $table->string('coefficient_land')->nullable();
                    $table->string('rent_received_land')->nullable();
                    $table->string('area_of_land')->nullable();
                    $table->string('calc_month_annual_value_building')->nullable();
                    $table->string('total_annual_value')->nullable();
                    $table->string('res_internal_dimenssion_room')->nullable();
                    $table->string('res_internal_dimenssion_balconies')->nullable();
                    $table->string('res_internal_dimenssion_garages')->nullable();
                    $table->string('res_floor_area_building')->nullable();
                    $table->string('res_area_covered')->nullable();
                    $table->string('res_building_roof')->nullable();
                    $table->string('res_concrete_building')->nullable();
                    $table->string('res_land_located')->nullable();
                    $table->string('res_land_more_12_meter')->nullable();
                    $table->string('res_land_more_9_meter')->nullable();
                    $table->string('res_land_wide_9_meter')->nullable();
                    $table->string('res_building_owner_rent')->nullable();
                    $table->string('res_rate_square')->nullable();
                    $table->string('res_monthly_rate')->nullable();
                    $table->tinyInteger('status')->default(0);
                    $table->string('remark')->nullable();
                    $table->string('amount')->nullable();
                    $table->string('pay_slip')->nullable();
                    $table->string('chalan_number')->default(0);      // 0 = pending, 1 = paid
                    $table->string('payment_status')->default(0)->comment('0 = pending and 1 = paid');
                    $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
                    $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
