<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHewanTable extends Migration
{
    public function up()
    {
        Schema::create('hewan', function (Blueprint $table) {
            $table->id('id_jenis_hewan');
            $table->string('nama_hewan');
            $table->enum('gender', ['jantan', 'betina']);
            $table->string('umur');
            $table->string('jenis_hewan');
            $table->string('warna');
            $table->float('berat_badan');
            $table->float('pulsus');
            $table->float('suhu');
            $table->float('frekuensi_napas');
            $table->string('service');
            $table->string('jenis_vaksin')->nullable();
            $table->boolean('sudah_vaksin')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hewan');
    }
}
