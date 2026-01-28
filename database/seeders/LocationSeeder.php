<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lokasi;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $lokasis = [
            ['nama_lokasi' => 'Ngawi City Hall'],
            ['nama_lokasi' => 'Alun-Alun Ngawi'],
            ['nama_lokasi' => 'Udinus'],
            ['nama_lokasi' => 'Stadion Ngawi'],
            ['nama_lokasi' => 'Taman Hiburan Rakyat Ngawi'],
        ];

        foreach ($lokasis as $lokasi) {
            Lokasi::create(['nama_lokasi' => $lokasi['nama_lokasi']]);
        }
    }
}
