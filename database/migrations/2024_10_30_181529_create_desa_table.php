<?php

use App\Models\Kecamatan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesaTable extends Migration
{
    public function up()
    {
        Schema::create('desa', function (Blueprint $table) {
            $table->id();
            $table->string('nama_desa');
            // $table->foreignIdFor(Kecamatan::class)->onDelete('cascade');
            $table->foreignId('id_kecamatan')->constrained('kecamatan')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('desa');
    }
}
