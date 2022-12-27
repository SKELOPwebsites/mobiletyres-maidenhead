<?php

namespace Database\Factories;

use App\Models\Timeslot;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'timeslot_id' => Timeslot::factory(1)->create()->get('id'),
            'firstname' => $this->faker->firstName(),
            'lastname' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => $this->faker->phoneNumber(),
            'registration' => "LP15 WOY",
            'address_1' => $this->faker->streetAddress(),
            'address_2' => $this->faker->streetAddress(),
            'town' => $this->faker->city(),
            'postcode' => $this->faker->postcode(),
            'fitting_address_1' => $this->faker->streetAddress(),
            'fitting_address_2' => $this->faker->streetAddress(),
            'fitting_town' => $this->faker->city(),
            'fitting_postcode' => $this->faker->postcode(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
