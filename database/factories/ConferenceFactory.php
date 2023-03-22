<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Utils\Utils;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Conference>
 */
class ConferenceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $countries = Utils::getCountries();
        $len = count($countries);
        return [
            'title' => fake()->sentence(),
            'date' => fake()->date(),
            'time' => fake()->time('H:m'),
            'latitude' => rand(1,20),
            'longtitude' => rand(1,20),
            'country' => $countries[rand(0, $len-1)]
        ];
    }
}
