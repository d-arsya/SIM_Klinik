<?php

use App\Models\Hewan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRasTable extends Migration
{
    public function up()
    {
        Schema::create('ras', function (Blueprint $table) {
            $table->id('id_ras');
            // $table->foreignId('id_jenis_hewan')->constrained('hewan')->onDelete('cascade');
            // $table->foreignIdFor(Hewan::class)->onDelete('cascade');
            $table->foreignId('hewan_id')->constrained('hewan','id_jenis_hewan')->onDelete('cascade');
            $table->string('nama_ras');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ras');
    }
}
