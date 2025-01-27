<?php

namespace App\Http\Controllers;

use App\Models\Mezocycle;
use App\Models\Workout;
use App\Models\WorkoutType;
use Illuminate\Http\Request;

class WorkoutController extends Controller {
  public function create() {
    return inertia('Workouts/Create', [
      'types' => WorkoutType::all(),
    ]);
  }
  public function edit(Workout $workout) {
    return inertia('Workouts/Edit', [
      'workout' => $workout,
      'types' => WorkoutType::all(),
    ]);
  }
  public function update(Workout $workout) {
    request()->validate([
      'date' => 'required|date',
      'status' => 'required|string',
      'type' => 'required|exists:workout_types,id',
    ]);
    $workout->update([
      'date' => request()->date,
      'status' => request()->status,
      'workout_type_id' => request()->type,
    ]);

    return redirect()->route('plan/edit', ['mezocycle' => $workout->mezocycle->id]);
  }
  public function delete(Workout $workout) {
    return inertia('Workouts/Edit', [
      'workout' => $workout,
      'types' => WorkoutType::all(),
    ]);
  }
}
