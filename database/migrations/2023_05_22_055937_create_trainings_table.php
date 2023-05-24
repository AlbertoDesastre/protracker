<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainings', function (Blueprint $table) {
            $table->id('training_id');
            $table->id('user_id');
            $table->id('user_tracked_exercises_id_1');
            $table->id('user_tracked_exercises_id_2')->nullable();
            $table->id('user_tracked_exercises_id_3')->nullable();
            $table->id('user_tracked_exercises_id_4')->nullable();
            $table->id('user_tracked_exercises_id_5')->nullable();
            $table->id('user_tracked_exercises_id_6')->nullable();
            $table->id('user_tracked_exercises_id_7')->nullable();
            $table->id('user_tracked_exercises_id_8')->nullable();
            $table->id('user_tracked_exercises_id_9')->nullable();
            $table->id('user_tracked_exercises_id_10')->nullable();
            $table->id('user_tracked_exercises_id_11')->nullable();
            $table->id('user_tracked_exercises_id_12')->nullable();
            $table->id('user_tracked_exercises_id_13')->nullable();
            $table->id('user_tracked_exercises_id_14')->nullable();
            $table->id('user_tracked_exercises_id_15')->nullable();
            $table->boolean('saved');
            $table->boolean('completed');
            $table->boolean('pending');
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
        Schema::dropIfExists('trainings');
    }
}
