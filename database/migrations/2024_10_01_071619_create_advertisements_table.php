<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('price')->nullable();
            $table->string('mobile')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('adderss')->nullable();
            $table->string('city')->nullable();
            $table->string('pincode')->nullable();
            $table->string('status')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('amount')->nullable();
            $table->string('remaining')->nullable();
            $table->string('booked')->nullable();
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
        Schema::dropIfExists('advertisements');
    }
}
