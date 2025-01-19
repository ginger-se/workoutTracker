<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MuscleGroup extends Model
{
    /** @use HasFactory<\Database\Factories\MuscleGroupFactory> */
    use HasFactory;
    protected $gaurded = [];

    public function excersises(): HasMany{
        return $this->hasMany(Excersise::class);
    }
}
