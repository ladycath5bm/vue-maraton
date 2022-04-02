<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class TodoFactory extends Factory
{
    public function definition(): Array
    {
        return [
            'title' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
        ];
    }
}
