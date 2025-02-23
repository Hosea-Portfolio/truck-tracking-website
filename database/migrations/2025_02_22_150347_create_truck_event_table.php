<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTruckEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truck_event', function (Blueprint $table) {
            $table->id();
            $table->foreignId('truck_id');
            $table->string('location_name');
            $table->string('description')->nullable();
            $table->tinyInteger('status_truck_event');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('truck_event');
    }
}
