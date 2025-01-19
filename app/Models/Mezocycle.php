<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mezocycle extends Model {
  /** @use HasFactory<\Database\Factories\MezocycleFactory> */
  use HasFactory;

  protected $guarded = [];

  public function user(): BelongsTo {
    return $this->belongsTo(User::class);
  }
}
