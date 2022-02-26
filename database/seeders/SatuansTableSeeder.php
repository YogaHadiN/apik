<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SatuansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('satuans')->delete();
        
        \DB::table('satuans')->insert(array (
            0 => 
            array (
                'id' => 1,
                'satuan' => 'mg',
                'created_at' => '2021-12-25 21:08:29',
                'updated_at' => '2021-12-25 21:08:29',
            ),
            1 => 
            array (
                'id' => 2,
                'satuan' => '%',
                'created_at' => '2021-12-25 21:08:29',
                'updated_at' => '2021-12-25 21:08:29',
            ),
            2 => 
            array (
                'id' => 3,
                'satuan' => 'IU',
                'created_at' => '2021-12-25 21:08:29',
                'updated_at' => '2021-12-25 21:08:29',
            ),
        ));
        
        
    }
}