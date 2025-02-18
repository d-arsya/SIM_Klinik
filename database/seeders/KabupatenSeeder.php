<?php

namespace Database\Seeders;

use App\Models\Kabupaten;
use Illuminate\Database\Seeder;

class KabupatenSeeder extends Seeder
{
    public function run()
    {
        Kabupaten::create(['nama_kota' => 'Bandung', 'id_provinsi' => 1]); // Sesuaikan id_provinsi
        Kabupaten::create(['nama_kota' => 'Cirebon', 'id_provinsi' => 1]);
        Kabupaten::create(['nama_kota' => 'Semarang', 'id_provinsi' => 2]);
        Kabupaten::create(['nama_kota' => 'Surabaya', 'id_provinsi' => 3]);
        // Tambahkan data kabupaten lainnya sesuai kebutuhan
    }
}
