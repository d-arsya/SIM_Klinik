<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    public function run()
    {
        Kecamatan::create(['nama_kecamatan' => 'Cimahi', 'kabupaten_id' => 1]); // Sesuaikan kabupaten_id
        Kecamatan::create(['nama_kecamatan' => 'Rancaekek', 'kabupaten_id' => 1]);
        Kecamatan::create(['nama_kecamatan' => 'Tegal', 'kabupaten_id' => 3]);
        Kecamatan::create(['nama_kecamatan' => 'Krembangan', 'kabupaten_id' => 4]);
        // Tambahkan data kecamatan lainnya sesuai kebutuhan
    }
}
