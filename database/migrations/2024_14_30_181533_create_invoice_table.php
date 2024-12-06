<?php

use App\Models\Pasien;
use App\Models\HasilPemeriksaan;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvoiceTable extends Migration
{
    public function up()
    {
        Schema::create('invoice', function (Blueprint $table) {
            $table->id('id_invoice');
            // $table->foreignId('id_pasien')->constrained('pasien')->onDelete('cascade');
            // $table->foreignId('id_hasil_pemeriksaan')->constrained('hasil_pemeriksaan')->onDelete('cascade');

            $table->foreignId('id_pasien')
                ->constrained('pasien', 'id_pasien')
                ->onDelete('cascade');
            $table->foreignId('id_hasil_pemeriksaan')
                ->constrained('hasil_pemeriksaan', 'id_hasil_pemeriksaan')
                ->onDelete('cascade');
            $table->date('tanggal_invoice');
            $table->decimal('total_biaya', 10, 2);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('invoice');
    }
}
