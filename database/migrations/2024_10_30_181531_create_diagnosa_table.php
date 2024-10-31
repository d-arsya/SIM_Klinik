<?php

use App\Models\Hewan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosaTable extends Migration
{
    public function up()
    {
        Schema::create('diagnosa', function (Blueprint $table) {
            $table->id('id_diagnosa');
            $table->string('hasil_diagnosa');
            // $table->foreignId('id_jenis_hewan')->constrained('hewan')->onDelete('cascade');
            $table->foreignIdFor(Hewan::class)->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('diagnosa');
    }
}
