<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class HasGotDamage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('has_got_damages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('vehicle_id');
            $table->foreign('vehicle_id')->references('id')->on('vehicles');
            $table->unsignedBigInteger('check_id');
            $table->foreign('check_id')->references('id')->on('vehicle_checks');
            $table->unsignedBigInteger('vehicle_part_id');
            $table->foreign('vehicle_part_id')->references('id')->on('vehicle_parts');
            $table->unsignedBigInteger('damage_type_id');
            $table->foreign('damage_type_id')->references('id')->on('damage_types');
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
        Schema::dropIfExists('has_got_damages');
    }
}
