<?php

use App\Models\Pasien;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRekamMedisTable extends Migration
{
    public function up()
    {
        Schema::create('rekam_medis', function (Blueprint $table) {
            $table->id('id_rm');
            // $table->foreignId('id_pasien')->constrained('pasien')->onDelete('cascade');
            $table->foreignId('id_pasien')->constrained('pasien','id_pasien')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rekam_medis');
    }
}
