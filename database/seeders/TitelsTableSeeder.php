<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TitelsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('titels')->delete();
        
        \DB::table('titels')->insert(array (
            0 => 
            array (
                'id' => 1,
                'titel' => 'dr',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 10:58:09',
                'updated_at' => '2021-12-27 10:58:09',
            ),
            1 => 
            array (
                'id' => 2,
                'titel' => 'drg',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 10:58:09',
                'updated_at' => '2021-12-27 10:58:09',
            ),
            2 => 
            array (
                'id' => 3,
                'titel' => 'ns',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 10:58:09',
                'updated_at' => '2021-12-27 10:58:09',
            ),
            3 => 
            array (
                'id' => 4,
                'titel' => 'bd',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 10:58:09',
                'updated_at' => '2021-12-27 10:58:09',
            ),
            4 => 
            array (
                'id' => 5,
                'titel' => 'apt',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 10:58:09',
                'updated_at' => '2021-12-27 10:58:09',
            ),
            5 => 
            array (
                'id' => 6,
                'titel' => 'ass-apt',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 10:58:09',
                'updated_at' => '2021-12-27 10:58:09',
            ),
            6 => 
            array (
                'id' => 7,
                'titel' => 'Tidak ada titel',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 10:58:09',
                'updated_at' => '2021-12-27 10:58:09',
            ),
        ));
        
        
    }
}