<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAmountToWaterTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('water_taxes', function (Blueprint $table) {
            $table->string('amount')->after('user_id')->nullable();
            $table->string('payment_status')->after('user_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('water_taxes', function (Blueprint $table) {
            $table->dropColumn('amount', 'payment_status');
        });
    }
}
