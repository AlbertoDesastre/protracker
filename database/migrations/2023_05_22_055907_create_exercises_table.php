<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercises_definition', function (Blueprint $table) {
             //done
            $table->id('exercise_id')->unique();
            $table->id('user_id')->unique();
            $table->tinyText('name')->unique();
            $table->enum('training_type', ['calisthenics','elastic_bands','weights','gym','mixed']);
            $table->enum('difficulty', ['starters','easy','medium','hard','extreme']);
            $table->enum('part_of_the_training', ['warmup','core-training','cooldown']);
            $table->text('preview_image');
            $table->text('image_1');
            $table->text('image_2');
            $table->text('image_3');
            $table->text('image_4');
            $table->timestamp('created_at');
            $table->timestamp('modified_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercises');
    }
}
