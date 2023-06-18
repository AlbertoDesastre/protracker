<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ExerciseDefinition;

class UserTrainingDefinitionFactory extends Factory

{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'exercises_definition_id_1' => $this->faker->randomElement(ExerciseDefinition::all())['exercise_id'],
            'exercises_definition_id_2' => $this->faker->randomElement(ExerciseDefinition::all())['exercise_id'],
            'exercises_definition_id_3' => $this->faker->randomElement(ExerciseDefinition::all())['exercise_id'],
            'exercises_definition_id_4' => $this->faker->randomElement(ExerciseDefinition::all())['exercise_id'],
            'exercises_definition_id_5' => $this->faker->randomElement(ExerciseDefinition::all())['exercise_id'],
            'exercises_definition_id_6' => $this->faker->randomElement(ExerciseDefinition::all())['exercise_id'],
            'exercises_definition_id_7' => $this->faker->randomElement(ExerciseDefinition::all())['exercise_id'],
            'exercises_definition_id_8' => $this->faker->randomElement(ExerciseDefinition::all())['exercise_id'],
            'exercises_definition_id_9' => $this->faker->randomElement(ExerciseDefinition::all())['exercise_id'],
            'exercises_definition_id_10' => $this->faker->randomElement(ExerciseDefinition::all())['exercise_id'],
            'exercises_definition_id_11' => $this->faker->randomElement(ExerciseDefinition::all())['exercise_id'],
            'exercises_definition_id_12' => $this->faker->randomElement(ExerciseDefinition::all())['exercise_id'],
            'exercises_definition_id_13' => $this->faker->randomElement(ExerciseDefinition::all())['exercise_id'],
            'exercises_definition_id_14' => $this->faker->randomElement(ExerciseDefinition::all())['exercise_id'],
            'exercises_definition_id_15' => $this->faker->randomElement(ExerciseDefinition::all())['exercise_id'],


            'series_goal_for_exercise_1' => $this->faker->numberBetween(1,6),
            'series_goal_for_exercise_2' => $this->faker->numberBetween(1,6),
            'series_goal_for_exercise_3' => $this->faker->numberBetween(1,6),
            'series_goal_for_exercise_4' => $this->faker->numberBetween(1,6),
            'series_goal_for_exercise_5' => $this->faker->numberBetween(1,6),
            'series_goal_for_exercise_6' => $this->faker->numberBetween(1,6),
            'series_goal_for_exercise_7' => $this->faker->numberBetween(1,6),
            'series_goal_for_exercise_8' => $this->faker->numberBetween(1,6),
            'series_goal_for_exercise_9' => $this->faker->numberBetween(1,6),
            'series_goal_for_exercise_10' => $this->faker->numberBetween(1,6),
            'series_goal_for_exercise_11' => $this->faker->numberBetween(1,6),
            'series_goal_for_exercise_12' => $this->faker->numberBetween(1,6),
            'series_goal_for_exercise_13' => $this->faker->numberBetween(1,6),
            'series_goal_for_exercise_14' => $this->faker->numberBetween(1,6),
            'series_goal_for_exercise_15' => $this->faker->numberBetween(1,6),

            'saved' => $this->faker->boolean(),
        ];
    }
}
