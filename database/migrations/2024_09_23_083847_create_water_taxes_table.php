<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWaterTaxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('water_taxes', function (Blueprint $table) {
            $table->id();
            $table->string('emitra_12_code')->nullable();
            $table->string('mobile')->nullable();
            $table->string('email')->nullable();
            $table->string('status')->default(0)->nullable();
            $table->string('user_id')->nullable();
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
        Schema::dropIfExists('water_taxes');
    }
}
