<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Tarif;

class TarifFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tarif::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'jenis_tarif_id' => $this->faker->randomNumber(),
            'biaya' => $this->faker->numberBetween(-10000, 10000),
            'asuransi_id' => $this->faker->randomNumber(),
            'fee_dokter' => $this->faker->numberBetween(-10000, 10000),
            'fee_asisten_tindakan' => $this->faker->numberBetween(-10000, 10000),
            'tipe_tindakan_id' => $this->faker->randomNumber(),
            'bhp_items' => $this->faker->text,
            'tenant_id' => $this->faker->randomNumber(),
        ];
    }
}
