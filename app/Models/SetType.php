<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SetType extends Model {
  /** @use HasFactory<\Database\Factories\SetTypeFactory> */
  use HasFactory;

  // protected $with = ["sets"];

  public function sets(): HasMany {
    return $this->hasMany(Set::class);
  }
}
