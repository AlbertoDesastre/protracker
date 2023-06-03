<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExerciseReplacementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exercise_replacements', function (Blueprint $table) {
            //this table take an exercise id as a reference a provides an easir version for that exercise
            $table->bigIncrements('exercise_replacement_id')->unique();
            $table->unsignedBigInteger('exercise_id');
            $table->foreign('exercise_id')->references('exercise_id')->on('exercises_definitions');

            $table->string('name',50);
            $table->enum('how_hard_it_is_compared_to_original_exercise', ['slightly easier','easier', 'way easier','basic form']);
            $table->text('preview_image');
            $table->text('image_1');
            $table->text('image_2');
            $table->text('image_3');
            $table->text('image_4');

            $table->timestamp('creation_date')->nullable();
            $table->timestamp('modification_date')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exercise_replacements');
    }
}
