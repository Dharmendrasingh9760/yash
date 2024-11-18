<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnsToBirthcertificateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('birthcertificate', function (Blueprint $table) {
            //
            $table->string('pay_slip')->nullable();     
            $table->string('chalan_number')->default(0);      
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('birthcertificate', function (Blueprint $table) {
            //
            $table->dropColumn('pay_slip');
            $table->dropColumn('chalan_number');
        });
    }
}
