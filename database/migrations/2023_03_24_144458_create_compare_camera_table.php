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
        Schema::create('compare_camera', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('camera1_id')->unsigned();
            $table->unsignedBigInteger('camera2_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('camera1_id')->references('id')->on('camera')->onDelete('cascade');
            $table->foreign('camera2_id')->references('id')->on('camera')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compare_camera');
    }
};