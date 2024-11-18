<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToMarriagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marriages', function (Blueprint $table) {
            $table->text('amount')->nullable()->after('age_proof_mother');
            $table->text('approval_date')->nullable()->after('amount');
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
        Schema::table('marriages', function (Blueprint $table) {
            $table->dropColumn(['amount', 'approval_date', 'payment_status']);
        });
    }
}
