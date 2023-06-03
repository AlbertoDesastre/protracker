<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTrackedExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_tracked_exercises', function (Blueprint $table) {
            $table->bigIncrements('user_tracked_exercise_id')->unique();

            //this is the tracked exercises for a specific users, on a specific training
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->unsignedBigInteger('exercise_id');
            $table->foreign('exercise_id')->references('exercise_id')->on('exercise_definitions');

            $table->tinyInteger('total_repetitions_goal')->unsigned();
            $table->tinyInteger('total_repetitions_achieved')->unsigned()->nullable();

            //series_goal is not included here since it's already on the table 'trainings_definition', and I don't want to create a column each time for this tracked exercise
            $table->tinyInteger('series_achieved')->unsigned()->nullable();
            $table->tinyInteger('weights_lifted_at_series_1')->unsigned()->nullable();
            $table->tinyInteger('weights_lifted_at_series_2')->unsigned()->nullable();
            $table->tinyInteger('weights_lifted_at_series_3')->unsigned()->nullable();
            $table->tinyInteger('weights_lifted_at_series_4')->unsigned()->nullable();
            $table->tinyInteger('weights_lifted_at_series_5')->unsigned()->nullable();
            $table->tinyInteger('weights_lifted_at_series_6')->unsigned()->nullable();

            $table->timestamp('time_spent_at_series_1');
            $table->timestamp('time_spent_at_series_2')->nullable();
            $table->timestamp('time_spent_at_series_3')->nullable();
            $table->timestamp('time_spent_at_series_4')->nullable();
            $table->timestamp('time_spent_at_series_5')->nullable();
            $table->timestamp('time_spent_at_series_6')->nullable();
            $table->tinyText('rest_times_between_series');

            $table->enum('exercise_progress_status',["downgrade","stays","progresses"]);

            $table->timestamp('creation_date')->nullable();
            $table->timestamp('modification_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_tracked_exercises');
    }
}
