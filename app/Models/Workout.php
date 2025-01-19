<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Workout extends Model {
  /** @use HasFactory<\Database\Factories\WorkoutFactory> */
  use HasFactory;
  protected $guarded = [];

  public function workoutExcersises(): HasMany {
    return $this->hasMany(WorkoutExcersise::class);
  }

  public function mezocycle(): BelongsTo {
    return $this->belongsTo(Mezocycle::class);
  }
}
