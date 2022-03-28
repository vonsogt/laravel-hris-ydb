<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Decree>
 */
class DecreeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'employee_id' => $this->faker->numberBetween(1, Employee::count()),
            'year' => $this->faker->year(),
            'number' => $this->faker->numberBetween(1, 999) . '/YDB-SK/XII/2022',
        ];
    }
}
