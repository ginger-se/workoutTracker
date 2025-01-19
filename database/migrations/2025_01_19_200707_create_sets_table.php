<?php

use App\Models\SetType;
use App\Models\WorkoutExercise;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void {
    Schema::create('sets', function (Blueprint $table) {
      $table->id();
      $table->int('reps');
      $table->int('weight');
      $table->foreignIdFor(SetType::class);
      $table->foreignIdFor(WorkoutExercise::class);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void {
    Schema::dropIfExists('sets');
  }
};
