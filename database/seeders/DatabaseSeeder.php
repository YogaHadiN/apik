<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* $this->call(GeneriksTableSeeder::class); */
        /* $this->call(SatuansTableSeeder::class); */
        /* $this->call(SediaansTableSeeder::class); */
        /* $this->call(UsersTableSeeder::class); */
        /* $this->call(AturanMinumsTableSeeder::class); */
        /* $this->call(KelasObatsTableSeeder::class); */
        /* $this->call(RolesTableSeeder::class); */
        /* $this->call(TenantsTableSeeder::class); */
        /* $this->call(TitelsTableSeeder::class); */
        /* $this->call(RaksTableSeeder::class); */
        /* $this->call(FormulasTableSeeder::class); */
        /* $this->call(MereksTableSeeder::class); */
        /* $this->call(KomposisisTableSeeder::class); */
        /* $this->call(TipeAsuransisTableSeeder::class); */
        /* $this->call(AsuransisTableSeeder::class); */
        /* $this->call(KelompokCoasTableSeeder::class); */
        /* $this->call(TipeTindakansTableSeeder::class); */
        $this->call(JenisTarifsTableSeeder::class);
        $this->call(TarifsTableSeeder::class);
    }
}
