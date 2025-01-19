<?php

use App\Models\MuscleGroup;
use App\Models\Routine;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  /**
   * Run the migrations.
   */
  public function up(): void {
    Schema::create('exercises', function (Blueprint $table) {
      $table->foreignIdFor(MuscleGroup::class);
      $table->foreignIdFor(Routine::class);
      $table->id();
      $table->string('name');
      $table->string('description');
      $table->string('tips');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void {
    Schema::dropIfExists('exercises');
  }
};
