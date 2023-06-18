<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackedTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tracked_trainings', function (Blueprint $table) {
            // trainings tracked depending on user progress
            $table->bigIncrements('tracked_training_id')->unique();

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');

            $table->unsignedBigInteger('user_tracked_exercises_id_1')->nullable();
            $table->unsignedBigInteger('user_tracked_exercises_id_2')->nullable();
            $table->unsignedBigInteger('user_tracked_exercises_id_3')->nullable();
            $table->unsignedBigInteger('user_tracked_exercises_id_4')->nullable();
            $table->unsignedBigInteger('user_tracked_exercises_id_5')->nullable();
            $table->unsignedBigInteger('user_tracked_exercises_id_6')->nullable();
            $table->unsignedBigInteger('user_tracked_exercises_id_7')->nullable();
            $table->unsignedBigInteger('user_tracked_exercises_id_8')->nullable();
            $table->unsignedBigInteger('user_tracked_exercises_id_9')->nullable();
            $table->unsignedBigInteger('user_tracked_exercises_id_10')->nullable();
            $table->unsignedBigInteger('user_tracked_exercises_id_11')->nullable();
            $table->unsignedBigInteger('user_tracked_exercises_id_12')->nullable();
            $table->unsignedBigInteger('user_tracked_exercises_id_13')->nullable();
            $table->unsignedBigInteger('user_tracked_exercises_id_14')->nullable();
            $table->unsignedBigInteger('user_tracked_exercises_id_15')->nullable();


            $table->foreign('user_tracked_exercises_id_1')->references('user_tracked_exercise_id')->on('users_tracked_exercises');
            $table->foreign('user_tracked_exercises_id_2')->references('user_tracked_exercise_id')->on('users_tracked_exercises');
            $table->foreign('user_tracked_exercises_id_3')->references('user_tracked_exercise_id')->on('users_tracked_exercises');
            $table->foreign('user_tracked_exercises_id_4')->references('user_tracked_exercise_id')->on('users_tracked_exercises');
            $table->foreign('user_tracked_exercises_id_5')->references('user_tracked_exercise_id')->on('users_tracked_exercises');
            $table->foreign('user_tracked_exercises_id_6')->references('user_tracked_exercise_id')->on('users_tracked_exercises');
            $table->foreign('user_tracked_exercises_id_7')->references('user_tracked_exercise_id')->on('users_tracked_exercises');
            $table->foreign('user_tracked_exercises_id_8')->references('user_tracked_exercise_id')->on('users_tracked_exercises');
            $table->foreign('user_tracked_exercises_id_9')->references('user_tracked_exercise_id')->on('users_tracked_exercises');
            $table->foreign('user_tracked_exercises_id_10')->references('user_tracked_exercise_id')->on('users_tracked_exercises');
            $table->foreign('user_tracked_exercises_id_11')->references('user_tracked_exercise_id')->on('users_tracked_exercises');
            $table->foreign('user_tracked_exercises_id_12')->references('user_tracked_exercise_id')->on('users_tracked_exercises');
            $table->foreign('user_tracked_exercises_id_13')->references('user_tracked_exercise_id')->on('users_tracked_exercises');
            $table->foreign('user_tracked_exercises_id_14')->references('user_tracked_exercise_id')->on('users_tracked_exercises');
            $table->foreign('user_tracked_exercises_id_15')->references('user_tracked_exercise_id')->on('users_tracked_exercises');

            $table->boolean('completed');
            $table->boolean('pending');
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
        Schema::dropIfExists('tracked_trainings');
    }
}
