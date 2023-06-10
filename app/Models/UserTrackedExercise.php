<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\ExerciseDefinition;

class UserTrackedExercise extends Model
{
    use HasFactory;
    // Since the name I specified was "userS_tracked_exercises" I have to explicitly tell Laravel what table it's looking for.
    // By convention, Laravel looks at the name of this Model and add the plural at the end when looking to seed this table ;)
    protected $table = "users_tracked_exercises";

    function user()
    {
     return $this->belongsTo(User::class);
    }
    function exercise()
    {
     return $this->belongsTo(ExerciseDefinition::class);
    }
}
