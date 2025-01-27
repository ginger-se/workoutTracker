<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Workout extends Model {
  /** @use HasFactory<\Database\Factories\WorkoutFactory> */
  use HasFactory;

  // protected $with = ["workoutExercises", "mezocycle", "workoutType"];
  protected $with = ["workoutExercises", "workoutType"];

  public function workoutExercises(): HasMany {
    return $this->hasMany(WorkoutExercise::class);
  }

  public function mezocycle(): BelongsTo {
    return $this->belongsTo(Mezocycle::class);
  }

  public function workoutType(): BelongsTo {
    return $this->belongsTo(WorkoutType::class);
  }
}
