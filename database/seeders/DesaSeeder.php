<?php

namespace Database\Seeders;

use App\Models\Desa;
use Illuminate\Database\Seeder;

class DesaSeeder extends Seeder
{
    public function run()
    {
        Desa::create(['nama_desa' => 'Desa Cibabat', 'kecamatan_id' => 1]); // Sesuaikan kecamatan_id
        Desa::create(['nama_desa' => 'Desa Cipageran', 'kecamatan_id' => 1]);
        Desa::create(['nama_desa' => 'Desa Bandengan', 'kecamatan_id' => 2]);
        Desa::create(['nama_desa' => 'Desa Kreo', 'kecamatan_id' => 3]);
        // Tambahkan data desa lainnya sesuai kebutuhan
    }
}
