<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KomposisisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('komposisis')->delete();
        
        \DB::table('komposisis')->insert(array (
            0 => 
            array (
                'id' => 1,
                'generik_id' => 811,
                'bobot' => '500',
                'satuan_id' => 1,
                'formula_id' => 1,
                'tenant_id' => 1,
                'created_at' => '2022-01-02 00:55:22',
                'updated_at' => '2022-01-02 00:55:22',
            ),
        ));
        
        
    }
}