<?php

namespace Database\Factories;

use App\Models\Sky_resort;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'post_title'=>$this->faker->title(),
            'post_content'=>$this->faker->paragraph(),
            'excerpt'=>$this->faker->sentence(),
            'slug'=>$this->faker->slug(),
            'sky_resort_id'=>$this->faker->numberBetween(0,10),
            'user_id'=>User::factory()
        ];
    }
}
