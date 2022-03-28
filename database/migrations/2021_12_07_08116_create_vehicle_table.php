<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('licencePlate');
            $table->float('mileage');
            $table->integer('nbSeat');
            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('vehicle_statuses');
            $table->unsignedBigInteger('vehicle_model_id');
            $table->foreign('vehicle_model_id')->references('id')->on('vehicle_models');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vehicles');
    }
}
