<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KelompokCoasTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kelompok_coas')->delete();
        
        \DB::table('kelompok_coas')->insert(array (
            0 => 
            array (
                'id' => 2,
                'kelompok_coa' => 'Hutang/Liability',
                'created_at' => '2022-01-04 16:16:31',
                'updated_at' => '2022-01-04 16:16:31',
            ),
            1 => 
            array (
                'id' => 3,
                'kelompok_coa' => 'Modal/Equity',
                'created_at' => '2022-01-04 16:16:31',
                'updated_at' => '2022-01-04 16:16:31',
            ),
            2 => 
            array (
                'id' => 4,
                'kelompok_coa' => 'Income/pendapatan',
                'created_at' => '2022-01-04 16:16:31',
                'updated_at' => '2022-01-04 16:16:31',
            ),
            3 => 
            array (
                'id' => 5,
            'kelompok_coa' => 'Cost of sales (HPP/Harga Pokok Penjualan)',
                'created_at' => '2022-01-04 16:16:31',
                'updated_at' => '2022-01-04 16:16:31',
            ),
            4 => 
            array (
                'id' => 6,
                'kelompok_coa' => 'Biaya/Expense',
                'created_at' => '2022-01-04 16:16:31',
                'updated_at' => '2022-01-04 16:16:31',
            ),
            5 => 
            array (
                'id' => 7,
                'kelompok_coa' => 'Other Income',
                'created_at' => '2022-01-04 16:16:31',
                'updated_at' => '2022-01-04 16:16:31',
            ),
            6 => 
            array (
                'id' => 8,
                'kelompok_coa' => 'Beban',
                'created_at' => '2022-01-04 16:16:31',
                'updated_at' => '2022-01-04 16:16:31',
            ),
            7 => 
            array (
                'id' => 11,
                'kelompok_coa' => 'Asset/Aktiva Lancar',
                'created_at' => '2022-01-04 16:16:31',
                'updated_at' => '2022-01-04 16:16:31',
            ),
            8 => 
            array (
                'id' => 12,
                'kelompok_coa' => 'Asset/Aktiva Tidak Lancar',
                'created_at' => '2022-01-04 16:16:31',
                'updated_at' => '2022-01-04 16:16:31',
            ),
        ));
        
        
    }
}