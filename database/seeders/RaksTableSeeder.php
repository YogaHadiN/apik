<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RaksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('raks')->delete();
        
        \DB::table('raks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nomor_rak' => 'R12',
                'harga_beli' => 200,
                'harga_jual' => 400,
                'stok_minimal' => 100,
                'stok' => 100,
                'formula_id' => 1,
                'kelas_obat_id' => 2,
                'tenant_id' => 1,
                'created_at' => '2022-01-02 00:55:22',
                'updated_at' => '2022-01-02 00:55:22',
            ),
        ));
        
        
    }
}