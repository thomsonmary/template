<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('relations')->insert([
            [
                'id' => 1,
                'rps_id' => 2,
                'sap_id' => 2,
                'mata_kuliah_id' => 2,
                'dosen_id' => 4,
                'kaprodi_id' => 1,
                'semester_id' => 4,
                'time_id' => 1,
                'template_rps_id' => 1,
                'template_sap_id' => 1,
                'bahan_ajar_id' => 2,
                'validasi_gkm' => 'valid',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'rps_id' => 1,
                'sap_id' => 1,
                'mata_kuliah_id' => 1,
                'dosen_id' => 2,
                'kaprodi_id' => 1,
                'semester_id' => 4,
                'time_id' => 2,
                'template_rps_id' => 1,
                'template_sap_id' => 1,
                'bahan_ajar_id' => 1,
                'validasi_gkm' => 'valid',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
