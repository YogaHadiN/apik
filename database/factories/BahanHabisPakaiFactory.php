<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\BahanHabisPakai;

class BahanHabisPakaiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BahanHabisPakai::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'merek_id' => $this->faker->randomNumber(),
            'jumlah' => $this->faker->numberBetween(-10000, 10000),
            'jenis_tarif_id' => $this->faker->randomNumber(),
            'tenant_id' => $this->faker->randomNumber(),
        ];
    }
}
