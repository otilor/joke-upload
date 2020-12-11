<?php

namespace Database\Factories;

use App\Models\Joke;
use Illuminate\Database\Eloquent\Factories\Factory;

class JokeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Joke::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author' => $this->faker->name,
            'joke' => $this->faker->sentence,
        ];
    }
}
