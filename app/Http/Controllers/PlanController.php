<?php

namespace App\Http\Controllers;

use App\Models\Mezocycle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PlanController extends Controller {
  public function index() {
    return inertia('Plans/Index', [
      'plans' => Mezocycle::with('type')->where('user_id', Auth::id())->get(),
    ]);
  }

  public function store(){
    
    return redirect('Plans/{id}/edit', [

    ]);
  }

}
