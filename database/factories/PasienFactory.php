<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Pasien;

class PasienFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pasien::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->word,
            'nama_peserta' => $this->faker->word,
            'nomor_asuransi' => $this->faker->word,
            'asuransi_id' => $this->faker->randomNumber(),
            'jenis_peserta' => $this->faker->numberBetween(-10000, 10000),
            'sex' => $this->faker->numberBetween(-8, 8),
            'alamat' => $this->faker->text,
            'tanggal_lahir' => $this->faker->date(),
            'nama_ayah' => $this->faker->word,
            'nama_ibu' => $this->faker->word,
            'image' => $this->faker->word,
            'ktp_image' => $this->faker->word,
            'bpjs_image' => $this->faker->word,
            'nomor_asuransi_bpjs' => $this->faker->word,
            'nomor_ktp' => $this->faker->word,
            'jangan_disms' => $this->faker->numberBetween(-8, 8),
            'sudah_kontak_bulan_ini' => $this->faker->numberBetween(-8, 8),
            'prolanis_ht' => $this->faker->numberBetween(-8, 8),
            'prolanis_dm' => $this->faker->numberBetween(-8, 8),
            'prolanis_ht_flagging_image' => $this->faker->word,
            'prolanis_dm_flagging_image' => $this->faker->word,
            'kartu_asuransi_image' => $this->faker->word,
        ];
    }
}
