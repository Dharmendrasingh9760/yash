<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToBirthcertificateTable extends Migration
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
            $table->string('amount')->nullable()->after('weight_at_birth');
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
        Schema::table('birthcertificate', function (Blueprint $table) {
            //
            $table->dropColumn(['amount', 'approval_date', 'payment_status']);

        });
    }
}
