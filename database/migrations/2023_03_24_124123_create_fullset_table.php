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
            $table->string('mode_af');
            $table->string('built_in_flash');
            $table->integer('jarak_fokus_terdekat');
            $table->integer('kecepatan_pemotretan');
            $table->integer('zoom_digital');
            $table->string('dimensi');
            $table->integer('iso_efektif');
            $table->string('mode_flash');
            $table->integer('panjang_fokus');
            $table->string('resolusi_gambar');
            $table->string('image_stabilizer');
            $table->integer('monitor_lcd_ukuran');
            $table->string('monitor_lcd_resolusi');
            $table->string('fokus_manual');
            $table->string('ukuran_sensor');
            $table->string('mode_pemotretan');
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
        Schema::dropIfExists('fullset');
    }
};
