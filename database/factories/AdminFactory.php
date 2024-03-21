<?php

namespace Database\Factories;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdminFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Admin::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->unique()->safeEmail(),
            'password' => '$2y$10$YF3cyp8AT2QaaqFeu7TNtumX4omFkUOImVsVyMiud4a5Gi/cjaaqa',
            'adresse' => $this->faker->address(),
            'id_qr' => function () {
                return \App\Models\Qr::inRandomOrder()->first()->id;
            },
            'genre' => $this->faker->numberBetween(1,100),
            'num_telephone' => $this->faker->phoneNumber(),
            'num_urgence' => $this->faker->phoneNumber(),
            'nom' => $this->faker->name(),
            'prenom' => $this->faker->name(),
            'date_naissance' => $this->faker->dateTime($max = 'now', $timezone = null),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
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
