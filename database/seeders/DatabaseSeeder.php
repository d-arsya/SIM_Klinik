<?php

namespace Database\Seeders;

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
        ]);
    }
}
