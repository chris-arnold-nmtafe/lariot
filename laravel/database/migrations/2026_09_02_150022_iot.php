<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('iot_sensors', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->string('description');
            $table->geometry('location');
        });
        Schema::create('iot_sensor_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('iot_sensor_id')->nullable()->constrained();
            $table->string('measurement', 255);
            $table->decimal('value');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iot_sensors');
        Schema::dropIfExists('iot_sensor_data');
    }
};
