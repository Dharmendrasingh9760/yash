<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusRemarkToTradeLicensesTable extends Migration
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
            $table->tinyInteger('check_status')->default(0)->after('updated_at');
            $table->string('remark')->nullable()->after('status');
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
            $table->dropColumn('check_status');
            $table->dropColumn('remark');
        });
    }
}
