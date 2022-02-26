<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FormulasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('formulas')->delete();
        
        \DB::table('formulas')->insert(array (
            0 => 
            array (
                'id' => 1,
                'indikasi' => 'indi',
                'kontraindikasi' => 'koi',
                'efek_samping' => 'efe',
                'dijual_bebas' => 1,
                'fornas' => 1,
                'sediaan_id' => 12,
                'aturan_minum_id' => '13395',
                'peringatan' => 'peri',
                'formula_json' => '["sediaan_id":13,"komposisi":{"generik_id":811,"bobot":"500","satuan_id":"1"}]',
                'boleh_dipuyer' => 1,
                'tenant_id' => 1,
                'created_at' => '2022-01-02 00:55:22',
                'updated_at' => '2022-01-02 00:55:22',
            ),
        ));
        
        
    }
}
