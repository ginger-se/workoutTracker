<?php

use App\Models\MuscleGroup;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('excersises', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('tips');
            $table->foreignIdFor(MuscleGroup::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('excersises');
    }
};
