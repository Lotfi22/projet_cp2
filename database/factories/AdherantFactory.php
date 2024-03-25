<?php

namespace Database\Factories;

use App\Models\Coach;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AdherantFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Adherant::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'prenom' => $this->faker->name(),
            'date_naissance' => $this->faker->dateTime($max = 'now', $timezone = null),
            'id_qr' => function () {
                return \App\Models\Qr::inRandomOrder()->first()->id;
            },
            'genre' => $this->faker->numberBetween(1,100),
            'num_tel' => $this->faker->phoneNumber(),
            'num_tel_urgence' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'adresse' => $this->faker->address(),
            'type_abonnement' => $this->faker->text($maxNbChars = 200),
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
