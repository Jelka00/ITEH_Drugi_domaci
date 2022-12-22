<?php

namespace Database\Factories;

use App\Models\Sky_resort;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sky_resort>
 */
class SkyResortFactory extends Factory
{
    protected $model = Sky_resort::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'resort_name'=>$this->faker->word(),
            'resort_location'=>$this->faker->word(),
            'track_km'=>$this->faker->numberBetween(10,150),
            'slug'=>$this->faker->slug(),
        ];
    }
}
