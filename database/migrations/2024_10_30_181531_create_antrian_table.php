<?php

use App\Models\Pasien;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAntrianTable extends Migration
{
    public function up()
    {
        Schema::create('antrian', function (Blueprint $table) {
            $table->id('id_antrian');
            // $table->foreignId('id_pasien')->constrained('pasien')->onDelete('cascade');
            $table->foreignIdFor(Pasien::class)->onDelete('cascade');
            $table->date('tanggal_antrian');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('antrian');
    }
}
