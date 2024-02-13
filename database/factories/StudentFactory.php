<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{

    public function definition(): array
    {
        return [
          'name'=> fake()->name(),
          'age'=> fake()->numberBetween(15,20),
          'email'=> fake()->email(),
          'address'=> fake()->address(),
          'city'=> fake()->city(),
          'phone'=> fake()->phoneNumber(),
          'password'=> fake()->password(),
        ];
    }
}
