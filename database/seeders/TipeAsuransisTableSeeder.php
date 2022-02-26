<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipeAsuransisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipe_asuransis')->delete();
        
        \DB::table('tipe_asuransis')->insert(array (
            0 => 
            array (
                'id' => 2,
                'tipe_asuransi' => 'seperti pasien umum',
                'created_at' => '2022-01-04 16:03:22',
                'updated_at' => '2022-01-04 16:03:22',
                'tenant_id' => 1,
            ),
            1 => 
            array (
                'id' => 3,
                'tipe_asuransi' => 'admedika',
                'created_at' => '2022-01-04 16:03:22',
                'updated_at' => '2022-01-04 16:03:22',
                'tenant_id' => 1,
            ),
            2 => 
            array (
                'id' => 4,
                'tipe_asuransi' => 'Flat',
                'created_at' => '2022-01-04 16:03:22',
                'updated_at' => '2022-01-04 16:03:22',
                'tenant_id' => 1,
            ),
            3 => 
            array (
                'id' => 5,
                'tipe_asuransi' => 'BPJS',
                'created_at' => '2022-01-04 16:03:22',
                'updated_at' => '2022-01-04 16:03:22',
                'tenant_id' => 1,
            ),
        ));
        
        
    }
}