<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
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
            'post_id' => rand(1, 30),
            'body' => $this->faker->realText(rand(10, 200)),
            'created_at' => $this->faker->dateTimeBetween('-30 days', '-10 days'),
            'updated_at' => $this->faker->dateTimeBetween('-30 days', '-1 days'),
        ];
    }
}
