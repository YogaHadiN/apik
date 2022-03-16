<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JenisTarif;
use App\Models\Coa;

class JenisTarifsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('jenis_tarifs')->delete();
        
        \DB::table('jenis_tarifs')->insert(array (
            0 => 
            array (
                'id' => 0,
                'jenis_tarif' => 'diskon',
                'coa_id' => 503000,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            1 => 
            array (
                'id' => 1,
                'jenis_tarif' => 'Jasa Dokter',
                'coa_id' => 400001,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            2 => 
            array (
                'id' => 9,
                'jenis_tarif' => 'Biaya Obat',
                'coa_id' => 400002,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            3 => 
            array (
                'id' => 20,
                'jenis_tarif' => 'Hekting 1 jahitan',
                'coa_id' => 400003,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            4 => 
            array (
                'id' => 21,
                'jenis_tarif' => 'Hekting 2 jahitan',
                'coa_id' => 400003,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            5 => 
            array (
                'id' => 22,
                'jenis_tarif' => 'Hekting 3 jahitan',
                'coa_id' => 400003,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            6 => 
            array (
                'id' => 34,
                'jenis_tarif' => 'Hekting 4 jahitan',
                'coa_id' => 400003,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            7 => 
            array (
                'id' => 35,
                'jenis_tarif' => 'Hekting 5 jahitan',
                'coa_id' => 400003,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            8 => 
            array (
                'id' => 36,
                'jenis_tarif' => 'Hekting 6 jahitan',
                'coa_id' => 400003,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            9 => 
            array (
                'id' => 37,
                'jenis_tarif' => 'Hekting 7 jahitan',
                'coa_id' => 400003,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            10 => 
            array (
                'id' => 38,
                'jenis_tarif' => 'Hekting 8 jahitan',
                'coa_id' => 400003,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            11 => 
            array (
                'id' => 39,
                'jenis_tarif' => 'Hekting 9 jahitan',
                'coa_id' => 400003,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            12 => 
            array (
                'id' => 40,
                'jenis_tarif' => 'Hekting 10 jahitan',
                'coa_id' => 400003,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            13 => 
            array (
                'id' => 41,
                'jenis_tarif' => 'Hekting 11 jahitan',
                'coa_id' => 400003,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            14 => 
            array (
                'id' => 42,
                'jenis_tarif' => 'Hekting 12 jahitan',
                'coa_id' => 400003,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            15 => 
            array (
                'id' => 43,
                'jenis_tarif' => 'Hekting 13 jahitan',
                'coa_id' => 400003,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            16 => 
            array (
                'id' => 44,
                'jenis_tarif' => 'Hekting 14 jahitan',
                'coa_id' => 400003,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            17 => 
            array (
                'id' => 45,
                'jenis_tarif' => 'Hekting 15 jahitan',
                'coa_id' => 400003,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            18 => 
            array (
                'id' => 46,
                'jenis_tarif' => 'Hekting 16 jahitan',
                'coa_id' => 400003,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            19 => 
            array (
                'id' => 47,
                'jenis_tarif' => 'Hekting 17 jahitan',
                'coa_id' => 400003,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            20 => 
            array (
                'id' => 48,
                'jenis_tarif' => 'Hekting 18 jahitan',
                'coa_id' => 400003,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            21 => 
            array (
                'id' => 49,
                'jenis_tarif' => 'Hekting 19 jahitan',
                'coa_id' => 400003,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            22 => 
            array (
                'id' => 50,
                'jenis_tarif' => 'Hekting 20 jahitan',
                'coa_id' => 400003,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            23 => 
            array (
                'id' => 51,
                'jenis_tarif' => 'Hekting diatas 20 jahitan',
                'coa_id' => 400003,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            24 => 
            array (
                'id' => 52,
                'jenis_tarif' => 'Inj Dexamethasone 1 ampul',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            25 => 
            array (
                'id' => 53,
                'jenis_tarif' => 'Inj Dekamidon 1cc',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            26 => 
            array (
                'id' => 54,
                'jenis_tarif' => 'Inj Dekamidon 2cc',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            27 => 
            array (
                'id' => 55,
                'jenis_tarif' => 'Inj Dekamidon 3cc',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            28 => 
            array (
                'id' => 56,
                'jenis_tarif' => 'Inj Dekadril 1 cc',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            29 => 
            array (
                'id' => 57,
                'jenis_tarif' => 'Inj Dekadril 2 cc',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            30 => 
            array (
                'id' => 58,
                'jenis_tarif' => 'Inj Dekadril 3 cc',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            31 => 
            array (
                'id' => 59,
                'jenis_tarif' => 'Inj Ketorolac 1 ampul',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            32 => 
            array (
                'id' => 60,
                'jenis_tarif' => 'Inj Neurobion 1 ampul',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            33 => 
            array (
                'id' => 61,
                'jenis_tarif' => 'Inj Ethiferan 1 ampul',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            34 => 
            array (
                'id' => 62,
                'jenis_tarif' => 'Inj Ranitidine 1 ampul',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            35 => 
            array (
                'id' => 63,
                'jenis_tarif' => 'Inj Tramadol 1 ampul',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            36 => 
            array (
                'id' => 64,
                'jenis_tarif' => 'Inj Scopamin 1 ampul',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            37 => 
            array (
                'id' => 65,
                'jenis_tarif' => 'Inj Epinephrine 1 ampul',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            38 => 
            array (
                'id' => 66,
                'jenis_tarif' => 'Inj Transamin 1 ampul',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            39 => 
            array (
                'id' => 67,
                'jenis_tarif' => 'Inj Tetanus Toksoid 0,5 cc',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            40 => 
            array (
                'id' => 68,
                'jenis_tarif' => 'Inj Pehacaine 1 ampul',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            41 => 
            array (
                'id' => 69,
                'jenis_tarif' => 'Inj Lidocaine 1 ampul',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            42 => 
            array (
                'id' => 72,
                'jenis_tarif' => 'KB 3 Bulan',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            43 => 
            array (
                'id' => 73,
                'jenis_tarif' => 'Inj Vitamin C 1 gr IV',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            44 => 
            array (
                'id' => 75,
                'jenis_tarif' => 'Inj VIt C + Tationil',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            45 => 
            array (
                'id' => 76,
                'jenis_tarif' => 'Inj Tationil 1 vial IV',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            46 => 
            array (
                'id' => 77,
                'jenis_tarif' => 'Inj Kanamycin 2 gr IM',
                'coa_id' => 400004,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            47 => 
            array (
                'id' => 78,
                'jenis_tarif' => 'Proris Supp',
                'coa_id' => 400005,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            48 => 
            array (
                'id' => 82,
            'jenis_tarif' => 'Cek Paket (GDS /AU / CHOL)',
                'coa_id' => 400007,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            49 => 
            array (
                'id' => 83,
                'jenis_tarif' => 'WT Ringan',
                'coa_id' => 400008,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            50 => 
            array (
                'id' => 84,
                'jenis_tarif' => 'WT Sedang',
                'coa_id' => 400008,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            51 => 
            array (
                'id' => 85,
                'jenis_tarif' => 'WT Berat',
                'coa_id' => 400008,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            52 => 
            array (
                'id' => 86,
                'jenis_tarif' => 'Ganti Verban Ringan',
                'coa_id' => 400009,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            53 => 
            array (
                'id' => 87,
                'jenis_tarif' => 'Ganti Verban Sedang',
                'coa_id' => 400009,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            54 => 
            array (
                'id' => 88,
                'jenis_tarif' => 'Ganti Verban Berat',
                'coa_id' => 400009,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            55 => 
            array (
                'id' => 89,
                'jenis_tarif' => 'Angkat jahitan < 3',
                'coa_id' => 400010,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            56 => 
            array (
                'id' => 90,
                'jenis_tarif' => 'Angkat Jahitan > 3',
                'coa_id' => 400010,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            57 => 
            array (
                'id' => 91,
                'jenis_tarif' => 'Ekstraksi Kuku Ringan',
                'coa_id' => 400011,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            58 => 
            array (
                'id' => 92,
                'jenis_tarif' => 'Ekstraksi Kuku Sedang',
                'coa_id' => 400011,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            59 => 
            array (
                'id' => 93,
                'jenis_tarif' => 'Ekstraksi Kuku Berat',
                'coa_id' => 400011,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            60 => 
            array (
                'id' => 94,
                'jenis_tarif' => 'Eksisi Clavus Ringan',
                'coa_id' => 400012,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            61 => 
            array (
                'id' => 95,
                'jenis_tarif' => 'Eksisi Clavus Sedang',
                'coa_id' => 400012,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            62 => 
            array (
                'id' => 96,
                'jenis_tarif' => 'Eksisi Clavus Berat',
                'coa_id' => 400012,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            63 => 
            array (
                'id' => 98,
                'jenis_tarif' => 'Ekstraksi Corpus Alienum Mata Sedang',
                'coa_id' => 400014,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            64 => 
            array (
                'id' => 99,
                'jenis_tarif' => 'Pasang IUD',
                'coa_id' => 400015,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            65 => 
            array (
                'id' => 100,
                'jenis_tarif' => 'Irigasi Mata Ringan',
                'coa_id' => 400016,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            66 => 
            array (
                'id' => 101,
                'jenis_tarif' => 'Irigasi Mata Sedang',
                'coa_id' => 400016,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            67 => 
            array (
                'id' => 102,
                'jenis_tarif' => 'Nebulizer Anak',
                'coa_id' => 400017,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            68 => 
            array (
                'id' => 103,
                'jenis_tarif' => 'Nebulizer Dewasa',
                'coa_id' => 400017,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            69 => 
            array (
                'id' => 104,
                'jenis_tarif' => 'Sirkumsisi Anak-anak',
                'coa_id' => 400018,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            70 => 
            array (
                'id' => 105,
                'jenis_tarif' => 'Sirkumsisi Dewasa',
                'coa_id' => 400018,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            71 => 
            array (
                'id' => 106,
                'jenis_tarif' => 'Sirkumsisi Anak Gendut',
                'coa_id' => 400018,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            72 => 
            array (
                'id' => 111,
                'jenis_tarif' => 'USG',
                'coa_id' => 400019,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            73 => 
            array (
                'id' => 116,
                'jenis_tarif' => 'Gula Darah',
                'coa_id' => 400020,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            74 => 
            array (
                'id' => 117,
                'jenis_tarif' => 'Ekstraksi Serumen Ringan',
                'coa_id' => 400021,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            75 => 
            array (
                'id' => 118,
                'jenis_tarif' => 'Ekstraksi Serumen Sedang',
                'coa_id' => 400021,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            76 => 
            array (
                'id' => 119,
                'jenis_tarif' => 'Ekstrakwsi Serumen Berat',
                'coa_id' => 400021,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            77 => 
            array (
                'id' => 120,
                'jenis_tarif' => 'Jam Malam',
                'coa_id' => 400022,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            78 => 
            array (
                'id' => 121,
                'jenis_tarif' => 'surat keterangan sehat',
                'coa_id' => 400023,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            79 => 
            array (
                'id' => 122,
                'jenis_tarif' => 'Jasa Konsultasi Dokter Gigi',
                'coa_id' => 400024,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            80 => 
            array (
                'id' => 124,
                'jenis_tarif' => 'Cabut Gigi',
                'coa_id' => 400026,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            81 => 
            array (
                'id' => 126,
                'jenis_tarif' => 'tes pack',
                'coa_id' => 400027,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            82 => 
            array (
                'id' => 127,
                'jenis_tarif' => ' cek cholestrol',
                'coa_id' => 400028,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            83 => 
            array (
                'id' => 128,
                'jenis_tarif' => 'Ekstraksi Corpus Alienum Mata Ringan',
                'coa_id' => 400029,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            84 => 
            array (
                'id' => 129,
                'jenis_tarif' => 'Inj Streptomicyn',
                'coa_id' => 400030,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            85 => 
            array (
                'id' => 130,
            'jenis_tarif' => 'ANC (Periksa Kehamilan)',
                'coa_id' => 400031,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            86 => 
            array (
                'id' => 132,
                'jenis_tarif' => 'pencabuta iud',
                'coa_id' => 400032,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            87 => 
            array (
                'id' => 133,
                'jenis_tarif' => 'Pasang Kateter',
                'coa_id' => 400033,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            88 => 
            array (
                'id' => 134,
                'jenis_tarif' => 'Lepas Kateter',
                'coa_id' => 400034,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            89 => 
            array (
                'id' => 135,
                'jenis_tarif' => 'Pasang Infus',
                'coa_id' => 400035,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            90 => 
            array (
                'id' => 136,
                'jenis_tarif' => 'Lepas Infus',
                'coa_id' => 400036,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            91 => 
            array (
                'id' => 137,
                'jenis_tarif' => 'Observasi 1 jam',
                'coa_id' => 400037,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            92 => 
            array (
                'id' => 138,
                'jenis_tarif' => 'Observasi 2 jam',
                'coa_id' => 400037,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            93 => 
            array (
                'id' => 139,
                'jenis_tarif' => 'Observasi 3 jam',
                'coa_id' => 400037,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            94 => 
            array (
                'id' => 140,
                'jenis_tarif' => 'BHP',
                'coa_id' => 400038,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            95 => 
            array (
                'id' => 141,
                'jenis_tarif' => 'Protein Urine',
                'coa_id' => 400039,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            96 => 
            array (
                'id' => 142,
                'jenis_tarif' => 'Trombosit',
                'coa_id' => 400040,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            97 => 
            array (
                'id' => 143,
                'jenis_tarif' => 'Insisi Abses Ringan',
                'coa_id' => 400041,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            98 => 
            array (
                'id' => 145,
                'jenis_tarif' => 'Insisi Abses Sedang',
                'coa_id' => 400042,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            99 => 
            array (
                'id' => 146,
                'jenis_tarif' => 'Insisi Abses Berat',
                'coa_id' => 400043,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            100 => 
            array (
                'id' => 147,
                'jenis_tarif' => 'pembayaran',
                'coa_id' => 0,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            101 => 
            array (
                'id' => 148,
                'jenis_tarif' => 'kembalian',
                'coa_id' => 0,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            102 => 
            array (
                'id' => 149,
                'jenis_tarif' => 'dibayar_asuransi',
                'coa_id' => 0,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            103 => 
            array (
                'id' => 150,
                'jenis_tarif' => 'dibayar_pasien',
                'coa_id' => 0,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            104 => 
            array (
                'id' => 151,
                'jenis_tarif' => 'Tindakan Gigi',
                'coa_id' => 400046,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            105 => 
            array (
                'id' => 152,
                'jenis_tarif' => 'biaya telpon',
                'coa_id' => 400047,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            106 => 
            array (
                'id' => 153,
                'jenis_tarif' => 'inj Cortison 3 cc',
                'coa_id' => 400048,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            107 => 
            array (
                'id' => 188,
                'jenis_tarif' => 'Chemical Peeling Ance Ringan',
                'coa_id' => 400083,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            108 => 
            array (
                'id' => 189,
                'jenis_tarif' => 'Chemical Peeling Acne Sedang',
                'coa_id' => 400084,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            109 => 
            array (
                'id' => 191,
            'jenis_tarif' => 'FACIAL Acne (Masker Tea Tree + Serum Acne)',
                'coa_id' => 400086,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            110 => 
            array (
                'id' => 194,
            'jenis_tarif' => 'FACIAL Lightening (Masker Neroli + Serum Lightening)',
                'coa_id' => 400089,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            111 => 
            array (
                'id' => 195,
            'jenis_tarif' => 'FACIAL Flek Hitam (Masker Black Mud Carcoal + Serum whitening kojic)',
                'coa_id' => 400090,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            112 => 
            array (
                'id' => 197,
            'jenis_tarif' => 'FACIAL Rejuve (Masker Neroli )',
                'coa_id' => 400092,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            113 => 
            array (
                'id' => 198,
            'jenis_tarif' => 'FACIAL Detox + Ultrasound (Masker Black Mud Carcoal + Serum detox)',
                'coa_id' => 400093,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            114 => 
            array (
                'id' => 199,
                'jenis_tarif' => 'Mesoultra Rejuve',
                'coa_id' => 400094,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            115 => 
            array (
                'id' => 200,
                'jenis_tarif' => 'RF Wajah',
                'coa_id' => 400095,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            116 => 
            array (
                'id' => 201,
                'jenis_tarif' => 'RF Perut',
                'coa_id' => 400096,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            117 => 
            array (
                'id' => 202,
                'jenis_tarif' => 'RF Lengan/Betis',
                'coa_id' => 400097,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            118 => 
            array (
                'id' => 203,
                'jenis_tarif' => 'RF Paha',
                'coa_id' => 400098,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            119 => 
            array (
                'id' => 204,
                'jenis_tarif' => 'RF Kantung Mata',
                'coa_id' => 400099,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            120 => 
            array (
                'id' => 205,
                'jenis_tarif' => 'OPT/IPL Rejuve',
                'coa_id' => 400100,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            121 => 
            array (
                'id' => 207,
                'jenis_tarif' => 'OPT/IPL Jerawat Acne',
                'coa_id' => 400102,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            122 => 
            array (
                'id' => 208,
                'jenis_tarif' => 'OPT/IPL Flek Hitam',
                'coa_id' => 400103,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            123 => 
            array (
                'id' => 209,
                'jenis_tarif' => 'OPT/IPL Telangiektasi',
                'coa_id' => 400104,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            124 => 
            array (
                'id' => 210,
                'jenis_tarif' => 'OPT/IPL Sensitif Skin',
                'coa_id' => 400105,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            125 => 
            array (
                'id' => 212,
                'jenis_tarif' => 'OPT/IPL Hair Removal Kumis',
                'coa_id' => 400107,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            126 => 
            array (
                'id' => 213,
                'jenis_tarif' => 'OPT/IPL Hair Removal Ketiak Kanan',
                'coa_id' => 400108,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            127 => 
            array (
                'id' => 214,
                'jenis_tarif' => 'OPT/IPL Hair Removal Ketiak Kiri',
                'coa_id' => 400109,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            128 => 
            array (
                'id' => 215,
                'jenis_tarif' => 'OPT/IPL Hair Removal Lengan Kanan',
                'coa_id' => 400110,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            129 => 
            array (
                'id' => 216,
                'jenis_tarif' => 'OPT/IPL Hair Removal Lengan Kiri',
                'coa_id' => 400111,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            130 => 
            array (
                'id' => 217,
                'jenis_tarif' => 'OPT/IPL Hair Removal Kaki Kanan',
                'coa_id' => 400112,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            131 => 
            array (
                'id' => 218,
                'jenis_tarif' => 'OPT/IPL Hair Removal Kaki Kiri',
                'coa_id' => 400113,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            132 => 
            array (
                'id' => 219,
            'jenis_tarif' => 'PDT MASK Acne (Biru)',
                'coa_id' => 400114,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            133 => 
            array (
                'id' => 220,
                'jenis_tarif' => 'Mesoultra Acne',
                'coa_id' => 400115,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            134 => 
            array (
                'id' => 221,
            'jenis_tarif' => 'PDT Mask Flek Hitam (Orange)',
                'coa_id' => 400116,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            135 => 
            array (
                'id' => 222,
            'jenis_tarif' => 'PDT Mask Rejuve (Merah)',
                'coa_id' => 400117,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            136 => 
            array (
                'id' => 223,
            'jenis_tarif' => 'PDT Mask Sensitif Skin (Ungu)',
                'coa_id' => 400118,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            137 => 
            array (
                'id' => 224,
            'jenis_tarif' => 'PDT Mask Detox (Kuning)',
                'coa_id' => 400119,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            138 => 
            array (
                'id' => 225,
            'jenis_tarif' => 'PDT Mask rejuve (Hijau)',
                'coa_id' => 400120,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            139 => 
            array (
                'id' => 226,
                'jenis_tarif' => 'Diamonddermabrasi',
                'coa_id' => 400121,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            140 => 
            array (
                'id' => 227,
                'jenis_tarif' => 'Cauter 1 s/d 5',
                'coa_id' => 400122,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            141 => 
            array (
                'id' => 228,
                'jenis_tarif' => 'Cauter 6 s/d 10',
                'coa_id' => 400123,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            142 => 
            array (
                'id' => 230,
                'jenis_tarif' => 'Cauter 11 s/d max',
                'coa_id' => 400125,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            143 => 
            array (
                'id' => 232,
                'jenis_tarif' => 'Derma Scar',
                'coa_id' => 400127,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            144 => 
            array (
                'id' => 234,
                'jenis_tarif' => 'Chemical Peeling Whitening',
                'coa_id' => 400129,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            145 => 
            array (
                'id' => 235,
                'jenis_tarif' => 'Chemical Peeling blackpeel clear ',
                'coa_id' => 400130,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            146 => 
            array (
                'id' => 237,
            'jenis_tarif' => 'Paket Noda Bekas Jerawat (Diamonddermabrasi + IPL)',
                'coa_id' => 400132,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            147 => 
            array (
                'id' => 250,
                'jenis_tarif' => 'Inhealth-Konsultasi dan pemeriksaan dokter gigi',
                'coa_id' => 400145,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            148 => 
            array (
                'id' => 251,
                'jenis_tarif' => 'Inhealth-Tumpatan Amalgam atau Glassionomer',
                'coa_id' => 400146,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            149 => 
            array (
                'id' => 252,
                'jenis_tarif' => 'Inhealth-Tumpatan Light Curing, composite atau fuji',
                'coa_id' => 400147,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            150 => 
            array (
                'id' => 253,
                'jenis_tarif' => 'Inhealth-Perawatan Syaraf Gigi + Tumpatan Sementara',
                'coa_id' => 400148,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            151 => 
            array (
                'id' => 254,
                'jenis_tarif' => 'Inhealth-Kuretase Gingivitis Kronis',
                'coa_id' => 400149,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            152 => 
            array (
                'id' => 255,
                'jenis_tarif' => 'Inhealth-Gingivectomy',
                'coa_id' => 400150,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            153 => 
            array (
                'id' => 256,
                'jenis_tarif' => 'Inhealth-Buka Jahitan Gigi',
                'coa_id' => 400151,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            154 => 
            array (
                'id' => 257,
            'jenis_tarif' => 'Inhealth-Incisi Abses (Poli Gigi)',
                'coa_id' => 400152,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            155 => 
            array (
                'id' => 258,
                'jenis_tarif' => 'Inhealth-Ekstraksi Gigi Sulung',
                'coa_id' => 400153,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            156 => 
            array (
                'id' => 259,
                'jenis_tarif' => 'Inhealth-Ekstraksi Gigi Tetap',
                'coa_id' => 400154,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            157 => 
            array (
                'id' => 260,
                'jenis_tarif' => 'Inhealth-Ekstraksi Gigi Tetap dengan Komplikasi',
                'coa_id' => 400155,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            158 => 
            array (
                'id' => 261,
                'jenis_tarif' => 'Inhealth-Uperkulektomi',
                'coa_id' => 400156,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            159 => 
            array (
                'id' => 262,
                'jenis_tarif' => 'Inhealth-Alveolektomi',
                'coa_id' => 400157,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            160 => 
            array (
                'id' => 263,
                'jenis_tarif' => 'Inhealth-Odontektomi',
                'coa_id' => 400158,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            161 => 
            array (
                'id' => 264,
                'jenis_tarif' => 'Inhealth-Foto Rontgen Gigi',
                'coa_id' => 400159,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            162 => 
            array (
                'id' => 265,
                'jenis_tarif' => 'KB 1 bulan',
                'coa_id' => 400160,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            163 => 
            array (
                'id' => 266,
                'jenis_tarif' => 'Laser Vlek Hitam I',
                'coa_id' => 400161,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            164 => 
            array (
                'id' => 267,
                'jenis_tarif' => 'Laser Carbon Peeling II',
                'coa_id' => 400162,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            165 => 
            array (
                'id' => 268,
                'jenis_tarif' => 'Chemical Peeling Blackpeel resurfacing',
                'coa_id' => 400163,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            166 => 
            array (
                'id' => 269,
                'jenis_tarif' => 'Laser Vlek Hitam II',
                'coa_id' => 400164,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            167 => 
            array (
                'id' => 270,
                'jenis_tarif' => 'Laser Carbon Peeling I',
                'coa_id' => 400165,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            168 => 
            array (
                'id' => 271,
            'jenis_tarif' => 'Laser Rejuve Plus (Laser toning + IPL Rejuve)',
                'coa_id' => 400166,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            169 => 
            array (
                'id' => 273,
                'jenis_tarif' => 'Inj Ceftriaxon',
                'coa_id' => 400168,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            170 => 
            array (
                'id' => 274,
                'jenis_tarif' => 'Inj Ondansentron',
                'coa_id' => 400169,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            171 => 
            array (
                'id' => 275,
            'jenis_tarif' => 'FACIAL Diamond (Masker Neroli + Serum diamond)',
                'coa_id' => 400170,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            172 => 
            array (
                'id' => 276,
                'jenis_tarif' => 'Laser Toning',
                'coa_id' => 400171,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            173 => 
            array (
                'id' => 277,
                'jenis_tarif' => 'Inj Buscopan',
                'coa_id' => 400172,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            174 => 
            array (
                'id' => 278,
                'jenis_tarif' => 'LKM- Darah Rutin',
                'coa_id' => 400173,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            175 => 
            array (
                'id' => 279,
                'jenis_tarif' => 'LKM-Darah Lengkap',
                'coa_id' => 400174,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            176 => 
            array (
                'id' => 280,
                'jenis_tarif' => 'LKM-Hemoglobin',
                'coa_id' => 400175,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            177 => 
            array (
                'id' => 281,
                'jenis_tarif' => 'LKM-Hematokrit',
                'coa_id' => 400176,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            178 => 
            array (
                'id' => 282,
                'jenis_tarif' => 'LKM-Leukosit',
                'coa_id' => 400177,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            179 => 
            array (
                'id' => 283,
                'jenis_tarif' => 'LKM-Trombosit',
                'coa_id' => 400178,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            180 => 
            array (
                'id' => 284,
                'jenis_tarif' => 'LKM-Eritrosit',
                'coa_id' => 400179,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            181 => 
            array (
                'id' => 285,
                'jenis_tarif' => 'LKM-Hitung Jenis',
                'coa_id' => 400180,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            182 => 
            array (
                'id' => 286,
            'jenis_tarif' => 'LKM-LED (Westergren)',
                'coa_id' => 400181,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            183 => 
            array (
                'id' => 287,
                'jenis_tarif' => 'LKM-MCV/MCH/MCHC',
                'coa_id' => 400182,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            184 => 
            array (
                'id' => 288,
                'jenis_tarif' => 'LKM-Widal',
                'coa_id' => 400183,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            185 => 
            array (
                'id' => 289,
                'jenis_tarif' => 'LKM-TPHA',
                'coa_id' => 400184,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            186 => 
            array (
                'id' => 290,
                'jenis_tarif' => 'LKM-VDRL',
                'coa_id' => 400185,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            187 => 
            array (
                'id' => 291,
                'jenis_tarif' => 'LKM-HIV',
                'coa_id' => 400186,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            188 => 
            array (
                'id' => 292,
                'jenis_tarif' => 'LKM-RA Faktor Kuantitatif',
                'coa_id' => 400187,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            189 => 
            array (
                'id' => 293,
                'jenis_tarif' => 'LKM-ASTO Kuantitatif',
                'coa_id' => 400188,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            190 => 
            array (
                'id' => 294,
                'jenis_tarif' => 'LKM-CRP Kuantitatif',
                'coa_id' => 400189,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            191 => 
            array (
                'id' => 295,
                'jenis_tarif' => 'LKM-Chykungunya IgM',
                'coa_id' => 400190,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            192 => 
            array (
                'id' => 296,
                'jenis_tarif' => 'LKM-GDN',
                'coa_id' => 400191,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            193 => 
            array (
                'id' => 297,
                'jenis_tarif' => 'LKM-G2PP',
                'coa_id' => 400192,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            194 => 
            array (
                'id' => 299,
                'jenis_tarif' => 'LKM-GTT',
                'coa_id' => 400194,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            195 => 
            array (
                'id' => 300,
                'jenis_tarif' => 'LKM-HbA1c',
                'coa_id' => 400195,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            196 => 
            array (
                'id' => 301,
                'jenis_tarif' => 'LKM-Cholesterol Total ',
                'coa_id' => 400196,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            197 => 
            array (
                'id' => 302,
                'jenis_tarif' => 'LKM-HDL Cholesterol',
                'coa_id' => 400197,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            198 => 
            array (
                'id' => 303,
                'jenis_tarif' => 'LKM-LDL Cholesterol',
                'coa_id' => 400198,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            199 => 
            array (
                'id' => 304,
                'jenis_tarif' => 'LKM-Triglyserida',
                'coa_id' => 400199,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            200 => 
            array (
                'id' => 305,
                'jenis_tarif' => 'LKM-Bilirubin Total',
                'coa_id' => 400200,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            201 => 
            array (
                'id' => 306,
                'jenis_tarif' => 'LKM-Bilirubin Direk',
                'coa_id' => 400201,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            202 => 
            array (
                'id' => 307,
                'jenis_tarif' => 'LKM-Bilirubin Indirek',
                'coa_id' => 400202,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            203 => 
            array (
                'id' => 308,
                'jenis_tarif' => 'LKM-SGOT',
                'coa_id' => 400203,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            204 => 
            array (
                'id' => 309,
                'jenis_tarif' => 'LKM-SGPT',
                'coa_id' => 400204,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            205 => 
            array (
                'id' => 310,
                'jenis_tarif' => 'LKM-Protein Total',
                'coa_id' => 400205,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            206 => 
            array (
                'id' => 311,
                'jenis_tarif' => 'LKM-Albumin',
                'coa_id' => 400206,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            207 => 
            array (
                'id' => 312,
                'jenis_tarif' => 'LKM-Globulin',
                'coa_id' => 400207,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            208 => 
            array (
                'id' => 313,
                'jenis_tarif' => 'LKM-Ureum',
                'coa_id' => 400208,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            209 => 
            array (
                'id' => 314,
                'jenis_tarif' => 'LKM-Kreatinin',
                'coa_id' => 400209,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            210 => 
            array (
                'id' => 315,
                'jenis_tarif' => 'LKM-Asam Urat',
                'coa_id' => 400210,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            211 => 
            array (
                'id' => 316,
            'jenis_tarif' => 'LKM-Natrium (Na)',
                'coa_id' => 400211,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            212 => 
            array (
                'id' => 317,
            'jenis_tarif' => 'LKM-Kalium (K)',
                'coa_id' => 400212,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            213 => 
            array (
                'id' => 318,
            'jenis_tarif' => 'LKM-Clorida (Cl)',
                'coa_id' => 400213,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            214 => 
            array (
                'id' => 319,
            'jenis_tarif' => 'LKM-Calsium (Ca)',
                'coa_id' => 400214,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            215 => 
            array (
                'id' => 320,
            'jenis_tarif' => 'LKM-Magnesium (Mg)',
                'coa_id' => 400215,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            216 => 
            array (
                'id' => 321,
            'jenis_tarif' => 'LKM-Phospor (P)',
                'coa_id' => 400216,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            217 => 
            array (
                'id' => 322,
                'jenis_tarif' => 'LKM-Masa Pendarahan',
                'coa_id' => 400217,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            218 => 
            array (
                'id' => 323,
                'jenis_tarif' => 'LKM-Masa Pembekuan',
                'coa_id' => 400218,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            219 => 
            array (
                'id' => 324,
                'jenis_tarif' => 'LKM-HbsAg',
                'coa_id' => 400219,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            220 => 
            array (
                'id' => 325,
                'jenis_tarif' => 'LKM-Urin Rutin',
                'coa_id' => 400220,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            221 => 
            array (
                'id' => 326,
                'jenis_tarif' => 'LKM-Urin Lengkap',
                'coa_id' => 400221,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            222 => 
            array (
                'id' => 327,
                'jenis_tarif' => 'Tes Kehamilan',
                'coa_id' => 400222,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            223 => 
            array (
                'id' => 328,
                'jenis_tarif' => 'LKM-THC',
                'coa_id' => 400223,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            224 => 
            array (
                'id' => 329,
                'jenis_tarif' => 'LKM-OPI',
                'coa_id' => 400224,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            225 => 
            array (
                'id' => 330,
                'jenis_tarif' => 'LKM-MET',
                'coa_id' => 400225,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            226 => 
            array (
                'id' => 331,
                'jenis_tarif' => 'LKM-AMP',
                'coa_id' => 400226,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            227 => 
            array (
                'id' => 332,
                'jenis_tarif' => 'LKM-COC',
                'coa_id' => 400227,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            228 => 
            array (
                'id' => 336,
                'jenis_tarif' => 'Administrasi',
                'coa_id' => 400231,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            229 => 
            array (
                'id' => 337,
                'jenis_tarif' => 'inj Triamcinolone 0,25 ml + lidocaine 0,25 ml intralesi',
                'coa_id' => 400232,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            230 => 
            array (
                'id' => 338,
                'jenis_tarif' => 'Periodontis-Pembersihan Karang Gigi Sedikit',
                'coa_id' => 400233,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            231 => 
            array (
                'id' => 339,
                'jenis_tarif' => 'Periodontis-Pembersihan Karang Gigi Sedang',
                'coa_id' => 400234,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            232 => 
            array (
                'id' => 340,
                'jenis_tarif' => 'Periodontis-Pembersihan Karang Gigi Banyak',
                'coa_id' => 400235,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            233 => 
            array (
                'id' => 341,
                'jenis_tarif' => 'Periodontis-Kuretase/Rootplanning 1 Gigi',
                'coa_id' => 400236,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            234 => 
            array (
                'id' => 342,
                'jenis_tarif' => 'Periodontis-Kuretase/Rootplanning 2 s.d 3 Gigi',
                'coa_id' => 400237,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            235 => 
            array (
                'id' => 343,
                'jenis_tarif' => 'Penambalan-Kelas I Komposit',
                'coa_id' => 400238,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            236 => 
            array (
                'id' => 344,
                'jenis_tarif' => 'Penambalan-Kelas II Komposit',
                'coa_id' => 400239,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            237 => 
            array (
                'id' => 345,
                'jenis_tarif' => 'Penambalan-Kelas III Komposit',
                'coa_id' => 400240,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            238 => 
            array (
                'id' => 346,
                'jenis_tarif' => 'Penambalan-Kelas IV Komposit / estetik',
                'coa_id' => 400241,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            239 => 
            array (
                'id' => 347,
                'jenis_tarif' => 'Penambalan-Kelas V-GI/ Komposit',
                'coa_id' => 400242,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            240 => 
            array (
                'id' => 348,
                'jenis_tarif' => 'Penambalan-Fiisure Sealant/Email',
                'coa_id' => 400243,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            241 => 
            array (
                'id' => 349,
                'jenis_tarif' => 'Penambalan-Estethic',
                'coa_id' => 400244,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            242 => 
            array (
                'id' => 350,
                'jenis_tarif' => 'Penambalan-Selubung/Crown',
                'coa_id' => 400245,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            243 => 
            array (
                'id' => 351,
            'jenis_tarif' => 'Konservasi (Endodontic)-Preparasi + Obat + TS',
                'coa_id' => 400246,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            244 => 
            array (
                'id' => 352,
            'jenis_tarif' => 'Konservasi (Endodontic)-Pengisian Kamar Pulpa',
                'coa_id' => 400247,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            245 => 
            array (
                'id' => 353,
            'jenis_tarif' => 'Konservasi (Endodontic)-Pengisian Saluran 1 Akar',
                'coa_id' => 400248,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            246 => 
            array (
                'id' => 354,
            'jenis_tarif' => 'Konservasi (Endodontic)-Pengisian Saluran 2 Akar',
                'coa_id' => 400249,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            247 => 
            array (
                'id' => 355,
            'jenis_tarif' => 'Konservasi (Endodontic)-Pengisian Saluran 3 Akar',
                'coa_id' => 400250,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            248 => 
            array (
                'id' => 356,
            'jenis_tarif' => 'Konservasi (Endodontic)-Pengisian Saluran Akar Metode Sandwhich',
                'coa_id' => 400251,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            249 => 
            array (
                'id' => 357,
            'jenis_tarif' => 'Konservasi (Endodontic)-Pasak',
                'coa_id' => 400252,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            250 => 
            array (
                'id' => 358,
            'jenis_tarif' => 'Konservasi (Endodontic)-Inlay/Onlay',
                'coa_id' => 400253,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            251 => 
            array (
                'id' => 359,
            'jenis_tarif' => 'Konservasi (Endodontic)-Pencetakan Alginat',
                'coa_id' => 400254,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            252 => 
            array (
                'id' => 360,
            'jenis_tarif' => 'Konservasi (Endodontic)-Pencetakan Double Press',
                'coa_id' => 400255,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            253 => 
            array (
                'id' => 361,
                'jenis_tarif' => 'Bedah Mulut-Pencabutan Gigi Ringan / Gangren Radix',
                'coa_id' => 400256,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            254 => 
            array (
                'id' => 362,
                'jenis_tarif' => 'Bedah Mulut-Pencabutan Gigi Sedang',
                'coa_id' => 400257,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            255 => 
            array (
                'id' => 363,
                'jenis_tarif' => 'Bedah Mulut-Pencabutan Gigi Berat',
                'coa_id' => 400258,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            256 => 
            array (
                'id' => 364,
                'jenis_tarif' => 'Bedah Mulut-Batal setelah Anestesi',
                'coa_id' => 400259,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            257 => 
            array (
                'id' => 365,
                'jenis_tarif' => 'Bedah Mulut-Pencabutan dengan faktor penyulit',
                'coa_id' => 400260,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            258 => 
            array (
                'id' => 366,
                'jenis_tarif' => 'Bedah Mulut-Odontektomi',
                'coa_id' => 400261,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            259 => 
            array (
                'id' => 367,
                'jenis_tarif' => 'Bedah Mulut-Mukokel',
                'coa_id' => 400262,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            260 => 
            array (
                'id' => 368,
                'jenis_tarif' => 'Bedah Mulut-Penjahitan 1 -3',
                'coa_id' => 400263,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            261 => 
            array (
                'id' => 369,
                'jenis_tarif' => 'Bedah Mulut-Penjahitan 4-5',
                'coa_id' => 400264,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            262 => 
            array (
                'id' => 370,
                'jenis_tarif' => 'Bedah Mulut-Kontrol & Buka Jahitan',
                'coa_id' => 400265,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            263 => 
            array (
                'id' => 371,
                'jenis_tarif' => 'Pedodontic-Pencabutan Gigi Anak Chlor etil',
                'coa_id' => 400266,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            264 => 
            array (
                'id' => 372,
                'jenis_tarif' => 'Pedodontic-Pencabutan Gigi Anak Suntik',
                'coa_id' => 400267,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            265 => 
            array (
                'id' => 373,
                'jenis_tarif' => 'Pedodontic-Penambalan Gigi Anak Level Kecil',
                'coa_id' => 400268,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            266 => 
            array (
                'id' => 374,
                'jenis_tarif' => 'Pedodontic-Penambalan Gigi Anak Level Besar',
                'coa_id' => 400269,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            267 => 
            array (
                'id' => 375,
            'jenis_tarif' => 'Pedodontic-Incline biteplan (diluar biaya pencetakan)',
                'coa_id' => 400270,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            268 => 
            array (
                'id' => 376,
                'jenis_tarif' => 'Debridement 1 -2 luka',
                'coa_id' => 400271,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            269 => 
            array (
                'id' => 377,
                'jenis_tarif' => 'Debridement >2 luka',
                'coa_id' => 400272,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            270 => 
            array (
                'id' => 378,
                'jenis_tarif' => 'Eksplorasi luka tusuk',
                'coa_id' => 400273,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            271 => 
            array (
                'id' => 379,
            'jenis_tarif' => 'Ekstirpasi benjolan (kista aterom, ganglion, lipoma, papiloma, dan lain-lain) -Ringan',
                'coa_id' => 400274,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            272 => 
            array (
                'id' => 380,
            'jenis_tarif' => 'Ekstirpasi benjolan (kista aterom, ganglion, lipoma, papiloma, dan lain-lain) -Sedang',
                'coa_id' => 400275,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            273 => 
            array (
                'id' => 381,
            'jenis_tarif' => 'Ekstirpasi benjolan (kista aterom, ganglion, lipoma, papiloma, dan lain-lain) -Berat',
                'coa_id' => 400276,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            274 => 
            array (
                'id' => 382,
                'jenis_tarif' => 'Ekstraksi Corpus Alienum Mata Berat',
                'coa_id' => 400277,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            275 => 
            array (
                'id' => 383,
                'jenis_tarif' => 'Ekstraksi korpus alienum THT Ringan',
                'coa_id' => 400278,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            276 => 
            array (
                'id' => 384,
                'jenis_tarif' => 'Ekstraksi korpus alienum THT Sedang',
                'coa_id' => 400279,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            277 => 
            array (
                'id' => 385,
                'jenis_tarif' => 'Ekstraksi korpus alienum THT Berat',
                'coa_id' => 400280,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            278 => 
            array (
                'id' => 386,
                'jenis_tarif' => 'Bulektomi luka bakar Ringan',
                'coa_id' => 400281,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            279 => 
            array (
                'id' => 387,
                'jenis_tarif' => 'Bulektomi luka bakar Sedang',
                'coa_id' => 400282,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            280 => 
            array (
                'id' => 388,
                'jenis_tarif' => 'Bulektomi luka bakar Berat',
                'coa_id' => 400283,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            281 => 
            array (
                'id' => 389,
                'jenis_tarif' => 'Pasang Elastik Verban',
                'coa_id' => 400284,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            282 => 
            array (
                'id' => 390,
                'jenis_tarif' => 'Pasang NGT',
                'coa_id' => 400285,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            283 => 
            array (
                'id' => 392,
                'jenis_tarif' => 'Pasang NGT + Bilas Lambung',
                'coa_id' => 400287,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            284 => 
            array (
                'id' => 394,
                'jenis_tarif' => 'Lepas NGT',
                'coa_id' => 400289,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            285 => 
            array (
                'id' => 395,
                'jenis_tarif' => 'Pemasangan gips untuk patah tulang',
                'coa_id' => 400290,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            286 => 
            array (
                'id' => 396,
                'jenis_tarif' => 'pemasangan gigi palsu',
                'coa_id' => 400291,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            287 => 
            array (
                'id' => 397,
                'jenis_tarif' => 'Chemical Peeling Acne Berat',
                'coa_id' => 400292,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            288 => 
            array (
                'id' => 398,
                'jenis_tarif' => 'ekstraksi corpal telinga',
                'coa_id' => 400293,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            289 => 
            array (
                'id' => 399,
                'jenis_tarif' => 'Derma White',
                'coa_id' => 400294,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            290 => 
            array (
                'id' => 400,
                'jenis_tarif' => 'Bongkar TS',
                'coa_id' => 400295,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            291 => 
            array (
                'id' => 401,
                'jenis_tarif' => 'cek Hb',
                'coa_id' => 400296,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            292 => 
            array (
                'id' => 402,
                'jenis_tarif' => 'protein urine',
                'coa_id' => 400297,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            293 => 
            array (
                'id' => 403,
                'jenis_tarif' => 'rapid test',
                'coa_id' => 400298,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            294 => 
            array (
                'id' => 404,
                'jenis_tarif' => 'rapid test antigen',
                'coa_id' => 400299,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            295 => 
            array (
                'id' => 405,
                'jenis_tarif' => 'FACIAL Acne plus PDT',
                'coa_id' => 400300,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            296 => 
            array (
                'id' => 406,
                'jenis_tarif' => 'home visite',
                'coa_id' => 400301,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
            297 => 
            array (
                'id' => 407,
                'jenis_tarif' => 'Cek asam urat',
                'coa_id' => 400302,
                'tenant_id' => 2,
                'created_at' => '2022-03-16 04:12:59',
                'updated_at' => '2022-03-16 04:12:59',
            ),
        ));

        foreach (JenisTarif::all() as $jt) {
            $coa                  = new Coa;
            $coa->kelompok_coa_id = 4;
            $coa->coa             = 'Pendapatan ' . $jt->jenis_tarif;
            $coa->kode_coa        = Coa::where('kelompok_coa_id', 4)
                                        ->orderBy('kode_coa', 'DESC')
                                        ->first() ? 
                                    (int) Coa::where('kelompok_coa_id', 4)->orderBy('kode_coa', 'DESC')->first()->kode_coa + 1 
                                    : 400001;
            $coa->saldo_awal      = 0;
            $coa->tenant_id      = 2;
            $coa->save();

            $jt->coa_id = $coa->id;
            $jt->save();
        }
    }
}
