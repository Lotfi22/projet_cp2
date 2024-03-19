<?php

namespace Database\Factories;

use App\Models\Qr;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class QrFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Qr::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        
        'img' =>$this->faker->imageUrl($width = 640, $height = 480, $category = null, $randomize = true, $word = null),
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
