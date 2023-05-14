<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Menambahkan data baru pada tabel detail_profile menggunakan metode insert pada Query Builder
        DB::table('detail_profile')->insert([
        // Menambahkan kolom addres dengan nilai 'jember'
        'addres'=> 'jember',
        // Menambahkan kolom nomor_tlp dengan nilai '08xxxxx'
        'nomor_tlp' => '08xxxxx',
        // Menambahkan kolom ttl dengan nilai '2002-11-14'
        'ttl' => '2002-11-14',
        // Menambahkan kolom foto dengan nilai 'picture.png'
        'foto' => 'picture.png'
        ]);
    }
}
