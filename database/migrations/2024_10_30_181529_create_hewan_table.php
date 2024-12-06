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
            $table->string('jenis_hewan');
            $table->float('pulsus');
            $table->float('suhu');
            $table->float('frekuensi_napas');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hewan');
    }
}
