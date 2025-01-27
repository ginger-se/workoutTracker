<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;

class WorkoutController extends Controller {
  public function edit(Workout $workout) {
    return inertia('Workouts/Edit', [
      'workout' => $workout,
    ]);
  }
}
