<?php

use App\Models\Diagnosa;
use App\Models\Pelayanan;
use App\Models\RekamMedis;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilPemeriksaanTable extends Migration
{
    public function up()
    {
        Schema::create('hasil_pemeriksaan', function (Blueprint $table) {
            $table->id('id_hasil_pemeriksaan');
            // $table->foreignId('id_diagnosa')->constrained('diagnosa')->onDelete('cascade');
            // $table->foreignId('id_pelayanan')->constrained('pelayanan')->onDelete('cascade');
            // $table->foreignId('id_rm')->constrained('rekam_medis')->onDelete('cascade');
            $table->foreignIdFor(Diagnosa::class)->onDelete('cascade');
            $table->foreignIdFor(Pelayanan::class)->onDelete('cascade');
            $table->foreignIdFor(RekamMedis::class)->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hasil_pemeriksaan');
    }
}
