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
            //done
            $table->id('user_tracked_exercises_id')->unique();
            $table->id('training_id');
            $table->id('user_id');
            $table->id('exercise_id');
            $table->tinyInteger('total_repetitions_goal')->unsigned();
            $table->tinyInteger('total_repetitions_achieved')->unsigned()->nullable();
            $table->tinyInteger('series_goal')->unsigned();
            $table->tinyInteger('series_achieved')->unsigned()->nullable();
            $table->tinyInteger('weights_lifted_at_series_1')->unsigned()->nullable();
            $table->tinyInteger('weights_lifted_at_series_2')->unsigned()->nullable();
            $table->tinyInteger('weights_lifted_at_series_3')->unsigned()->nullable();
            $table->tinyInteger('weights_lifted_at_series_4')->unsigned()->nullable();
            $table->tinyInteger('weights_lifted_at_series_5')->unsigned()->nullable();
            $table->tinyInteger('weights_lifted_at_series_6')->unsigned()->nullable();
            $table->timestamp('time_spent_at_series_1')->nullable();
            $table->timestamp('time_spent_at_series_2')->nullable();
            $table->timestamp('time_spent_at_series_3')->nullable();
            $table->timestamp('time_spent_at_series_4')->nullable();
            $table->timestamp('time_spent_at_series_5')->nullable();
            $table->timestamp('time_spent_at_series_6')->nullable();
            $table->tinyText('rest_times_between_series');
            $table->enum('exercise_progress_status',["backwards","remain_same","progressed"]);
            $table->timestamp('created_at');
            $table->timestamp('modified_at');
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
