<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Asuransi;

class AsuransiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Asuransi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->word,
            'alamat' => $this->faker->text,
            'tanggal_berakhir' => $this->faker->date(),
            'alamat_penagihan' => $this->faker->text,
            'catatan_pelayanan_gigi' => $this->faker->text,
            'tipe_asuransi_id' => $this->faker->randomNumber(),
            'kali_obat' => $this->faker->randomFloat(0, 0, 9999999999.),
            'coa_id' => $this->faker->randomNumber(),
            'kata_kunci' => $this->faker->word,
            'aktif' => $this->faker->numberBetween(-8, 8),
            'pelunasan_transfer' => $this->faker->numberBetween(-8, 8),
            'tenant_id' => $this->faker->randomNumber(),
        ];
    }
}
