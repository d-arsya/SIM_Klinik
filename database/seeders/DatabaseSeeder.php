<?php

namespace Database\Seeders;

use App\Models\Hewan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            ProvinsiSeeder::class,
            KabupatenSeeder::class,
            KecamatanSeeder::class,
            DesaSeeder::class,
            HewanSeeder::class
        ]);
    }
}
