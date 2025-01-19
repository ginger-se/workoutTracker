<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MezocycleType extends Model {
  /** @use HasFactory<\Database\Factories\MezocycleTypeFactory> */
  use HasFactory;

  public function mezocycles(): HasMany {
    return $this->hasMany(Mezocycle::class);
  }
}
