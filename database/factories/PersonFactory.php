<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Person>
 */
class PersonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'surname' => $this->faker->lastName,
            'department_id' => $this->faker->randomDigit,
            'post' => $this->faker->company,
            'email' => $this->faker->email,
            'password' => $this->faker->password
        ];
    }
}
