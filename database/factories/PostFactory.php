<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_id' => rand(1, 10),
            'title' => $this->faker->realText(rand(25, 30)),
            'body' => $this->faker->realText(rand(200, 500)),
            'created_at' => $this->faker->dateTimeBetween('-30 days', '-10 days'),
            'updated_at' => $this->faker->dateTimeBetween('-30 days', '-1 days'),
        ];
    }
}
