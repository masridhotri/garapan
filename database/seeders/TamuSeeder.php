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
       $data=[ [
            'nama' => 'Kuntum Khairunnesa',
            'instansi' => 'RSUD',
            'alamat' => 'Pacitan',
            'nope' => '083119457977',
            'keperluan' => 'Praktik Kerja Lapangan',
            'tanggal' => '2024/12/06',
        ],
    
        [
            'nama' => 'Kuntum',
            'instansi' => 'smk',
            'alamat' => 'kayen',
            'nope' => '083119457977',
            'keperluan' => 'visit',
            'tanggal' => '2024/12/07',
        ],
        [
            'nama' => 'nesa',
            'instansi' => 'smp',
            'alamat' => 'jelok',
            'nope' => '083119457977',
            'keperluan' => 'rapat',
            'tanggal' => '2024/12/08',
        ],
        [
            'nama' => 'kuntumnesa',
            'instansi' => 'sd',
            'alamat' => 'sukoharjo',
            'nope' => '083119457977',
            'keperluan' => 'kunjungan dinas',
            'tanggal' => '2024/12/09',
        ],
        [
            'nama' => 'rasta',
            'instansi' => 'RSUD',
            'alamat' => 'bolosingo',
            'nope' => '0123456789',
            'keperluan' => 'main main',
            'tanggal' => '2024/12/10',
        ],
        [
            'nama' => 'deya',
            'instansi' => 'RSUD',
            'alamat' => 'tanjung',
            'nope' => '09876543221',
            'keperluan' => 'rapat',
            'tanggal' => '2024/12/11',
        ],
        [
            'nama' => 'lethek',
            'instansi' => 'kjhfw',
            'alamat' => 'jhiuhiwefga',
            'nope' => '076456395535',
            'keperluan' => 'visit',
            'tanggal' => '2024/12/12',
        ],
        [
            'nama' => 'erin',
            'instansi' => 'jkbkdfsg',
            'alamat' => 'rebsfs',
            'nope' => '076456395535',
            'keperluan' => 'visit',
            'tanggal' => '2024/12/13',
        ],
        [
            'nama' => 'agil',
            'instansi' => 'jbyfk',
            'alamat' => 'tdkuhvgi',
            'nope' => '076456395535',
            'keperluan' => 'visit',
            'tanggal' => '2024/12/14',
        ],
        [
            'nama' => 'kamto',
            'instansi' => 'jbyfk',
            'alamat' => 'tdkuhvgi',
            'nope' => '076456395535',
            'keperluan' => 'visit',
            'tanggal' => '2024/12/15',
        ],
        [
            'nama' => 'khairunnesa',
            'instansi' => 'jbyfk',
            'alamat' => 'tdkuhvgi',
            'nope' => '076456395535',
            'keperluan' => 'visit',
            'tanggal' => '2024/12/16',
        ],
        [
            'nama' => 'puan',
            'instansi' => 'jbyfk',
            'alamat' => 'tdkuhvgi',
            'nope' => '076456395535',
            'keperluan' => 'visit',
            'tanggal' => '2024/12/17',
        ],
        [
            'nama' => 'jefri',
            'instansi' => 'jbyfk',
            'alamat' => 'tdkuhvgi',
            'nope' => '076456395535',
            'keperluan' => 'visit',
            'tanggal' => '2024/06/17',
        ],
        [
            'nama' => 'inka',
            'instansi' => 'jbyfk',
            'alamat' => 'tdkuhvgi',
            'nope' => '076456395535',
            'keperluan' => 'visit',
            'tanggal' => '2024/01/17',
        ],
        [
            'nama' => 'annisa',
            'instansi' => 'jbyfk',
            'alamat' => 'tdkuhvgi',
            'nope' => '076456395535',
            'keperluan' => 'visit',
            'tanggal' => '2024/01/17',
        ],
        [
            'nama' => 'nur',
            'instansi' => 'jbyfk',
            'alamat' => 'tdkuhvgi',
            'nope' => '076456395535',
            'keperluan' => 'visit',
            'tanggal' => '2024/04/17',
        ],
        [
            'nama' => 'hidayah',
            'instansi' => 'jbyfk',
            'alamat' => 'tdkuhvgi',
            'nope' => '076456395535',
            'keperluan' => 'visit',
            'tanggal' => '2024/05/17',
        ]
        ];
        DB::table('tamus')->insert($data);
    }
}
