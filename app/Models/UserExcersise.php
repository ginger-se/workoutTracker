<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UserExcersise extends Model
{
    /** @use HasFactory<\Database\Factories\UserExcersiseFactory> */
    use HasFactory;
    
    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    public function excersise(): HasOne{
        return $this->hasOne(Excersise::class);
    }

}
