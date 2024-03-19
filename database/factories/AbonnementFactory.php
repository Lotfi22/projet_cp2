<?php

namespace Database\Factories;

use App\Models\Abonnement;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AbonnementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Abonnement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type_abonnement' => $this->faker->name(),
            'nbr_seances' =>  $this->faker->numberBetween(1, 50),
            'tarif' =>  $this->faker->numberBetween(500, 10000),
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
