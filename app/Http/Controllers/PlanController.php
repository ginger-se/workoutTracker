<?php

namespace App\Http\Controllers;

use App\Models\Mezocycle;
use App\Models\MezocycleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller {
  public function index() {
    return inertia('Plans/Index', [
      'plans' => Mezocycle::where('user_id', Auth::id())->get(),
    ]);
  }

  public function create() {
    return inertia('Plans/Create', [
      'types' => MezocycleType::all(),
    ]);
  }
  public function store() {

    $attributes = request()->validate([
      'type' => 'exists:mezocycle_types,id',
      'start_date' => 'required|date',
      'end_date' => 'required|date',
    ]);

    $mezocycle = Mezocycle::create([
      'user_id' => Auth::id(),
      'mezocycle_type_id' => $attributes['type'],
      'start_date' => $attributes['start_date'],
      'end_date' => $attributes['end_date'],
    ]);

    return redirect("/plan/{$mezocycle->id}/edit");
  }

  public function edit(Mezocycle $mezocycle) {
    $mezocycle->load(['type', 'workouts.workoutType']);

    return inertia('Plans/Edit', [
      'mezocycle' => $mezocycle,
      'types' => MezocycleType::all(),
    ]);
  }

  public function update(Mezocycle $mezocycle) {
    $attributes = request()->validate([
      'type' => 'exists:mezocycle_types,id',
      'start_date' => 'required|date',
      'end_date' => 'required|date',
    ]);
    $mezocycle->update([
      'mezocycle_type_id' => $attributes['type'],
      'start_date' => $attributes['start_date'],
      'end_date' => $attributes['end_date'],
    ]);

    return redirect()->route('plan/index');
  }

  public function destroy(Mezocycle $mezocycle) {
    $mezocycle->delete();

    return redirect()->route('plan/index');
  }
}
