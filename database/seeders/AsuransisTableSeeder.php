<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AsuransisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('asuransis')->delete();
        
        \DB::table('asuransis')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nama' => 'Biaya Pribadi',
                'alamat' => 'ala',
                'tanggal_berakhir' => '2022-01-25',
                'alamat_penagihan' => 'ala',
                'catatan_pelayanan_gigi' => 'cat',
                'tipe_asuransi_id' => 2,
                'kali_obat' => 1.0,
                'coa_id' => 499,
                'kata_kunci' => 'kat',
                'aktif' => 1,
                'pelunasan_transfer' => 1,
                'tenant_id' => 1,
                'created_at' => '2022-01-23 09:59:03',
                'updated_at' => '2022-01-23 09:59:03',
            ),
        ));
        
        
    }
}