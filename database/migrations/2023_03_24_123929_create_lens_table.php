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
        Schema::create('lens', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('type');
            $table->integer('focal_length');
            $table->integer('maximum_aperture');
            $table->integer('minimum_aperture');
            $table->string('mount');
            $table->integer('filter_size');
            $table->string('lens_construction');
            $table->integer('diagonal_angle_of_view');
            $table->integer('horizontal_angle_of_view');
            $table->integer('vertical_angle_of_view');
            $table->string('image_stabilization');
            $table->boolean('weather_sealed');
            $table->string('focus_type');
            $table->integer('price');
            $table->string('manufacturer');
            $table->integer('minimum_focus_distance');
            $table->string('autofocus');
            $table->string('dimensions');
            $table->string('image_quality');
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
        Schema::dropIfExists('lens');
    }
};