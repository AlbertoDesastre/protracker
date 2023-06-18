<?php

namespace Database\Factories;

use App\Models\ExerciseDefinition;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExerciseReplacementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'exercise_id' => $this->faker->randomElement(ExerciseDefinition::all())['exercise_id'],

            'name' => $this->faker->lexify('exercise-?????'),
            'how_hard_it_is_compared_to_original_exercise' => $this->faker->randomElement(['slightly easier','easier', 'way easier','basic form']),
            'preview_image' => $this->faker->url(),
            'image_1' => $this->faker->url(),
            'image_2' => $this->faker->url(),
            'image_3' => $this->faker->url(),
            'image_4' => $this->faker->url(),
        ];
    }
}
