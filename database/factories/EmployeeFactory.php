<?php

namespace Database\Factories;

use App\Enums\BloodType;
use App\Enums\Gender;
use App\Enums\Religion;
use App\Models\Institution;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'institution_number' => $this->faker->unique()->numberBetween(100, 500),
            'id_card' => $this->faker->unique()->numberBetween(217100, 2171000),
            'education_personnel_number' => $this->faker->unique()->numberBetween(100, 500),
            'birth_place' => $this->faker->city(),
            'birth_date' => $this->faker->date(),
            'gender' => $this->faker->randomElement(Gender::asArray()),
            'religion' => $this->faker->randomElement(Religion::asArray()),
            'education' => $this->faker->name(),
            'blood_type' => $this->faker->randomElement(BloodType::asArray()),
            'instituion_id' => $this->faker->numberBetween(1, Institution::count()),
            'position_id' => $this->faker->numberBetween(1, Position::count()),
            'address' => $this->faker->address(),
            'status' => $this->faker->name(),
            'phone_number' => $this->faker->phoneNumber(),
            'mother_name' => $this->faker->name(),
            'partner_name' => $this->faker->name(),
        ];
    }
}
