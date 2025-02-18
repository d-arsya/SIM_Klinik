<?php

namespace Database\Seeders;

use App\Models\Desa;
use Illuminate\Database\Seeder;

class DesaSeeder extends Seeder
{
    public function run()
    {
        Desa::create(['nama_desa' => 'Desa Cibabat', 'id_kecamatan' => 1]); // Sesuaikan id_kecamatan
        Desa::create(['nama_desa' => 'Desa Cipageran', 'id_kecamatan' => 1]);
        Desa::create(['nama_desa' => 'Desa Bandengan', 'id_kecamatan' => 2]);
        Desa::create(['nama_desa' => 'Desa Kreo', 'id_kecamatan' => 3]);
        // Tambahkan data desa lainnya sesuai kebutuhan
    }
}
