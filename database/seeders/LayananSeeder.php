<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_layanan')->insert([
            [
                'namalayanan' => 'Pendidikan'
            ],
            [
                'namalayanan' => 'Kesehatan'
            ],
            [
                'namalayanan' => 'Administratif'
            ],
            [
                'namalayanan' => 'Publik'
            ],
            [
                'namalayanan' => 'Sarana Prasaran'
            ],
            [
                'namalayanan' => 'Regulatif'
            ],
        ]);
    }
}
