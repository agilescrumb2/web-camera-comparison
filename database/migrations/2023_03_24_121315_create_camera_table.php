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
            $table->string('mode_af');
            $table->string('built_in_flash');
            $table->integer('kecepatan_pemotretan');
            $table->string('dimensi');
            $table->integer('iso_efektif');
            $table->string('exposure_compensation');
            $table->string('mode_flash');
            $table->string('resolusi_gambar');
            $table->string('image_stabilizer');
            $table->string('monitor_lcd_ukuran');
            $table->string('monitor_lcd_resolusi');
            $table->string('fokus_manual');
            $table->string('mode_pemotretan');
            $table->string('ukuran_sensor');
            $table->string('rentang_kecepatan_rana');
            $table->integer('bobot');
            $table->string('white_balance');
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
        Schema::dropIfExists('camera');
    }
};