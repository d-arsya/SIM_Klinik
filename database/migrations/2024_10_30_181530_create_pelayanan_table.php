<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelayananTable extends Migration
{
    public function up()
    {
        Schema::create('pelayanan', function (Blueprint $table) {
            $table->id('id_pelayanan');
            $table->string('jenis_pelayanan');
            $table->decimal('harga', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pelayanan');
    }
}
