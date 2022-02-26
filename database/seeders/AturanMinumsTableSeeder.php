<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AturanMinumsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('aturan_minums')->delete();
        
        \DB::table('aturan_minums')->insert(array (
            0 => 
            array (
                'id' => 1,
                'aturan_minum' => 'Sesudah Makan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            1 => 
            array (
                'id' => 2,
                'aturan_minum' => 'Sebelum Makan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            2 => 
            array (
                'id' => 3,
                'aturan_minum' => 'Obat gula, diantara makan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            3 => 
            array (
                'id' => 4,
                'aturan_minum' => 'Sebelum Tidur',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            4 => 
            array (
                'id' => 5,
                'aturan_minum' => 'Pagi Hari',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            5 => 
            array (
                'id' => 24,
                'aturan_minum' => 'Dihabiskan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            6 => 
            array (
                'id' => 25,
                'aturan_minum' => 'Jangan Diminum',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            7 => 
            array (
                'id' => 26,
                'aturan_minum' => 'Sekaligus',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            8 => 
            array (
                'id' => 27,
                'aturan_minum' => 'Masukkan ke lobang pantat',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            9 => 
            array (
                'id' => 28,
                'aturan_minum' => 'Masukkan ke lobang vagina',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            10 => 
            array (
                'id' => 29,
                'aturan_minum' => 'diminum malam hari',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            11 => 
            array (
                'id' => 30,
                'aturan_minum' => 'obat luar',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            12 => 
            array (
                'id' => 31,
            'aturan_minum' => 'Disemprot (inhaler)',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            13 => 
            array (
                'id' => 32,
                'aturan_minum' => 'injek IM',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            14 => 
            array (
                'id' => 33,
                'aturan_minum' => '1 gelas tiap mencret',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            15 => 
            array (
                'id' => 34,
                'aturan_minum' => '1/2 gelas tiap mencret',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            16 => 
            array (
                'id' => 35,
                'aturan_minum' => '1/2 gelas tiap muntah',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            17 => 
            array (
                'id' => 36,
                'aturan_minum' => 'diteteskan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            18 => 
            array (
                'id' => 37,
                'aturan_minum' => 'selang-seling 4 jam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            19 => 
            array (
                'id' => 38,
                'aturan_minum' => '3 x 1 boleh per 4 jam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            20 => 
            array (
                'id' => 39,
                'aturan_minum' => 'dikompres ke luka',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            21 => 
            array (
                'id' => 40,
                'aturan_minum' => 'bila sesak nafas',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            22 => 
            array (
                'id' => 41,
            'aturan_minum' => 'bebas (sebelum atau sesudah makan)',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            23 => 
            array (
                'id' => 42,
                'aturan_minum' => 'dioleskan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            24 => 
            array (
                'id' => 43,
                'aturan_minum' => '2 x 2',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            25 => 
            array (
                'id' => 44,
                'aturan_minum' => 'malam hari',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            26 => 
            array (
                'id' => 45,
                'aturan_minum' => 'diminum bersama LEVOFLOKSASIN',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            27 => 
            array (
                'id' => 46,
                'aturan_minum' => 'diminum bila mencret banyak',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            28 => 
            array (
                'id' => 47,
                'aturan_minum' => 'Bila mual',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            29 => 
            array (
                'id' => 48,
                'aturan_minum' => 'bila sesak nafas',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            30 => 
            array (
                'id' => 49,
                'aturan_minum' => 'dikunyah sebelum makan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            31 => 
            array (
                'id' => 50,
            'aturan_minum' => 'dihabiskan (malam hari)',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            32 => 
            array (
                'id' => 12345,
                'aturan_minum' => 'Bila tidak mau minum gak papa',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            33 => 
            array (
                'id' => 12346,
                'aturan_minum' => 'Bila batuk',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            34 => 
            array (
                'id' => 12347,
                'aturan_minum' => 'kalau perlu',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            35 => 
            array (
                'id' => 12348,
                'aturan_minum' => 'Untuk mengambil Obat',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            36 => 
            array (
                'id' => 12349,
                'aturan_minum' => 'bila nyeri',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            37 => 
            array (
                'id' => 12350,
                'aturan_minum' => 'bila cegukan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            38 => 
            array (
                'id' => 12351,
                'aturan_minum' => 'dioleskan tipis-tipis',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            39 => 
            array (
                'id' => 12352,
                'aturan_minum' => 'tiap mencret',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            40 => 
            array (
                'id' => 12353,
                'aturan_minum' => '1 gelas tiap muntah',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            41 => 
            array (
                'id' => 12354,
                'aturan_minum' => 'pegal2',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            42 => 
            array (
                'id' => 12355,
                'aturan_minum' => 'bila susah tidur',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            43 => 
            array (
                'id' => 12356,
            'aturan_minum' => 'diminum di klinik (sekali minum)',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            44 => 
            array (
                'id' => 12357,
                'aturan_minum' => 'Bila Demam / pans',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            45 => 
            array (
                'id' => 12358,
            'aturan_minum' => 'bila melilit (mules2)',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            46 => 
            array (
                'id' => 12359,
                'aturan_minum' => 'Bila masih berak2',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            47 => 
            array (
                'id' => 12360,
                'aturan_minum' => 'untuk mata',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            48 => 
            array (
                'id' => 12361,
                'aturan_minum' => 'tiap mencret / muntah',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            49 => 
            array (
                'id' => 12362,
                'aturan_minum' => 'diminum bersama antibiotik',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            50 => 
            array (
                'id' => 12363,
                'aturan_minum' => 'Bila Pusing',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            51 => 
            array (
                'id' => 12364,
                'aturan_minum' => '20 menit',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            52 => 
            array (
                'id' => 12365,
                'aturan_minum' => 'pusing berputar',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            53 => 
            array (
                'id' => 12366,
                'aturan_minum' => 'tetes telinga',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            54 => 
            array (
                'id' => 12367,
                'aturan_minum' => 'obat kumur',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            55 => 
            array (
                'id' => 12368,
                'aturan_minum' => 'demam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            56 => 
            array (
                'id' => 12369,
                'aturan_minum' => 'bila pilek',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            57 => 
            array (
                'id' => 12370,
                'aturan_minum' => 'kumur-kumur',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            58 => 
            array (
                'id' => 12371,
                'aturan_minum' => 'bila berdahak',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            59 => 
            array (
                'id' => 12372,
                'aturan_minum' => 'berputar',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            60 => 
            array (
                'id' => 12373,
                'aturan_minum' => 'gatal',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            61 => 
            array (
                'id' => 12374,
                'aturan_minum' => 'sesudah mandi',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            62 => 
            array (
                'id' => 12375,
                'aturan_minum' => 'darah tinggi',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            63 => 
            array (
                'id' => 12376,
                'aturan_minum' => 'bila demam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            64 => 
            array (
                'id' => 12377,
                'aturan_minum' => 'lambung',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            65 => 
            array (
                'id' => 12378,
                'aturan_minum' => 'sakit kepala',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            66 => 
            array (
                'id' => 12379,
                'aturan_minum' => 'dikompres',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            67 => 
            array (
                'id' => 12380,
                'aturan_minum' => 'kembung',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            68 => 
            array (
                'id' => 12381,
                'aturan_minum' => 'bila pusing',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            69 => 
            array (
                'id' => 12382,
                'aturan_minum' => 'dikunyah',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            70 => 
            array (
                'id' => 12383,
                'aturan_minum' => 'sesudah makan malam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            71 => 
            array (
                'id' => 12384,
                'aturan_minum' => 'perdarahan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            72 => 
            array (
                'id' => 12385,
                'aturan_minum' => 'tetes mata',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            73 => 
            array (
                'id' => 12386,
                'aturan_minum' => 'pilek',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            74 => 
            array (
                'id' => 12387,
                'aturan_minum' => 'Bila ber-debar2',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            75 => 
            array (
                'id' => 12388,
                'aturan_minum' => 'tetes telinga',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            76 => 
            array (
                'id' => 12389,
                'aturan_minum' => 'sekali minum',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            77 => 
            array (
                'id' => 12390,
                'aturan_minum' => 'Bila mual dan muntah2',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            78 => 
            array (
                'id' => 12391,
                'aturan_minum' => 'jangan diminum',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            79 => 
            array (
                'id' => 12392,
                'aturan_minum' => 'mencret',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            80 => 
            array (
                'id' => 12393,
                'aturan_minum' => 'sublingual',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            81 => 
            array (
                'id' => 12394,
                'aturan_minum' => 'sublingual lagi',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            82 => 
            array (
                'id' => 13391,
                'aturan_minum' => 'perdarahan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            83 => 
            array (
                'id' => 13392,
                'aturan_minum' => 'obat lambung',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            84 => 
            array (
                'id' => 13393,
                'aturan_minum' => 'lambung, dikunyah',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            85 => 
            array (
                'id' => 13394,
                'aturan_minum' => 'Bila Mencret',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            86 => 
            array (
                'id' => 13395,
                'aturan_minum' => 'Bila Demam / Nyeri',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            87 => 
            array (
                'id' => 13396,
                'aturan_minum' => 'Batuk pilek demam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            88 => 
            array (
                'id' => 13397,
                'aturan_minum' => 'Bila gatal / radang / bengkak',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            89 => 
            array (
                'id' => 13398,
                'aturan_minum' => 'Pelancar kencing, pagi',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            90 => 
            array (
                'id' => 13399,
                'aturan_minum' => 'Batuk pilek',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            91 => 
            array (
                'id' => 13400,
                'aturan_minum' => 'memar',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            92 => 
            array (
                'id' => 13401,
                'aturan_minum' => 'Obat luar, luka bakar',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            93 => 
            array (
                'id' => 13402,
                'aturan_minum' => 'Anti alergi',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            94 => 
            array (
                'id' => 13403,
                'aturan_minum' => 'Anti jamur',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            95 => 
            array (
                'id' => 13404,
                'aturan_minum' => 'Pil KB',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            96 => 
            array (
                'id' => 13405,
                'aturan_minum' => 'Setiap hari',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            97 => 
            array (
                'id' => 13406,
                'aturan_minum' => 'Vitamin',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            98 => 
            array (
                'id' => 13407,
                'aturan_minum' => 'Sariawan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            99 => 
            array (
                'id' => 13408,
                'aturan_minum' => 'Bila Demam / Pusing',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            100 => 
            array (
                'id' => 13409,
                'aturan_minum' => 'Bila pusing / panas',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            101 => 
            array (
                'id' => 13410,
                'aturan_minum' => 'minum sekaligus utk mencegah infeksi selama perjalanan ke RS',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            102 => 
            array (
                'id' => 13411,
                'aturan_minum' => 'dihisap-hisap',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            103 => 
            array (
                'id' => 13412,
                'aturan_minum' => 'batuk pilek nyeri',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            104 => 
            array (
                'id' => 13413,
                'aturan_minum' => 'mules nyeri demam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            105 => 
            array (
                'id' => 13414,
                'aturan_minum' => 'batuk demam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            106 => 
            array (
                'id' => 13415,
                'aturan_minum' => 'hidung tersumbat',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            107 => 
            array (
                'id' => 13416,
                'aturan_minum' => 'pilek demam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            108 => 
            array (
                'id' => 13417,
                'aturan_minum' => 'pagi atau siang sesudah makan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            109 => 
            array (
                'id' => 13418,
                'aturan_minum' => 'Bila Nyeri di ulu hati',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            110 => 
            array (
                'id' => 13419,
                'aturan_minum' => 'digosok ke kulit',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            111 => 
            array (
                'id' => 13420,
                'aturan_minum' => 'setiap pagi sesudah makan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            112 => 
            array (
                'id' => 13421,
                'aturan_minum' => '1 jam setelah makan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            113 => 
            array (
                'id' => 13422,
                'aturan_minum' => 'batuk pilek mencret',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            114 => 
            array (
                'id' => 13423,
                'aturan_minum' => 'bila nyeri haid',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            115 => 
            array (
                'id' => 13424,
                'aturan_minum' => 'diminum setiap 6 jam sekali',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            116 => 
            array (
                'id' => 13425,
                'aturan_minum' => 'untuk kompres Rivanol',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            117 => 
            array (
                'id' => 13426,
            'aturan_minum' => 'untuk Ganti Verban (GV)',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            118 => 
            array (
                'id' => 13427,
                'aturan_minum' => 'bila sakit lambung',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            119 => 
            array (
                'id' => 13428,
                'aturan_minum' => 'sakit pinggang',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            120 => 
            array (
                'id' => 13429,
                'aturan_minum' => 'pengencer dahak',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            121 => 
            array (
                'id' => 13430,
                'aturan_minum' => 'setalah BAB',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            122 => 
            array (
                'id' => 13431,
                'aturan_minum' => '2 table setalah mencret',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            123 => 
            array (
                'id' => 13432,
                'aturan_minum' => 'sebagai tambahan diantara waktu pemberian puyer',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            124 => 
            array (
                'id' => 13433,
                'aturan_minum' => 'nafsu makan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            125 => 
            array (
                'id' => 13434,
                'aturan_minum' => 'pelunak bab',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            126 => 
            array (
                'id' => 13435,
                'aturan_minum' => 'prednison 40 tab hrhari 1-2 : 3x3, hr 3-4 : 3x2, hr 5-7 : 3x1',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            127 => 
            array (
                'id' => 13436,
                'aturan_minum' => 'PAGI SEBELUM MAKAN',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            128 => 
            array (
                'id' => 13437,
                'aturan_minum' => 'untuk mengurangi sesak nafas',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            129 => 
            array (
                'id' => 13438,
                'aturan_minum' => 'batuk',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            130 => 
            array (
                'id' => 13439,
                'aturan_minum' => '1 Jam Sebelum Makan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            131 => 
            array (
                'id' => 13440,
                'aturan_minum' => 'dioleskan tipis setiap Malam hari',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            132 => 
            array (
                'id' => 13441,
                'aturan_minum' => 'batuk, haniskan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            133 => 
            array (
                'id' => 13442,
                'aturan_minum' => 'kliyengan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            134 => 
            array (
                'id' => 13443,
                'aturan_minum' => 'mulai besok',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            135 => 
            array (
                'id' => 13444,
                'aturan_minum' => 'nyeri dan gatal',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            136 => 
            array (
                'id' => 13445,
            'aturan_minum' => 'Bila pusing berputar (7 keliling)',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            137 => 
            array (
                'id' => 13446,
                'aturan_minum' => 'bila nyeri dada',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            138 => 
            array (
                'id' => 13447,
                'aturan_minum' => 'pusing melayang',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            139 => 
            array (
                'id' => 13448,
                'aturan_minum' => 'boleh per 4 jam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            140 => 
            array (
                'id' => 13449,
                'aturan_minum' => 'dibawah lidah',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            141 => 
            array (
                'id' => 13450,
                'aturan_minum' => 'mabuk kendaraan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            142 => 
            array (
                'id' => 13451,
                'aturan_minum' => 'selang 6 jam dari puyer bila masih panas',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            143 => 
            array (
                'id' => 13452,
                'aturan_minum' => 'inject',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            144 => 
            array (
                'id' => 13453,
                'aturan_minum' => 'sebelum tidur MALAM',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            145 => 
            array (
                'id' => 13454,
                'aturan_minum' => 'pagi & sore',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            146 => 
            array (
                'id' => 13455,
                'aturan_minum' => 'minum sekaligus, besoknya',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            147 => 
            array (
                'id' => 13456,
                'aturan_minum' => 'Pagi atau Sore',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            148 => 
            array (
                'id' => 13457,
                'aturan_minum' => 'bila batuk pilek',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            149 => 
            array (
                'id' => 13458,
                'aturan_minum' => 'iritasi',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            150 => 
            array (
                'id' => 13459,
                'aturan_minum' => 'pagi hari 1',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            151 => 
            array (
                'id' => 13460,
                'aturan_minum' => 'pagi 2',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            152 => 
            array (
                'id' => 13461,
                'aturan_minum' => 'malam 2',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            153 => 
            array (
                'id' => 13462,
                'aturan_minum' => 'pagi dan malam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            154 => 
            array (
                'id' => 13463,
                'aturan_minum' => 'dilarutkan di air hangat dalam sendok, diminumkan perlahan. bila muntah, ulangi pemberian obat yang baru',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            155 => 
            array (
                'id' => 13464,
                'aturan_minum' => 'lambung, dkunyah 1 jam sebelum makan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            156 => 
            array (
                'id' => 13465,
                'aturan_minum' => 'oles tipis dengan cotton bud',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            157 => 
            array (
                'id' => 13466,
                'aturan_minum' => 'bersin',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            158 => 
            array (
                'id' => 13467,
                'aturan_minum' => 'bila sakit perut/mules',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            159 => 
            array (
                'id' => 13468,
                'aturan_minum' => 'oles pada jerawat',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            160 => 
            array (
                'id' => 13469,
                'aturan_minum' => 'sabun wajah',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            161 => 
            array (
                'id' => 13470,
                'aturan_minum' => 'totol jerawat',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            162 => 
            array (
                'id' => 13471,
                'aturan_minum' => 'oles malam hari setelah krim',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            163 => 
            array (
                'id' => 13472,
                'aturan_minum' => 'selagi makan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            164 => 
            array (
                'id' => 13473,
                'aturan_minum' => 'oles dimalam hari seluruh badan kecuali kepala, selama 8 jam, bersihkan pagi hari, ',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            165 => 
            array (
                'id' => 13474,
                'aturan_minum' => 'oles seluruh badan kecuali kepala dan wajah di malam hari setelah mandi, selama 8 jam, bersihkan pagi hari',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            166 => 
            array (
                'id' => 13475,
                'aturan_minum' => 'tabir surya',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            167 => 
            array (
                'id' => 13476,
            'aturan_minum' => 'anti iritasi ( malam hari)',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            168 => 
            array (
                'id' => 13477,
                'aturan_minum' => 'sebelum sunscreen',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            169 => 
            array (
                'id' => 13478,
                'aturan_minum' => 'dioleskan dengan kapas',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            170 => 
            array (
                'id' => 13479,
                'aturan_minum' => 'nyeri perut',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            171 => 
            array (
                'id' => 13480,
                'aturan_minum' => 'oles pada jerawat setelah krim malam dengan kapas/cotton buds',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            172 => 
            array (
                'id' => 13481,
                'aturan_minum' => 'sebelum krim pagi/malam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            173 => 
            array (
                'id' => 13482,
                'aturan_minum' => 'bekas jerawat',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            174 => 
            array (
                'id' => 13483,
                'aturan_minum' => 'boleh 4x1 jika masih demam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            175 => 
            array (
                'id' => 13484,
                'aturan_minum' => 'sebelum krim malam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            176 => 
            array (
                'id' => 13485,
                'aturan_minum' => 'Obat Asam Urat',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            177 => 
            array (
                'id' => 13486,
                'aturan_minum' => 'area merah/iritasi pagi & malam sebelum krim',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            178 => 
            array (
                'id' => 13487,
                'aturan_minum' => 'pusing / pegal2',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            179 => 
            array (
                'id' => 13488,
                'aturan_minum' => 'oles tipis pada vlek hitam sebelum krim malam dgn kapas/cotton bud',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            180 => 
            array (
                'id' => 13489,
                'aturan_minum' => 'krim lingkar mata',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            181 => 
            array (
                'id' => 13490,
                'aturan_minum' => 'boleh per 6 jam jika masih demam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            182 => 
            array (
                'id' => 13491,
                'aturan_minum' => 'diteteskan telinga kanan dan kiri',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            183 => 
            array (
                'id' => 13492,
                'aturan_minum' => 'malam hari sebelum krim malam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            184 => 
            array (
                'id' => 13493,
                'aturan_minum' => 'pagi & malam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            185 => 
            array (
                'id' => 13494,
                'aturan_minum' => 'sebelum facial wash, dgn kapas',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            186 => 
            array (
                'id' => 13495,
                'aturan_minum' => 'totol pada jerawat, malam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            187 => 
            array (
                'id' => 13496,
                'aturan_minum' => 'antihistamin',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            188 => 
            array (
                'id' => 13497,
                'aturan_minum' => 'taruh dibawah lidah jika nyeri dada',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            189 => 
            array (
                'id' => 13498,
                'aturan_minum' => 'sebelum facial wash',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            190 => 
            array (
                'id' => 13499,
                'aturan_minum' => 'sebelum sabun wajah',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            191 => 
            array (
                'id' => 13500,
                'aturan_minum' => 'sakit tenggorokan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            192 => 
            array (
                'id' => 13501,
                'aturan_minum' => 'obat jerawat',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            193 => 
            array (
                'id' => 13502,
                'aturan_minum' => 'nyeri telan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            194 => 
            array (
                'id' => 13503,
                'aturan_minum' => 'batuk demam/nyeri kepala',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            195 => 
            array (
                'id' => 13504,
                'aturan_minum' => 'sebelum cuci wajah',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            196 => 
            array (
                'id' => 13505,
                'aturan_minum' => 'mata merah',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            197 => 
            array (
                'id' => 13506,
                'aturan_minum' => 'nyeri punggung',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            198 => 
            array (
                'id' => 13507,
                'aturan_minum' => 'nyeri pinggang',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            199 => 
            array (
                'id' => 13508,
                'aturan_minum' => 'BATUK SESAK',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            200 => 
            array (
                'id' => 13509,
                'aturan_minum' => 'anti iritasi / merah',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            201 => 
            array (
                'id' => 13510,
                'aturan_minum' => 'krim malam 2, selang seling krim malam 1',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            202 => 
            array (
                'id' => 13511,
                'aturan_minum' => 'krim malam 1',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            203 => 
            array (
                'id' => 13512,
                'aturan_minum' => 'jerawat meradang',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            204 => 
            array (
                'id' => 13513,
                'aturan_minum' => 'milk cleanser',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            205 => 
            array (
                'id' => 13514,
                'aturan_minum' => 'satu puff sekali cuci muka',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            206 => 
            array (
                'id' => 13515,
                'aturan_minum' => 'krim malam 1, 2"',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            207 => 
            array (
                'id' => 13516,
                'aturan_minum' => 'krim malam 2, 1 "',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            208 => 
            array (
                'id' => 13517,
                'aturan_minum' => 'krim malam 2, 2 "',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            209 => 
            array (
                'id' => 13518,
                'aturan_minum' => 'krim malam 1, 1 "',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            210 => 
            array (
                'id' => 13519,
                'aturan_minum' => 'moisturizer, sebelum sunscreen',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            211 => 
            array (
                'id' => 13520,
                'aturan_minum' => 'malam jerawat',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            212 => 
            array (
                'id' => 13521,
                'aturan_minum' => 'skin balancer oily/acne',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            213 => 
            array (
                'id' => 13522,
                'aturan_minum' => 'essence sebelum krim',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            214 => 
            array (
                'id' => 13523,
                'aturan_minum' => 'bengkak',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            215 => 
            array (
                'id' => 13524,
                'aturan_minum' => 'serum flek totol di flek saja, sblm krim malam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            216 => 
            array (
                'id' => 13525,
                'aturan_minum' => 'oles pd jerawat, bilas stlh 30 menit',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            217 => 
            array (
                'id' => 13526,
                'aturan_minum' => 'oles pd jerawat, bilas 30 menit',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            218 => 
            array (
                'id' => 13527,
                'aturan_minum' => 'selang-seling 4 jam dg proris',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            219 => 
            array (
                'id' => 13528,
                'aturan_minum' => 'oles pada wajah, bilas setelah 30 menit',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            220 => 
            array (
                'id' => 13529,
                'aturan_minum' => 'serum acne, 15-30 menit pakai lalu bilas',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            221 => 
            array (
                'id' => 13530,
                'aturan_minum' => 'serum brightening',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            222 => 
            array (
                'id' => 13531,
                'aturan_minum' => 'anti iritasi, 5-7 hari',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            223 => 
            array (
                'id' => 13532,
                'aturan_minum' => 'essens sebelum serum/krim',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            224 => 
            array (
                'id' => 13533,
                'aturan_minum' => 'pusing/ demam batuk pilek',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            225 => 
            array (
                'id' => 13534,
                'aturan_minum' => 'malam selang seling anti iritasi',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            226 => 
            array (
                'id' => 13535,
                'aturan_minum' => 'boleh per 4 jam jika masih demam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            227 => 
            array (
                'id' => 13536,
                'aturan_minum' => 'bila gatal-gatal',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            228 => 
            array (
                'id' => 13537,
                'aturan_minum' => 'bila sakit telinga',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            229 => 
            array (
                'id' => 13538,
                'aturan_minum' => 'Bila menggigil',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            230 => 
            array (
                'id' => 13539,
                'aturan_minum' => 'bb cream acne',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            231 => 
            array (
                'id' => 13540,
                'aturan_minum' => 'bedak tabur acne',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            232 => 
            array (
                'id' => 13541,
                'aturan_minum' => '3 hari menjelang mens - H3',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            233 => 
            array (
                'id' => 13542,
                'aturan_minum' => 'gatal di tenggorokan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            234 => 
            array (
                'id' => 13543,
                'aturan_minum' => 'jika masih demam setelah minum paracetamol',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            235 => 
            array (
                'id' => 13544,
                'aturan_minum' => 'PAGI sblm sunscreen & MALAM setelah serum',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            236 => 
            array (
                'id' => 13545,
                'aturan_minum' => 'bila sakit kepala / pusiing',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            237 => 
            array (
                'id' => 13546,
                'aturan_minum' => 'untuk mandi',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            238 => 
            array (
                'id' => 13547,
                'aturan_minum' => 'dioleskan sambil digosok pelan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            239 => 
            array (
                'id' => 13548,
                'aturan_minum' => 'bruntusan, sblm krim malam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            240 => 
            array (
                'id' => 13549,
                'aturan_minum' => 'krim 1, jerawat, iritasi',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            241 => 
            array (
                'id' => 13550,
                'aturan_minum' => 'krim 2, whitening',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            242 => 
            array (
                'id' => 13551,
                'aturan_minum' => 'krim 2, whitening acne',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            243 => 
            array (
                'id' => 13552,
                'aturan_minum' => 'krim malam 2',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            244 => 
            array (
                'id' => 13553,
                'aturan_minum' => 'malam acne',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            245 => 
            array (
                'id' => 13554,
                'aturan_minum' => 'pagi acne',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            246 => 
            array (
                'id' => 13555,
            'aturan_minum' => 'toner (kapas)',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            247 => 
            array (
                'id' => 13556,
                'aturan_minum' => 'untuk varises',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            248 => 
            array (
                'id' => 13557,
                'aturan_minum' => 'serum lightening ',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            249 => 
            array (
                'id' => 13558,
                'aturan_minum' => 'micellar water / toner',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            250 => 
            array (
                'id' => 13559,
                'aturan_minum' => 'malam whitening',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            251 => 
            array (
                'id' => 13560,
                'aturan_minum' => 'malam flek acne',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            252 => 
            array (
                'id' => 13561,
                'aturan_minum' => 'micellar water',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            253 => 
            array (
                'id' => 13562,
                'aturan_minum' => 'malam flek',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            254 => 
            array (
                'id' => 13563,
                'aturan_minum' => 'malam flek hitam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            255 => 
            array (
                'id' => 13564,
                'aturan_minum' => 'pembersih make up/sbln sabun/krim',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            256 => 
            array (
                'id' => 13565,
                'aturan_minum' => 'pembersih make up / sblm sabun/krim',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            257 => 
            array (
                'id' => 13566,
                'aturan_minum' => 'jerawat punggung',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            258 => 
            array (
                'id' => 13567,
                'aturan_minum' => '1 minggu kemudian',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            259 => 
            array (
                'id' => 13568,
                'aturan_minum' => 'krim malam 1, oles tipis sblm AN',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            260 => 
            array (
                'id' => 13569,
                'aturan_minum' => 'iritasi, bruntus, ',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            261 => 
            array (
                'id' => 13570,
                'aturan_minum' => 'oles tipis',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            262 => 
            array (
                'id' => 13571,
                'aturan_minum' => 'bruntus/jerawat, sblm krim malam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            263 => 
            array (
                'id' => 13572,
                'aturan_minum' => 'siang & malam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            264 => 
            array (
                'id' => 13573,
                'aturan_minum' => 'selang-seling 4 jam dg PCT',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            265 => 
            array (
                'id' => 13574,
                'aturan_minum' => 'totol pada flek hitam dgn cotton buds',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            266 => 
            array (
                'id' => 13575,
                'aturan_minum' => 'selang seling',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            267 => 
            array (
                'id' => 13576,
                'aturan_minum' => 'h-2 mens s/d h4',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            268 => 
            array (
                'id' => 13577,
                'aturan_minum' => 'h/2 sd h/4 mens',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            269 => 
            array (
                'id' => 13578,
                'aturan_minum' => 'setiap malam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            270 => 
            array (
                'id' => 13579,
                'aturan_minum' => '2 hari sekali',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            271 => 
            array (
                'id' => 13580,
                'aturan_minum' => 'sunscreen acne',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            272 => 
            array (
                'id' => 13581,
                'aturan_minum' => 'di antara makan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            273 => 
            array (
                'id' => 13582,
                'aturan_minum' => 'mix malam 1',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            274 => 
            array (
                'id' => 13583,
                'aturan_minum' => 'mix malam 2',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            275 => 
            array (
                'id' => 13584,
                'aturan_minum' => '2 minggu pertama',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            276 => 
            array (
                'id' => 13585,
                'aturan_minum' => 'sunscreen',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            277 => 
            array (
                'id' => 13586,
                'aturan_minum' => 'sebelum serum/krim',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            278 => 
            array (
                'id' => 13587,
                'aturan_minum' => 'untuk mengurangi bengkak',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            279 => 
            array (
                'id' => 13588,
                'aturan_minum' => 'jika gatal',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            280 => 
            array (
                'id' => 13589,
                'aturan_minum' => 'setiap 3 jam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            281 => 
            array (
                'id' => 13590,
                'aturan_minum' => 'telinga kiri',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            282 => 
            array (
                'id' => 13591,
                'aturan_minum' => 'telinga kanan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            283 => 
            array (
                'id' => 13592,
                'aturan_minum' => 'untuk demam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            284 => 
            array (
                'id' => 13593,
                'aturan_minum' => 'vitamin badan pegal',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            285 => 
            array (
                'id' => 13594,
                'aturan_minum' => 'obat batuk',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            286 => 
            array (
                'id' => 13595,
                'aturan_minum' => 'untuk Bapil',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            287 => 
            array (
                'id' => 13596,
                'aturan_minum' => 'untuk dikaki',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            288 => 
            array (
                'id' => 13597,
                'aturan_minum' => 'pereda gatal',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            289 => 
            array (
                'id' => 13598,
                'aturan_minum' => 'untuk lambung',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            290 => 
            array (
                'id' => 13599,
                'aturan_minum' => 'untuk nyeri perut',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            291 => 
            array (
                'id' => 13600,
                'aturan_minum' => 'untk radang',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            292 => 
            array (
                'id' => 13601,
                'aturan_minum' => 'untuk selangkangan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            293 => 
            array (
                'id' => 13602,
                'aturan_minum' => 'untuk nyeri tenggorokan dan demam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            294 => 
            array (
                'id' => 13603,
                'aturan_minum' => 'batuk berdahak',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            295 => 
            array (
                'id' => 13604,
                'aturan_minum' => 'untuk nyeri',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            296 => 
            array (
                'id' => 13605,
                'aturan_minum' => '30 menit sebelu makan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            297 => 
            array (
                'id' => 13606,
                'aturan_minum' => '30 menit sebelum makan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            298 => 
            array (
                'id' => 13607,
                'aturan_minum' => 'diteteskan ke sariawan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            299 => 
            array (
                'id' => 13608,
                'aturan_minum' => 'jika sesah nafas',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            300 => 
            array (
                'id' => 13609,
                'aturan_minum' => 'diminum jika diare',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            301 => 
            array (
                'id' => 13610,
                'aturan_minum' => 'dioleskan pada kelopak mata yang bengkak',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            302 => 
            array (
                'id' => 13611,
                'aturan_minum' => 'dioles pada lidah',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            303 => 
            array (
                'id' => 13612,
                'aturan_minum' => 'dioleskan di mata yg sakit',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            304 => 
            array (
                'id' => 13613,
                'aturan_minum' => 'obat mual',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            305 => 
            array (
                'id' => 13614,
                'aturan_minum' => 'diminum jika mual',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            306 => 
            array (
                'id' => 13615,
                'aturan_minum' => 'diminum jika demam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            307 => 
            array (
                'id' => 13616,
                'aturan_minum' => 'dioleskan pada luka bakar',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            308 => 
            array (
                'id' => 13617,
                'aturan_minum' => 'obat kolesterol',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            309 => 
            array (
                'id' => 13618,
                'aturan_minum' => 'obat radang dan demam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            310 => 
            array (
                'id' => 13619,
                'aturan_minum' => 'jika sakit kepala',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            311 => 
            array (
                'id' => 13620,
                'aturan_minum' => 'setiap 2-3 jam saat luar ruangan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            312 => 
            array (
                'id' => 13621,
                'aturan_minum' => 'diamkan 1-2 mnt',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            313 => 
            array (
                'id' => 13622,
                'aturan_minum' => 'jika demam/sakit kepala',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            314 => 
            array (
                'id' => 13623,
                'aturan_minum' => 'dioles ditangan dan kaki',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            315 => 
            array (
                'id' => 13624,
                'aturan_minum' => 'jika pusing berputar',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            316 => 
            array (
                'id' => 13625,
                'aturan_minum' => 'bila nyeri/ untuk kaki',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            317 => 
            array (
                'id' => 13626,
                'aturan_minum' => 'setelah menggunakan H2O2',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            318 => 
            array (
                'id' => 13627,
                'aturan_minum' => 'diminum jika kleyengan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            319 => 
            array (
                'id' => 13628,
                'aturan_minum' => 'loose powder',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            320 => 
            array (
                'id' => 13629,
                'aturan_minum' => 'per 5 or 6 jam/ dihabiskan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            321 => 
            array (
                'id' => 13630,
                'aturan_minum' => 'selang-seling dgn Malam 2',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            322 => 
            array (
                'id' => 13631,
                'aturan_minum' => 'selang seling Malam 1',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            323 => 
            array (
                'id' => 13632,
                'aturan_minum' => 'selang seling Malam 2',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            324 => 
            array (
                'id' => 13633,
                'aturan_minum' => 'gatal tenggorokan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            325 => 
            array (
                'id' => 13634,
                'aturan_minum' => 'oleskan pada bisul paha',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            326 => 
            array (
                'id' => 13635,
                'aturan_minum' => '1-1',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            327 => 
            array (
                'id' => 13636,
                'aturan_minum' => '2 - 1',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            328 => 
            array (
                'id' => 13637,
                'aturan_minum' => 'cek asam urat dulu',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            329 => 
            array (
                'id' => 13638,
                'aturan_minum' => 'hidung mampet',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            330 => 
            array (
                'id' => 13639,
                'aturan_minum' => 'pusing/batuk',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            331 => 
            array (
                'id' => 13640,
                'aturan_minum' => 'radang bisul',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            332 => 
            array (
                'id' => 13641,
                'aturan_minum' => 'sakit perut',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            333 => 
            array (
                'id' => 13642,
                'aturan_minum' => 'radang/nyeri',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            334 => 
            array (
                'id' => 13643,
                'aturan_minum' => 'batuk gatal tengorkan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            335 => 
            array (
                'id' => 13644,
                'aturan_minum' => 'pusing pilek',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            336 => 
            array (
                'id' => 13645,
                'aturan_minum' => 'demam/ pilek',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            337 => 
            array (
                'id' => 13646,
                'aturan_minum' => 'batuk, sakit kepala',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            338 => 
            array (
                'id' => 13647,
                'aturan_minum' => 'jika pusing melayang',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            339 => 
            array (
                'id' => 13648,
                'aturan_minum' => 'sakit gigi',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            340 => 
            array (
                'id' => 13649,
                'aturan_minum' => 'selang-seling serum',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            341 => 
            array (
                'id' => 13650,
                'aturan_minum' => 'meredakan batuk',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            342 => 
            array (
                'id' => 13651,
                'aturan_minum' => 'batuk, pusing',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            343 => 
            array (
                'id' => 13652,
                'aturan_minum' => 'batuk sakit kepala',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            344 => 
            array (
                'id' => 13653,
                'aturan_minum' => 'pusing/ radang',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            345 => 
            array (
                'id' => 13654,
                'aturan_minum' => 'setelah makan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            346 => 
            array (
                'id' => 13655,
                'aturan_minum' => 'diare, muntah',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            347 => 
            array (
                'id' => 13656,
                'aturan_minum' => 'panas, pilek',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            348 => 
            array (
                'id' => 13657,
                'aturan_minum' => 'nyeri/peradangan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            349 => 
            array (
                'id' => 13658,
                'aturan_minum' => 'kram perut',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            350 => 
            array (
                'id' => 13659,
                'aturan_minum' => 'mata kanan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            351 => 
            array (
                'id' => 13660,
                'aturan_minum' => 'mata kiri',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            352 => 
            array (
                'id' => 13661,
                'aturan_minum' => 'selang seling dengan serum',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            353 => 
            array (
                'id' => 13662,
                'aturan_minum' => 'pilek dan bersin',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            354 => 
            array (
                'id' => 13663,
                'aturan_minum' => 'batuk ,pegal',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            355 => 
            array (
                'id' => 13664,
                'aturan_minum' => 'penggerak usus/mual',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            356 => 
            array (
                'id' => 13665,
                'aturan_minum' => 'sewaktu makan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            357 => 
            array (
                'id' => 13666,
                'aturan_minum' => 'selang seling dengan krim malam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            358 => 
            array (
                'id' => 13667,
                'aturan_minum' => 'siang hari',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            359 => 
            array (
                'id' => 13668,
                'aturan_minum' => 'malam 1, malam 2',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            360 => 
            array (
                'id' => 13669,
                'aturan_minum' => 'add tret sol 1gtt',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            361 => 
            array (
                'id' => 13670,
                'aturan_minum' => 'rwn + tretsol 1gtt',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            362 => 
            array (
                'id' => 13671,
                'aturan_minum' => 'ditepuk halus di wajah tanpa kapas',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            363 => 
            array (
                'id' => 13672,
                'aturan_minum' => 'anti iritasi 1',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            364 => 
            array (
                'id' => 13673,
                'aturan_minum' => 'setiap PAGI SEBELUM MAKAN',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            365 => 
            array (
                'id' => 13674,
                'aturan_minum' => 'bila bersin',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            366 => 
            array (
                'id' => 13675,
                'aturan_minum' => 'moisturizer',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            367 => 
            array (
                'id' => 13676,
                'aturan_minum' => '4 hari sekali',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            368 => 
            array (
                'id' => 13677,
                'aturan_minum' => 'pagi siang dan malam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            369 => 
            array (
                'id' => 13678,
                'aturan_minum' => 'pagi, siang, sore, malam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            370 => 
            array (
                'id' => 13679,
                'aturan_minum' => '1 bungkus tiap mencret',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            371 => 
            array (
                'id' => 13680,
                'aturan_minum' => 'jantung',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            372 => 
            array (
                'id' => 13681,
                'aturan_minum' => 'malam AG',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            373 => 
            array (
                'id' => 13682,
                'aturan_minum' => 'dipakai setelah essens',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            374 => 
            array (
                'id' => 13683,
                'aturan_minum' => 'pagi dan siang',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            375 => 
            array (
                'id' => 13684,
            'aturan_minum' => 'untuk sakit2 (di tulang, dll)',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            376 => 
            array (
                'id' => 13685,
                'aturan_minum' => 'dioleskan di area jerawat',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            377 => 
            array (
                'id' => 13686,
                'aturan_minum' => 'demam dan pusing',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            378 => 
            array (
                'id' => 13687,
                'aturan_minum' => 'sakit kencing',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            379 => 
            array (
                'id' => 13688,
                'aturan_minum' => 'sebelum rwn',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            380 => 
            array (
                'id' => 13689,
                'aturan_minum' => 'jika bepergian',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            381 => 
            array (
                'id' => 13690,
                'aturan_minum' => 'selang sehari',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            382 => 
            array (
                'id' => 13691,
                'aturan_minum' => 'pagi, siang/sore, malam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            383 => 
            array (
                'id' => 13692,
                'aturan_minum' => 'add tretsol 2 gtt',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            384 => 
            array (
                'id' => 13693,
                'aturan_minum' => 'Setiap bangun tidur pagi',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            385 => 
            array (
                'id' => 13694,
                'aturan_minum' => 'Sakit perut dan pusing',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            386 => 
            array (
                'id' => 13695,
                'aturan_minum' => 'pagi,siang,malam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            387 => 
            array (
                'id' => 13696,
                'aturan_minum' => 'obat diare',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            388 => 
            array (
                'id' => 13697,
                'aturan_minum' => 'kram2',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            389 => 
            array (
                'id' => 13698,
                'aturan_minum' => 'pusing + susah tidur',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            390 => 
            array (
                'id' => 13699,
                'aturan_minum' => 'melancarkan kencing',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            391 => 
            array (
                'id' => 13700,
                'aturan_minum' => 'takaran obat',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            392 => 
            array (
                'id' => 13701,
                'aturan_minum' => 'nyeri sendi',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            393 => 
            array (
                'id' => 13702,
                'aturan_minum' => 'kalau sakit sendi',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            394 => 
            array (
                'id' => 13703,
                'aturan_minum' => 'sakit punggung',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            395 => 
            array (
                'id' => 13704,
                'aturan_minum' => 'ngilu2',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            396 => 
            array (
                'id' => 13705,
                'aturan_minum' => 'untuk tidur',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            397 => 
            array (
                'id' => 13706,
                'aturan_minum' => 'Bila sakit dada',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            398 => 
            array (
                'id' => 13707,
                'aturan_minum' => 'bila berdebar-debar',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            399 => 
            array (
                'id' => 13708,
                'aturan_minum' => 'minimal 3 hari atau sampai mencret stop',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            400 => 
            array (
                'id' => 13709,
                'aturan_minum' => 'jangan dicampur susu',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            401 => 
            array (
                'id' => 13710,
                'aturan_minum' => 'agar bisa kentut',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            402 => 
            array (
                'id' => 13711,
                'aturan_minum' => 'pusing dan pilek',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            403 => 
            array (
                'id' => 13712,
                'aturan_minum' => 'Roboransia',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            404 => 
            array (
                'id' => 13713,
                'aturan_minum' => 'setelah DMC',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            405 => 
            array (
                'id' => 13714,
                'aturan_minum' => '2 x sehari',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            406 => 
            array (
                'id' => 13715,
                'aturan_minum' => 'Sakit Haid',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            407 => 
            array (
                'id' => 13716,
                'aturan_minum' => 'nyeri  perut, pusing',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            408 => 
            array (
                'id' => 13717,
                'aturan_minum' => 'sebelum makan pagi',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            409 => 
            array (
                'id' => 13718,
                'aturan_minum' => 'panas tinggi',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            410 => 
            array (
                'id' => 13719,
                'aturan_minum' => 'Sebelum Melakukan Perjalanan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            411 => 
            array (
                'id' => 13720,
                'aturan_minum' => 'untuk BATUK dan SESAK NAFAS',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            412 => 
            array (
                'id' => 13721,
                'aturan_minum' => 'untuk bengkak',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            413 => 
            array (
                'id' => 13722,
                'aturan_minum' => '15 menit sebelum makan pagi',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            414 => 
            array (
                'id' => 13723,
                'aturan_minum' => 'extra, sudah di minum di klinik',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            415 => 
            array (
                'id' => 13724,
                'aturan_minum' => 'keringat dingin',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            416 => 
            array (
                'id' => 13725,
                'aturan_minum' => 'nyeri/pegal pegal leher',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            417 => 
            array (
                'id' => 13726,
                'aturan_minum' => 'nyer kaki',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            418 => 
            array (
                'id' => 13727,
                'aturan_minum' => 'bila mimisan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            419 => 
            array (
                'id' => 13728,
                'aturan_minum' => 'bila nafas berbunyi NGIK-NGIK',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            420 => 
            array (
                'id' => 13729,
                'aturan_minum' => 'Keleyengan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            421 => 
            array (
                'id' => 13730,
                'aturan_minum' => 'demam tinggi',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            422 => 
            array (
                'id' => 13731,
                'aturan_minum' => 'Buat vertigo',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            423 => 
            array (
                'id' => 13732,
                'aturan_minum' => 'sebelum makan siang',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            424 => 
            array (
                'id' => 13733,
                'aturan_minum' => 'nyeri gigi',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            425 => 
            array (
                'id' => 13734,
            'aturan_minum' => 'siang (1 jam sebelum makan)',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            426 => 
            array (
                'id' => 13735,
                'aturan_minum' => 'bila migrain kambuh',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            427 => 
            array (
                'id' => 13736,
                'aturan_minum' => 'mengeringkan cairan telinga',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            428 => 
            array (
                'id' => 13737,
                'aturan_minum' => 'obat jantung',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            429 => 
            array (
                'id' => 13738,
                'aturan_minum' => 'batuk pilek sesak',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            430 => 
            array (
                'id' => 13739,
                'aturan_minum' => 'puyer mencret',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            431 => 
            array (
                'id' => 13740,
                'aturan_minum' => 'selang 4-6jam dari racikan jika masih panas',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            432 => 
            array (
                'id' => 13741,
                'aturan_minum' => 'Obat Mencret',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            433 => 
            array (
                'id' => 13742,
                'aturan_minum' => 'Kesemutan',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            434 => 
            array (
                'id' => 13743,
                'aturan_minum' => 'puyer diare',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
            435 => 
            array (
                'id' => 13744,
                'aturan_minum' => 'alergi diminum malam',
                'tenant_id' => 1,
                'created_at' => '2021-12-27 09:14:36',
                'updated_at' => '2021-12-27 09:14:41',
            ),
        ));
        
        
    }
}