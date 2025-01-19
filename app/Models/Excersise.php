<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Excersise extends Model
{
    /** @use HasFactory<\Database\Factories\ExcersiseFactory> */
    use HasFactory;
    
    protected $guarded = [];

    public function muscleGroups(): BelongsTo{
        return $this->belongsTo(MuscleGroup::class);
    }
}
