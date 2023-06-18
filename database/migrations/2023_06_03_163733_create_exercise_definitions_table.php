<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExerciseDefinitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise_definitions', function (Blueprint $table) {
             $table->bigIncrements('exercise_id')->unique();
             //user that created this exercise
             $table->unsignedBigInteger('creator_user_id');
             $table->foreign('creator_user_id')->references('user_id')->on('users');

             $table->string('name', 50);
             $table->enum('training_type', ['cardio','calisthenics','elastic_bands','weights','gym','mixed']);
             $table->enum('difficulty', ['starters','easy','medium','hard','extreme']);
             $table->enum('part_of_the_training', ['warmup','core-training','cooldown']);
             $table->text('preview_image');
             $table->text('image_1')->nullable();
             $table->text('image_2')->nullable();
             $table->text('image_3')->nullable();
             $table->text('image_4')->nullable();

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
        Schema::dropIfExists('exercise_definitions');
    }
}
