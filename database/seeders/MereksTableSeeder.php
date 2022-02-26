<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MereksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('mereks')->delete();
        
        \DB::table('mereks')->insert(array (
            0 => 
            array (
                'id' => 1,
                'merek' => 'Lanamol',
                'exp_date' => '2022-01-06',
                'rak_id' => 1,
                'unit_tiap_paket' => 100,
                'tenant_id' => 1,
                'created_at' => '2022-01-02 00:55:22',
                'updated_at' => '2022-01-02 00:55:22',
            ),
        ));
        
        
    }
}