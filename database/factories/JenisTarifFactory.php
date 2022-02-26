<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\JenisTarif;

class JenisTarifFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JenisTarif::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'jenis_tarif' => $this->faker->word,
            'coa_id' => $this->faker->randomNumber(),
            'tenant_id' => $this->faker->randomNumber(),
        ];
    }
}
