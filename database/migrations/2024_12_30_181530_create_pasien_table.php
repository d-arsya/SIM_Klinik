<?php

use App\Models\Ras;
use App\Models\Hewan;
use App\Models\Owner;
use App\Models\Pelayanan;
use App\Models\Warna;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasienTable extends Migration
{
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id('id_pasien');
            $table->string('nama_pasien');
            $table->string('umur');
            $table->enum('gender', ['jantan', 'betina']);
            $table->foreignId('owner_id')->constrained('owner', 'id_owner')->onDelete('cascade');
            $table->string('jenis_vaksin')->nullable();
            $table->boolean('sudah_vaksin')->default(false);
            $table->foreignId('hewan_id')->constrained('hewan', 'id_jenis_hewan')->onDelete('cascade');
            $table->foreignId('id_warna')->constrained('warna')->onDelete('cascade');
            $table->foreignId('id_ras')->constrained('ras','id_ras')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pasien');
    }
}
