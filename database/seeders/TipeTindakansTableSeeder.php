<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TipeTindakansTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('tipe_tindakans')->delete();
        
        \DB::table('tipe_tindakans')->insert(array (
            0 => 
            array (
                'id' => 1,
                'tipe_tindakan' => 'non paket',
                'keterangan' => 'perhitungan seperti pasien umum biasa',
                'tenant_id' => 1,
                'created_at' => '2022-01-23 16:45:04',
                'updated_at' => '2022-01-23 16:45:04',
            ),
            1 => 
            array (
                'id' => 2,
                'tipe_tindakan' => 'paket jasa dokter + obat',
                'keterangan' => 'paket pengobatan membuat jasa dokter = 0 dan obat yang diberikan juga 0',
                'tenant_id' => 1,
                'created_at' => '2022-01-23 16:45:04',
                'updated_at' => '2022-01-23 16:45:04',
            ),
            2 => 
            array (
                'id' => 3,
                'tipe_tindakan' => 'paket jasa dokter tanpa obat',
                'keterangan' => 'paket pengobatan membuat jasa dokter = 0, tapi untuk obat minum dibayarkan sesuai dengan jumlah biayanya',
                'tenant_id' => 1,
                'created_at' => '2022-01-23 16:45:04',
                'updated_at' => '2022-01-23 16:45:04',
            ),
        ));
        
        
    }
}