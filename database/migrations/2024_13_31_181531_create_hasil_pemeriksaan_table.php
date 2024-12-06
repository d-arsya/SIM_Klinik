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

            $table->foreignId('id_pasien')
                ->constrained('pasien', 'id_pasien') // Sesuaikan nama kolom primary key
                ->onDelete('cascade');
            // Foreign keys
            $table->foreignId('id_diagnosa')
                ->constrained('diagnosa', 'id_diagnosa') // Sesuaikan nama kolom primary key
                ->onDelete('cascade');


            $table->foreignId('id_pelayanan')
                ->constrained('pelayanan', 'id_pelayanan') // Jika primary key juga berbeda
                ->onDelete('cascade');

            $table->foreignId('id_rm')
                ->constrained('rekam_medis', 'id_rm') // Jika primary key juga berbeda
                ->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hasil_pemeriksaan');
    }
}
