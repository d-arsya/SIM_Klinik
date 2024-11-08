<?php

namespace Database\Seeders;

use App\Models\Kabupaten;
use Illuminate\Database\Seeder;

class KabupatenSeeder extends Seeder
{
    public function run()
    {
        Kabupaten::create(['nama_kota' => 'Bandung', 'provinsi_id' => 1]); // Sesuaikan provinsi_id
        Kabupaten::create(['nama_kota' => 'Cirebon', 'provinsi_id' => 1]);
        Kabupaten::create(['nama_kota' => 'Semarang', 'provinsi_id' => 2]);
        Kabupaten::create(['nama_kota' => 'Surabaya', 'provinsi_id' => 3]);
        // Tambahkan data kabupaten lainnya sesuai kebutuhan
    }
}
