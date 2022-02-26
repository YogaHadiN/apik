<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SediaansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('sediaans')->delete();
        
        \DB::table('sediaans')->insert(array (
            0 => 
            array (
                'sediaan' => 'ampul',
                'created_at' => '2021-12-25 21:26:55',
                'updated_at' => '2021-12-25 21:26:48',
            ),
            1 => 
            array (
                'sediaan' => 'botol',
                'created_at' => '2021-12-25 21:26:55',
                'updated_at' => '2021-12-25 21:26:48',
            ),
            2 => 
            array (
                'sediaan' => 'drop',
                'created_at' => '2021-12-25 21:26:55',
                'updated_at' => '2021-12-25 21:26:48',
            ),
            3 => 
            array (
                'sediaan' => 'dry syrup',
                'created_at' => '2021-12-25 21:26:55',
                'updated_at' => '2021-12-25 21:26:48',
            ),
            4 => 
            array (
                'sediaan' => 'ear drop',
                'created_at' => '2021-12-25 21:26:55',
                'updated_at' => '2021-12-25 21:26:48',
            ),
            5 => 
            array (
                'sediaan' => 'eye drop',
                'created_at' => '2021-12-25 21:26:55',
                'updated_at' => '2021-12-25 21:26:48',
            ),
            6 => 
            array (
                'sediaan' => 'kolf',
                'created_at' => '2021-12-25 21:26:55',
                'updated_at' => '2021-12-25 21:26:48',
            ),
            7 => 
            array (
                'sediaan' => 'obat kumur',
                'created_at' => '2021-12-25 21:26:55',
                'updated_at' => '2021-12-25 21:26:48',
            ),
            8 => 
            array (
                'sediaan' => 'pcs',
                'created_at' => '2021-12-25 21:26:55',
                'updated_at' => '2021-12-25 21:26:48',
            ),
            9 => 
            array (
                'sediaan' => 'salep',
                'created_at' => '2021-12-25 21:26:55',
                'updated_at' => '2021-12-25 21:26:48',
            ),
            10 => 
            array (
                'sediaan' => 'syrup',
                'created_at' => '2021-12-25 21:26:55',
                'updated_at' => '2021-12-25 21:26:48',
            ),
            11 => 
            array (
                'sediaan' => 'tablet',
                'created_at' => '2021-12-25 21:26:55',
                'updated_at' => '2021-12-25 21:26:48',
            ),
            12 => 
            array (
                'sediaan' => 'vial',
                'created_at' => '2021-12-25 21:26:55',
                'updated_at' => '2021-12-25 21:26:48',
            ),
        ));
        
        
    }
}
