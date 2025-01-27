<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Routine extends Model {
  /** @use HasFactory<\Database\Factories\RoutineFactory> */
  use HasFactory;

  protected $with = ["type"];

  public function user(): BelongsTo {
    return $this->belongsTo(User::class);
  }

  public function type(): BelongsTo {
    return $this->belongsTo(WorkoutType::class, "workout_type_id");
  }

  public function exercises(): HasMany {
    return $this->hasMany(Exercise::class);
  }
}
