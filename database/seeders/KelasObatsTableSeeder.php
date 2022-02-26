<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class KelasObatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('kelas_obats')->delete();
        
        \DB::table('kelas_obats')->insert(array (
            0 => 
            array (
                'id' => 1,
                'kelas_obat' => 'generik',
                'created_at' => '2022-01-25 17:19:15',
                'updated_at' => '2022-01-25 17:19:15',
            ),
            1 => 
            array (
                'id' => 2,
                'kelas_obat' => 'umum',
                'created_at' => '2022-01-25 17:19:15',
                'updated_at' => '2022-01-25 17:19:15',
            ),
            2 => 
            array (
                'id' => 3,
                'kelas_obat' => 'paten',
                'created_at' => '2022-01-25 17:19:15',
                'updated_at' => '2022-01-25 17:19:15',
            ),
        ));
        
        
    }
}