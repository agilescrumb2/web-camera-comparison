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
        Schema::create('fullset', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('camera_id')->unsigned();
            $table->unsignedBigInteger('lens_id')->unsigned();
            $table->integer('price');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('camera_id')->references('id')->on('camera')->onDelete('cascade');
            $table->foreign('lens_id')->references('id')->on('lens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fullset');
    }
};