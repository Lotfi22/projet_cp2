<?php

namespace Database\Factories;

use App\Models\Seance;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class SeanceFactory extends Factory
{
    /** The name of the factory's corresponding model. @var string */

    protected $model = Seance::class;

    /** Define the model's default state. @return array */

    public function definition()
    {
        return 
        [
            'heure_debut' => $this->faker->time(),
            'heure_fin' => $this->faker->time(),
            'id_groupe' => function () 
            {
               return \App\Models\Groupe::inRandomOrder()->first()->id;
            },
            'id_salle' => function () 
            {
               return \App\Models\Salle::inRandomOrder()->first()->id;
            },
        ];
    }

    /** Indicate that the model's email address should be unverified. @return \Illuminate\Database\Eloquent\Factories\Factory */

    public function unverified()
    {
        return $this->state(function (array $attributes) 
        {
            return 
            [
                'email_verified_at' => null,
            ];
        });
    }
    
}
