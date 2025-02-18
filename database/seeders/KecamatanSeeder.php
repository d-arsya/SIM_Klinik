<?php

namespace Database\Seeders;

use App\Models\Kecamatan;
use Illuminate\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    public function run()
    {
        Kecamatan::create(['nama_kecamatan' => 'Cimahi', 'id_kabupaten' => 1]); // Sesuaikan id_kabupaten
        Kecamatan::create(['nama_kecamatan' => 'Rancaekek', 'id_kabupaten' => 1]);
        Kecamatan::create(['nama_kecamatan' => 'Tegal', 'id_kabupaten' => 3]);
        Kecamatan::create(['nama_kecamatan' => 'Krembangan', 'id_kabupaten' => 4]);
        // Tambahkan data kecamatan lainnya sesuai kebutuhan
    }
}
