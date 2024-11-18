<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusRemarkToBirthcertificateTable extends Migration
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
            $table->tinyInteger('status')->default(0)->after('updated_at');
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
        Schema::table('birthcertificate', function (Blueprint $table) {
            //
            $table->dropColumn('status');
            $table->dropColumn('remark');

        });
    }
}
