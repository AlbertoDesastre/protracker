<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Models\UserTrackedExercise;

class TrackedTrainingsFactory extends Factory
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

            'user_tracked_exercises_id_1' => $this->faker->randomElement(UserTrackedExercise::all())['user_tracked_exercise_id'],
            'user_tracked_exercises_id_2' => $this->faker->randomElement(UserTrackedExercise::all())['user_tracked_exercise_id'],
            'user_tracked_exercises_id_3' => $this->faker->randomElement(UserTrackedExercise::all())['user_tracked_exercise_id'],
            'user_tracked_exercises_id_4' => $this->faker->randomElement(UserTrackedExercise::all())['user_tracked_exercise_id'],
            'user_tracked_exercises_id_5' => $this->faker->randomElement(UserTrackedExercise::all())['user_tracked_exercise_id'],
            'user_tracked_exercises_id_6' => $this->faker->randomElement(UserTrackedExercise::all())['user_tracked_exercise_id'],
            'user_tracked_exercises_id_7' => $this->faker->randomElement(UserTrackedExercise::all())['user_tracked_exercise_id'],
            'user_tracked_exercises_id_8' => $this->faker->randomElement(UserTrackedExercise::all())['user_tracked_exercise_id'],
            'user_tracked_exercises_id_9' => $this->faker->randomElement(UserTrackedExercise::all())['user_tracked_exercise_id'],
            'user_tracked_exercises_id_10' => $this->faker->randomElement(UserTrackedExercise::all())['user_tracked_exercise_id'],
            'user_tracked_exercises_id_11' => $this->faker->randomElement(UserTrackedExercise::all())['user_tracked_exercise_id'],
            'user_tracked_exercises_id_12' => $this->faker->randomElement(UserTrackedExercise::all())['user_tracked_exercise_id'],
            'user_tracked_exercises_id_13' => $this->faker->randomElement(UserTrackedExercise::all())['user_tracked_exercise_id'],
            'user_tracked_exercises_id_14' => $this->faker->randomElement(UserTrackedExercise::all())['user_tracked_exercise_id'],
            'user_tracked_exercises_id_15' => $this->faker->randomElement(UserTrackedExercise::all())['user_tracked_exercise_id'],

            'completed' => $this->faker->boolean(),
            'pending' => $this->faker->boolean(),
        ];
    }
}
