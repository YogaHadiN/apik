<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('roles')->delete();
        
        \DB::table('roles')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role' => 'owner',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 10:58:09',
                'updated_at' => '2021-12-27 10:58:09',
            ),
            1 => 
            array (
                'id' => 2,
                'role' => 'admin',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 10:58:09',
                'updated_at' => '2021-12-27 10:58:09',
            ),
            2 => 
            array (
                'id' => 3,
                'role' => 'farmasi',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 10:58:09',
                'updated_at' => '2021-12-27 10:58:09',
            ),
            3 => 
            array (
                'id' => 4,
                'role' => 'kasir',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 10:58:09',
                'updated_at' => '2021-12-27 10:58:09',
            ),
            4 => 
            array (
                'id' => 5,
                'role' => 'medis',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 10:58:09',
                'updated_at' => '2021-12-27 10:58:09',
            ),
        ));
        
        
    }
}