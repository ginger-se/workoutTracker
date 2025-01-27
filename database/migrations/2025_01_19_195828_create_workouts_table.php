<?php

use App\Models\Mezocycle;
use App\Models\WorkoutType;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void {
    Schema::create('workouts', function (Blueprint $table) {
      $table->id();
      $table->date('date');
      $table->string('status');
      $table->foreignIdFor(Mezocycle::class)->constrained()->cascadeOnDelete();
      $table->foreignIdFor(WorkoutType::class);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void {
    Schema::dropIfExists('workouts');
  }
};
