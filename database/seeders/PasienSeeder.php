<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pasien')->insert([
            'kategori'=> "Bayi",
            'nama'=> "Chika Rahayu",
            'usia'=> "1",
            'alamat'=> "Jambi"
        ]);
    }
}
