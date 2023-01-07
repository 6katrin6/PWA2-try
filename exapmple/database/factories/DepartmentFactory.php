<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Department>
 */
class DepartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->company(),
            'abbreviation' => fake()->stateAbbr(),
            'number_employees' => fake()->numberBetween(1, 50),
            'directory_id' => fake()->numberBetween(1, 11), // user IDs
        ];
    }
}
