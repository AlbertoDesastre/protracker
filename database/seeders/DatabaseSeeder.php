<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(10)->create();
        \App\Models\ExerciseDefinition::factory(30)->create();
        \App\Models\UserTrackedExercise::factory(20)->create();
        \App\Models\UserTrainingDefinition::factory(5)->create();
        \App\Models\ExerciseReplacement::factory(10)->create();
        \App\Models\TrackedTrainings::factory(10)->create();
    }
}
