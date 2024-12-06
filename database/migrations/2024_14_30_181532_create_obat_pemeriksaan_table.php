<?php

use App\Models\HasilPemeriksaan;
use App\Models\StokObat;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObatPemeriksaanTable extends Migration
{
    public function up()
    {
        Schema::create('obat_pemeriksaan', function (Blueprint $table) {
            $table->id('id_obat_pemeriksaan');
            // $table->foreignId('id_hasil_pemeriksaan')->constrained('hasil_pemeriksaan')->onDelete('cascade');
            // $table->foreignId('id_obat')->constrained('stok_obat')->onDelete('cascade');
            $table->foreignId('id_hasil_pemeriksaan')
                ->constrained('hasil_pemeriksaan', 'id_hasil_pemeriksaan') // Jika primary key juga berbeda
                ->onDelete('cascade');
            $table->foreignId('id_obat')
                ->constrained('stok_obat', 'id_obat') // Jika primary key juga berbeda
                ->onDelete('cascade');
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('obat_pemeriksaan');
    }
}
