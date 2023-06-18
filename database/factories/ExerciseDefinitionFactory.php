<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExerciseDefinitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // lexify returns a character of the alphabet por each "?"
            'name' => $this->faker->lexify('exercise-?????'),
            'creator_user_id' => $this->faker->randomElement(User::all())['user_id'],
            'training_type'=> $this->faker->randomElement(['cardio','calisthenics','elastic_bands','weights','gym','mixed']),
            'difficulty'=> $this->faker->randomElement(['starters','easy','medium','hard','extreme']),
            'part_of_the_training'=> $this->faker->randomElement(['warmup','core-training','cooldown']),

            'preview_image'=> $this->faker->url(),
            'image_1'  => $this->faker->url(),
            'image_2'=> $this->faker->url(),
            'image_3'=> $this->faker->url(),
            'image_4'=> $this->faker->url(),
        ];
    }
}
