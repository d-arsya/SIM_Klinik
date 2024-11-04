<?php

use App\Models\Desa;
use App\Models\Kabupaten;
use App\Models\Kecamatan;
use App\Models\Provinsi;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOwnerTable extends Migration
{
    public function up()
    {
        Schema::create('owner', function (Blueprint $table) {
            $table->id('id_owner');
            $table->string('nama_owner');
            $table->string('gender');
            $table->string('alamat');
            // $table->foreignId('id_provinsi')->constrained('provinsi')->onDelete('cascade');
            // $table->foreignId('id_kabupaten')->constrained('kabupaten')->onDelete('cascade');
            // $table->foreignId('id_kecamatan')->constrained('kecamatan')->onDelete('cascade');
            // $table->foreignId('id_desa')->constrained('desa')->onDelete('cascade');
            $table->foreignIdFor(Provinsi::class)->onDelete('cascade');
            $table->foreignIdFor(Kabupaten::class)->onDelete('cascade');
            $table->foreignIdFor(Kecamatan::class)->onDelete('cascade');
            $table->foreignIdFor(Desa::class)->onDelete('cascade');
            $table->string('no_hp');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('owner');
    }
}




