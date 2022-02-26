<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TenantsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tenants')->delete();
        
        \DB::table('tenants')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tenant' => 'Klinik Jati Elok',
                'owner_name' => 'Yoga Hadi Nugroho',
                'alamat' => NULL,
                'no_telp' => NULL,
                'created_at' => '2021-12-27 10:58:09',
                'updated_at' => '2021-12-27 10:58:09',
            ),
        ));
        
        
    }
}