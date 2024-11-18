<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToDeathcertificateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('deathcertificate', function (Blueprint $table) {
            //
            $table->string('amount')->nullable()->after('alchol_addicted');
            $table->string('approval_date')->nullable()->after('amount');
            $table->tinyInteger('payment_status')->default(0)->after('approval_date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('deathcertificate', function (Blueprint $table) {
            //
            $table->dropColumn(['amount', 'approval_date', 'payment_status']);
        });
    }
}
