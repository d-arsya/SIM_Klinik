<?php

namespace Database\Seeders;

use App\Models\Provinsi;
use Illuminate\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    public function run()
    {
        Provinsi::create(['nama_provinsi' => 'Jawa Barat']);
        Provinsi::create(['nama_provinsi' => 'Jawa Tengah']);
        Provinsi::create(['nama_provinsi' => 'Jawa Timur']);
        // Tambahkan data provinsi lainnya sesuai kebutuhan
    }
}
