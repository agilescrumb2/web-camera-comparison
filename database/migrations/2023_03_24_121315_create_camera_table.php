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
        Schema::create('camera', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('type');
            $table->string('image_processor');
            $table->string('lcd');
            $table->string('video');
            $table->string('lens');
            $table->integer('weight');
            $table->string('memory_card_type');
            $table->integer('iso_range');
            $table->integer('megapixels');
            $table->integer('resolution');
            $table->integer('price');
            $table->string('connectivity');
            $table->integer('light_intensity');
            $table->string('sensor');
            $table->string('image_quality');
            $table->string('ecosystem');
            $table->string('image_stabilization');
            $table->boolean('flash');
            $table->boolean('weather_sealed');
            $table->string('scene_modes');
            $table->string('memory_card_slot');
            $table->boolean('battery_grip');
            $table->boolean('burst_shooting');
            $table->string('shutter_speed');
            $table->string('image');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camera');
    }
};