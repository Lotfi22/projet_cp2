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
            'nom' => $this->faker->name(),
            'prenom' => $this->faker->name(),
            'date_naissance' => $this->faker->dateTime($max = 'now', $timezone = null),
            'email' => $this->faker->unique()->safeEmail(),
            'adress' => $this->faker->address(),
            'id_qr' => $this->faker->numberBetween(1,100),
            'genre' => $this->faker->numberBetween(1,100),
            'nbr_telephone' => $this->faker->phoneNumber(),
            'nbr_telephone_urgence' => $this->faker->phoneNumber(),
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
