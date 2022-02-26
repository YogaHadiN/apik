<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Coa;

class CoaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kelompok_coa_id' => $this->faker->randomNumber(),
            'coa' => $this->faker->word,
            'saldo_awal' => $this->faker->numberBetween(-10000, 10000),
        ];
    }
}