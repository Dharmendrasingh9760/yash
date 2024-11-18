<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnsToMarriagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marriages', function (Blueprint $table) {
            //
            $table->text('pay_slip')->nullable();     
            $table->text('chalan_number')->default(0);  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('marriages', function (Blueprint $table) {
            //
            $table->dropColumn('pay_slip');
            $table->dropColumn('chalan_number');
        });
    }
}
