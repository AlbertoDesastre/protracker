<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExercisesDefinitionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lexify('exercise-?????'),
            'creator_user_id' => $this->faker->randomElement(User::all())['user_id'],
            'training_type'=> $this->faker->randomElement(['cardio','calisthenics','elastic_bands','weights','gym','mixed']),
            'difficulty'=> $this->faker->randomElement(['starters','easy','medium','hard','extreme']),
            'part_of_the_training'=> $this->faker->randomElement(['warmup','core-training','cooldown']),
            'preview_image'=> $this->faker->url(),
            'image1'  => $this->faker->url(),
            'image2'=> $this->faker->url(),
            'image3'=> $this->faker->url(),
            'image4'=> $this->faker->url(),

            'creation_date'=>now(),
            'modification_date'=>now()
        ];
    }
}
