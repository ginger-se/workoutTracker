<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserExercise extends Model {
  /** @use HasFactory<\Database\Factories\UserExerciseFactory> */
  use HasFactory;

  public function user(): BelongsTo {
    return $this->belongsTo(User::class);
  }

  public function exercise(): HasOne {
    return $this->hasOne(Exercise::class);
  }
}
