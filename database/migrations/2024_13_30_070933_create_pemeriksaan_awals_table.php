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
        Schema::create('pemeriksaan_awal', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_pasien')->constrained('pasien','id_pasien');
            $table->integer('berat_badan');
            $table->integer('bulsus');
            $table->integer('frekuensi_napas');
            $table->integer('suhu');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaan_awal');
    }
};
