<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kategoris = [
            ['nama_kategori' => 'Makanan'],
            ['nama_kategori' => 'Minuman'],
        ];
        // masukkan data ke database
        DB::table('kategoris')->insert($kategoris);

    }
}
