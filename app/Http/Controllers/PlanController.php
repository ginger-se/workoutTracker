<?php

namespace App\Http\Controllers;

use App\Models\Mezocycle;
use App\Models\MezocycleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller {
  public function index() {
    return inertia('Plans/Index', [
      'plans' => Mezocycle::with('type')->where('user_id', Auth::id())->get(),
    ]);
  }

  public function create() {
    return inertia('Plans/Create', [
      'types' => MezocycleType::all(),
    ]);
  }
  public function store() {

    return redirect('Plans/{id}/edit', []);
  }
}
