<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HewanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dataHewan = [
            ['jenis_hewan' => 'Monyet', 'pulsus' => '70', 'suhu' => '36', 'frekuensi_napas' => '76'],
            ['jenis_hewan' => 'Kucing', 'pulsus' => '120', 'suhu' => '38', 'frekuensi_napas' => '25'],
            ['jenis_hewan' => 'Anjing', 'pulsus' => '100', 'suhu' => '37', 'frekuensi_napas' => '30'],
            ['jenis_hewan' => 'Kelinci', 'pulsus' => '205', 'suhu' => '39', 'frekuensi_napas' => '50'],
            ['jenis_hewan' => 'Sapi', 'pulsus' => '60', 'suhu' => '38', 'frekuensi_napas' => '25'],
            ['jenis_hewan' => 'Kuda', 'pulsus' => '40', 'suhu' => '37', 'frekuensi_napas' => '12'],
            ['jenis_hewan' => 'Ayam', 'pulsus' => '275', 'suhu' => '41', 'frekuensi_napas' => '20'],
            ['jenis_hewan' => 'Bebek', 'pulsus' => '190', 'suhu' => '40', 'frekuensi_napas' => '18'],
            ['jenis_hewan' => 'Domba', 'pulsus' => '75', 'suhu' => '39', 'frekuensi_napas' => '16'],
            ['jenis_hewan' => 'Kambing', 'pulsus' => '70', 'suhu' => '39', 'frekuensi_napas' => '16'],
            ['jenis_hewan' => 'Ikan Mas', 'pulsus' => '80', 'suhu' => '24', 'frekuensi_napas' => '30'],
            ['jenis_hewan' => 'Kura-kura', 'pulsus' => '30', 'suhu' => '28', 'frekuensi_napas' => '6'],
            ['jenis_hewan' => 'Burung', 'pulsus' => '250', 'suhu' => '40', 'frekuensi_napas' => '40'],
            ['jenis_hewan' => 'Ular', 'pulsus' => '60', 'suhu' => '30', 'frekuensi_napas' => '10'],
            ['jenis_hewan' => 'Hamster', 'pulsus' => '400', 'suhu' => '37', 'frekuensi_napas' => '74'],
            ['jenis_hewan' => 'Gajah', 'pulsus' => '30', 'suhu' => '35', 'frekuensi_napas' => '8'],
            ['jenis_hewan' => 'Harimau', 'pulsus' => '60', 'suhu' => '38', 'frekuensi_napas' => '20'],
            ['jenis_hewan' => 'Kuda Nil', 'pulsus' => '25', 'suhu' => '35', 'frekuensi_napas' => '4'],
            ['jenis_hewan' => 'Lumba-lumba', 'pulsus' => '40', 'suhu' => '36', 'frekuensi_napas' => '10'],
            ['jenis_hewan' => 'Rusa', 'pulsus' => '70', 'suhu' => '39', 'frekuensi_napas' => '15'],
            ['jenis_hewan' => 'Badak', 'pulsus' => '30', 'suhu' => '36', 'frekuensi_napas' => '6'],
            ['jenis_hewan' => 'Penguin', 'pulsus' => '80', 'suhu' => '39', 'frekuensi_napas' => '20'],
            ['jenis_hewan' => 'Buaya', 'pulsus' => '50', 'suhu' => '32', 'frekuensi_napas' => '4'],
            ['jenis_hewan' => 'Serigala', 'pulsus' => '90', 'suhu' => '38', 'frekuensi_napas' => '22'],
            ['jenis_hewan' => 'Zebra', 'pulsus' => '55', 'suhu' => '37', 'frekuensi_napas' => '15'],
            ['jenis_hewan' => 'Paus', 'pulsus' => '20', 'suhu' => '34', 'frekuensi_napas' => '5'],
            ['jenis_hewan' => 'Musang', 'pulsus' => '150', 'suhu' => '39', 'frekuensi_napas' => '30'],
            ['jenis_hewan' => 'Bison', 'pulsus' => '40', 'suhu' => '37', 'frekuensi_napas' => '10'],
            ['jenis_hewan' => 'Kanguru', 'pulsus' => '50', 'suhu' => '36', 'frekuensi_napas' => '18'],
            ['jenis_hewan' => 'Koala', 'pulsus' => '80', 'suhu' => '37', 'frekuensi_napas' => '12']
        ];

        // Insert data ke database
        DB::table('hewan')->insert($dataHewan);
    }
}
