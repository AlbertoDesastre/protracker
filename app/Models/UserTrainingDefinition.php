<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ExerciseDefinition;

class UserTrainingDefinition extends Model
{
    use HasFactory;

    protected $table = "users_trainings_definitions";

    function exercise ()
    {
        return $this->belongsTo(ExerciseDefinition::class);
    }
}
