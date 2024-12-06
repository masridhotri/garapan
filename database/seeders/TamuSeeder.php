<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TamuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tamus')->insert([
            'nama' => 'Kuntum Khairunnesa',
            'instansi' => 'RSUD',
            'alamat' => 'Pacitan',
            'nope' => '083119457977',
            'keperluan' => 'Praktik Kerja Lapangan',
            'tanggal' => '2024/12/06',
        ]);
    }
}
