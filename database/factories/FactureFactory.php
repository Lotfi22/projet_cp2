<?php

namespace Database\Factories;

use App\Models\Facture;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FactureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Facture::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_gestionnaire' => function () {
                return \App\Models\Gestionnaire::inRandomOrder()->first()->id;
            },
            'ht' => $this->faker->numberBetween(1000,10000),
            'tva' => $this->faker->numberBetween(1000,10000),
            'versement' => $this->faker->numberBetween(1000,10000),
            'droit_timbre' => $this->faker->numberBetween(1000,10000),
            'etat_paiement' => Str::random(10),
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
