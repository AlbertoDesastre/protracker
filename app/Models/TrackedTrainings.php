<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\UserTrackedExercise;

class TrackedTrainings extends Model
{
    use HasFactory;

    function user()
    {
      return $this->belongsTo(User::class);
    }

    function userTrackedExercise()
    {
      return $this->belongsTo(UserTrackedExercise::class);
    }
}
