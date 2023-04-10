<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PertanyaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_pertanyaan')->insert([
            [
                'unsur' => 'Persyaratan',
                'no_urut' => 1,
                'pertanyaan' => 'Bagaimana Pendapat Saudara tentang kesesuaian persyaratan pelayanan dengan jenis pelayanannya.'
            ],
            [
                'unsur' => 'Pelayanan',
                'no_urut' => 2,
                'pertanyaan' => 'Bagaimana pemahaman Saudara tentang kemudahan prosedur pelayanan di unit ini.'
            ],
            [
                'unsur' => 'Waktu',
                'no_urut' => 3,
                'pertanyaan' => 'Bagaimana pendapat Saudara tentang kecepatan waktu dalam memberikan pelayanan.'
            ],
            [
                'unsur' => 'Biaya',
                'no_urut' => 4,
                'pertanyaan' => 'Bagaimana pendapat Saudara tentang kewajaran biaya/tarif dalam pelayanan.'
            ],
            [
                'unsur' => 'Pelayanan',
                'no_urut' => 2,
                'pertanyaan' => 'Bagaimana pendapat Saudara tentang kesesuaian produk pelayanan antara yang tercantum dalam standar pelayanan dengan hasil yang diberikan.'
            ],
            [
                'unsur' => 'Perilaku',
                'no_urut' => 6,
                'pertanyaan' => 'Bagaimana pendapat Saudara tentang kompetensi/kemampuan petugas dalam pelayanan',
            ],
            [
                'unsur' => 'Perilaku',
                'no_urut' => 6,
                'pertanyaan' => 'Bagaimana pendapat Saudara perilaku petugas dalam pelayanan terkait kesopanan dan keramahan'
            ],
            [
                'unsur' => 'Penanganan Masukan',
                'no_urut' => 7,
                'pertanyaan' => 'Bagaimana pendapat Saudara tentang kualitas sarana dan prasarana.'
            ],
            [
                'unsur' => 'Sarana dan Prasarana',
                'no_urut' => 8,
                'pertanyaan' => 'Bagaimana pendapat Saudara tentang penanganan pengaduan pengguna layanan.'
            ]
        ]);
    }
}
