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
        Schema::create('compare_lensa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('lens1_id')->unsigned();
            $table->unsignedBigInteger('lens2_id')->unsigned();
            $table->softDeletes();
            $table->timestamps();


            $table->foreign('lens1_id')->references('id')->on('lens')->onDelete('cascade');
            $table->foreign('lens2_id')->references('id')->on('lens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compare_lensa');
    }
};