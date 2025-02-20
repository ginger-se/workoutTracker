<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class WorkoutType extends Model {
  /** @use HasFactory<\Database\Factories\TypeFactory> */
  use HasFactory;
  protected $gaurded = [];

  // protected $with = ["muscleGroups"];

  public function muscleGroups(): HasMany {
    return $this->hasMany(MuscleGroup::class);
  }
}
