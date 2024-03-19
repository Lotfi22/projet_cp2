<?php

namespace Database\Factories;

use App\Models\Groupe;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class GroupeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Groupe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->name,
        'id_coach' => function () {
            return \App\Models\Coach::inRandomOrder()->first()->id;
        },
        'id_sport' => function () {
            return \App\Models\Sport::inRandomOrder()->first()->id;
        },
        'id_abonnement' => function () {
            return \App\Models\Abonnement::inRandomOrder()->first()->id;
        },
        'capacite' => $this->faker->numberBetween(10, 50),
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
