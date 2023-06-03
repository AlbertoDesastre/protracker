<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTrainingsDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_trainings_definitions', function (Blueprint $table) {
             //exercises included in the training:
             $table->unsignedBigInteger('exercises_definition_id_1');
             $table->unsignedBigInteger('exercises_definition_id_2')->nullable();
             $table->unsignedBigInteger('exercises_definition_id_3')->nullable();
             $table->unsignedBigInteger('exercises_definition_id_4')->nullable();
             $table->unsignedBigInteger('exercises_definition_id_5')->nullable();
             $table->unsignedBigInteger('exercises_definition_id_6')->nullable();
             $table->unsignedBigInteger('exercises_definition_id_7')->nullable();
             $table->unsignedBigInteger('exercises_definition_id_8')->nullable();
             $table->unsignedBigInteger('exercises_definition_id_9')->nullable();
             $table->unsignedBigInteger('exercises_definition_id_10')->nullable();
             $table->unsignedBigInteger('exercises_definition_id_11')->nullable();
             $table->unsignedBigInteger('exercises_definition_id_12')->nullable();
             $table->unsignedBigInteger('exercises_definition_id_13')->nullable();
             $table->unsignedBigInteger('exercises_definition_id_14')->nullable();
             $table->unsignedBigInteger('exercises_definition_id_15')->nullable();

             $table->foreign('exercises_definition_id_1')->references('exercise_id')->on('exercise_definitions');
             $table->foreign('exercises_definition_id_2')->references('exercise_id')->on('exercise_definitions')->nullable();
             $table->foreign('exercises_definition_id_3')->references('exercise_id')->on('exercise_definitions')->nullable();
             $table->foreign('exercises_definition_id_4')->references('exercise_id')->on('exercise_definitions')->nullable();
             $table->foreign('exercises_definition_id_5')->references('exercise_id')->on('exercise_definitions')->nullable();
             $table->foreign('exercises_definition_id_6')->references('exercise_id')->on('exercise_definitions')->nullable();
             $table->foreign('exercises_definition_id_7')->references('exercise_id')->on('exercise_definitions')->nullable();
             $table->foreign('exercises_definition_id_8')->references('exercise_id')->on('exercise_definitions')->nullable();
             $table->foreign('exercises_definition_id_9')->references('exercise_id')->on('exercise_definitions')->nullable();
             $table->foreign('exercises_definition_id_10')->references('exercise_id')->on('exercise_definitions')->nullable();
             $table->foreign('exercises_definition_id_11')->references('exercise_id')->on('exercise_definitions')->nullable();
             $table->foreign('exercises_definition_id_12')->references('exercise_id')->on('exercise_definitions')->nullable();
             $table->foreign('exercises_definition_id_13')->references('exercise_id')->on('exercise_definitions')->nullable();
             $table->foreign('exercises_definition_id_14')->references('exercise_id')->on('exercise_definitions')->nullable();
             $table->foreign('exercises_definition_id_15')->references('exercise_id')->on('exercise_definitions')->nullable();

             //series goal per exercise:
             $table->tinyInteger('series_goal_for_exercise_1')->unsigned();
             $table->tinyInteger('series_goal_for_exercise_2')->unsigned();
             $table->tinyInteger('series_goal_for_exercise_3')->unsigned();
             $table->tinyInteger('series_goal_for_exercise_4')->unsigned();
             $table->tinyInteger('series_goal_for_exercise_5')->unsigned();
             $table->tinyInteger('series_goal_for_exercise_6')->unsigned();
             $table->tinyInteger('series_goal_for_exercise_7')->unsigned();
             $table->tinyInteger('series_goal_for_exercise_8')->unsigned();
             $table->tinyInteger('series_goal_for_exercise_9')->unsigned();
             $table->tinyInteger('series_goal_for_exercise_10')->unsigned();
             $table->tinyInteger('series_goal_for_exercise_11')->unsigned();
             $table->tinyInteger('series_goal_for_exercise_12')->unsigned();
             $table->tinyInteger('series_goal_for_exercise_13')->unsigned();
             $table->tinyInteger('series_goal_for_exercise_14')->unsigned();
             $table->tinyInteger('series_goal_for_exercise_15')->unsigned();

             //when user wants to save this training for later
             $table->boolean('saved');
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
        Schema::dropIfExists('users_trainings_definitions');
    }
}
