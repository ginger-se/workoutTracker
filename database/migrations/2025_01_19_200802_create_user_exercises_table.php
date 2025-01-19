<?php

use App\Models\Exercise;
use App\Models\User;
use App\Models\WorkoutExercise;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void {
    Schema::create('user_exercises', function (Blueprint $table) {
      $table->id();
      $table->int('oneRepMax');
      $table->int('tenRepMax');
      $table->foreignIdFor(Exercise::class);
      $table->foreignIdFor(User::class);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void {
    Schema::dropIfExists('user_exercises');
  }
};
