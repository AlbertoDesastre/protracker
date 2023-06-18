<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\ExerciseDefinition;

class UserTrackedExerciseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->randomElement(User::all())['user_id'],
            'exercise_id' => $this->faker->randomElement(ExerciseDefinition::all())['exercise_id'],

            'total_repetitions_goal' => $this->faker->numberBetween(0,20),
            'total_repetitions_achieved' => $this->faker->numberBetween(0,20),

            'series_achieved' => $this->faker->numberBetween(0, 6),
            'weights_lifted_at_series_1' => $this->faker->numberBetween(0,200),
            'weights_lifted_at_series_2' => $this->faker->numberBetween(0,200),
            'weights_lifted_at_series_3' => $this->faker->numberBetween(0,200),
            //it's very interesting what's happening here. I make php generate a "truthy" or "falsy" value, to make a decision and give a weight lifted or not :)
            'weights_lifted_at_series_4' => rand(0,1) ? $this->faker->numberBetween(0,200) : null,
            'weights_lifted_at_series_5' => rand(0,1) ? $this->faker->numberBetween(0,200) : null,
            'weights_lifted_at_series_6' => rand(0,1) ? $this->faker->numberBetween(0,200) : null,

            'time_spent_at_series_1' => $this->faker->randomNumber(2, false),
            'time_spent_at_series_2' => $this->faker->randomNumber(2, false),
            'time_spent_at_series_3' => $this->faker->randomNumber(2, false),
            'time_spent_at_series_4' => $this->faker->randomNumber(2, false),
            'time_spent_at_series_5' => $this->faker->randomNumber(2, false),
            'time_spent_at_series_6' => $this->faker->randomNumber(2, false),
            'rest_times_between_series' => $this->faker->randomNumber(3, false),

            'exercise_progress_status' => $this->faker->randomElement(["downgrade","stays","progresses"])
        ];
    }
}
