<?php

use App\Models\Hewan;
use App\Models\Owner;
use App\Models\Ras;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasienTable extends Migration
{
    public function up()
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id('id_pasien');
            // $table->foreignId('id_owner')->constrained('owner')->onDelete('cascade');
            $table->string('nama_pasien');
            // $table->foreignId('id_jenis_hewan')->constrained('hewan')->onDelete('cascade');
            // $table->foreignId('id_ras')->constrained('ras')->onDelete('cascade');
            $table->foreignIdFor(Owner::class)->onDelete('cascade');
            $table->foreignIdFor(Hewan::class)->onDelete('cascade');
            $table->foreignIdFor(Ras::class)->onDelete('cascade');
            $table->string('jenis_kelamin');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pasien');
    }
}
