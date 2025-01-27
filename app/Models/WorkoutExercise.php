<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WorkoutExercise extends Model {
  /** @use HasFactory<\Database\Factories\WorkoutExerciseFactory> */
  use HasFactory;

  // protected $with = ["workout", "exercise", "sets"];

  public function workout(): BelongsTo {
    return $this->belongsTo(Workout::class);
  }

  public function sets(): HasMany {
    return $this->hasMany(Set::class);
  }
  public function exercise(): BelongsTo {
    return $this->belongsTo(Exercise::class);
  }
}
