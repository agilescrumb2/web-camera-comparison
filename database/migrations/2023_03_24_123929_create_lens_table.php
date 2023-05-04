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
            $table->float('bobot');
            $table->string('diameter_panjang');
            $table->string('aperture_minimum');
            $table->integer('ukuran_filter');
            $table->string('jarak_pemfokusan_terdekat');
            $table->float('pembesaran_maks');
            $table->integer('jumlah_bilah_diafragma');
            $table->integer('harga');
            $table->string('gambar');
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