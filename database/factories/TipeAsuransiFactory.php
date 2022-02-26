<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\TipeAsuransi;

class TipeAsuransiFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TipeAsuransi::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipe_asuransi' => $this->faker->word,
            'keterangan' => $this->faker->word,
            'tenant_id' => $this->faker->randomNumber(),
        ];
    }
}
