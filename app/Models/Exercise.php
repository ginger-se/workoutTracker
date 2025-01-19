<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Exercise extends Model {
  /** @use HasFactory<\Database\Factories\ExerciseFactory> */
  use HasFactory;

  protected $guarded = [];

  public function muscleGroups(): BelongsTo {
    return $this->belongsTo(MuscleGroup::class);
  }
}
