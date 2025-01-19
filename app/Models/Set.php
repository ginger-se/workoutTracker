<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Set extends Model
{
    /** @use HasFactory<\Database\Factories\SetsFactory> */
    use HasFactory;

    public function workoutExcersise(): BelongsTo{
        return $this->belongsTo(WorkoutExcersise::class);
    }

    public function setType(): BelongsTo{
        return $this->belongsTo(SetType::class);
    }
}
