<?php

use App\Models\Kabupaten;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKecamatanTable extends Migration
{
    public function up()
    {
        Schema::create('kecamatan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kecamatan');
            // $table->foreignId('id_kabupaten')->constrained('kabupaten')->onDelete('cascade');
            $table->foreignIdFor(Kabupaten::class)->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kecamatan');
    }
}
