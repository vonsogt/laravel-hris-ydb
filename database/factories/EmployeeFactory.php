<?php

namespace Database\Factories;

use App\Enums\BloodType;
use App\Enums\Education;
use App\Enums\Gender;
use App\Models\Institution;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'institution_number' => $this->faker->unique()->numberBetween(100000000000, 900000000000),
            'id_card' => $this->faker->unique()->numberBetween(217100, 2171000),
            'education_personnel_number' => $this->faker->unique()->numberBetween(100, 500),
            'birth_place' => $this->faker->city(),
            'birth_date' => $this->faker->date(),
            'gender' => $this->faker->randomElement(Gender::asArray()),
            'education' => $this->faker->randomElement(Education::asArray()),
            'join_date' => $this->faker->date(),
            'blood_type' => $this->faker->randomElement(BloodType::asArray()),
            'institution_id' => $this->faker->numberBetween(1, Institution::count()),
            'position_id' => $this->faker->numberBetween(1, Position::count()),
            'address' => $this->faker->address(),
            'status' => Arr::random(['GTY', 'GTTY', 'PTY', 'PTTY']),
            'phone_number' => $this->faker->phoneNumber(),
            'mother_name' => $this->faker->name(),
            'partner_name' => $this->faker->name(),
            'password' => Hash::make('123456'),
        ];
    }
}
