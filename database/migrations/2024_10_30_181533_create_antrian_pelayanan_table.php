<?php

use App\Models\Antrian;
use App\Models\Pelayanan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntrianPelayananTable extends Migration
{
    public function up()
    {
        Schema::create('antrian_pelayanan', function (Blueprint $table) {
            $table->id('id_antrian_pelayanan');
            // $table->foreignId('id_antrian')->constrained('antrian')->onDelete('cascade');
            // $table->foreignId('id_pelayanan')->constrained('pelayanan')->onDelete('cascade');
            $table->foreignIdFor(Antrian::class)->onDelete('cascade');
            $table->foreignIdFor(Pelayanan::class)->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('antrian_pelayanan');
    }
}
