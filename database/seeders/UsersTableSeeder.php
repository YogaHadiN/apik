<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Yoga Hadi Nugroho',
                'email' => 'yoga_email@yahoo.com',
                'password' => '$2y$10$U5WVBvz8Scb4ZMpqB6vfLO4TQopNgAfhQe2kp1.d3AUR6XOe0PtZ2',
                'email_verified_at' => NULL,
                'alamat_domisili' => NULL,
                'alamat_ktp' => NULL,
                'titel_id' => 7,
                'no_ktp' => NULL,
                'no_str' => NULL,
                'no_hp' => NULL,
                'universitas_asal' => NULL,
                'tanggal_lulus' => NULL,
                'tanggal_lahir' => NULL,
                'tanggal_mulai' => NULL,
                'photo' => NULL,
                'photo_mime_type' => NULL,
                'ktp_image' => NULL,
                'ktp_image_mime_type' => NULL,
                'str_image' => NULL,
                'str_image_mime_type' => NULL,
                'npwp_image' => NULL,
                'npwp_image_mime_type' => NULL,
                'sip_image' => NULL,
                'sip_image_mime_type' => NULL,
                'kartu_keluarga_image' => NULL,
                'kartu_keluarga_image_mime_type' => NULL,
                'menikah' => 0,
                'npwp' => NULL,
                'jumlah_anak' => 0,
                'jenis_kelamin' => 0,
                'nomor_rekening' => NULL,
                'bank' => NULL,
                'gaji_tetap' => 0,
                'role_id' => 1,
                'tenant_id' => 1,
                'active' => 1,
                'remember_token' => NULL,
                'created_at' => '2021-12-25 14:28:26',
                'updated_at' => '2021-12-25 14:28:26',
            ),
        ));
        
        
    }
}
