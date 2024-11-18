<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToTradeLicensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trade_licenses', function (Blueprint $table) {
            //
            $table->string('pay_slip')->nullable();     
            $table->string('chalan_number')->default(0);
            $table->string('payment_status')->default(0)->comment('0 = pending and 1 = paid');
            $table->string('amount')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trade_licenses', function (Blueprint $table) {
            //
            $table->dropColumn('pay_slip');
            $table->dropColumn('chalan_number');
            $table->dropColumn('payment_status');
            $table->dropColumn('amount');


        });
    }
}
