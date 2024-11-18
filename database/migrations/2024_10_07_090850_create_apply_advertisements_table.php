<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplyAdvertisementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_advertisements', function (Blueprint $table) {
            $table->id();
            $table->string('user_price')->nullable();
            $table->string('advertisement_id')->nullable();
            $table->string('user_id')->nullable();
            $table->string('remark')->nullable();
            $table->string('status')->nullable();
            $table->string('chalan_number')->nullable();
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
        Schema::dropIfExists('apply_advertisements');
    }
}
