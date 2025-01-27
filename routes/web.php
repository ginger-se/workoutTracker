<?php

use App\Http\Controllers\PlanController;
use App\Http\Controllers\ProfileController;
use App\Models\Mezocycle;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
  return Inertia::render('Welcome', [
    'canLogin' => Route::has('login'),
    'canRegister' => Route::has('register'),
    'laravelVersion' => Application::VERSION,
    'phpVersion' => PHP_VERSION,
  ]);
});

Route::get('/dashboard', function () {
  return Inertia::render('Dashboard', [
    'mezocycles' => Mezocycle::with('type')->where('user_id', Auth::id())->get(),
  ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
  Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
  Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

  Route::get('/plan', [PlanController::class, 'index'])->can("viewAny", Mezocycle::class)->name('plan/index');
  Route::get('/plan/create', [PlanController::class, 'create'])->can("create", Mezocycle::class)->name('plan/create');
  Route::post('/plan', [PlanController::class, 'store'])->can("create", Mezocycle::class)->name('plan/store');
  Route::get('/plan/{mezocycle}/edit', [PlanController::class, 'edit'])->can("view", "mezocycle")->name('plan/edit');
  Route::patch('/plan/{mezocycle}', [PlanController::class, 'update'])->can("update", "mezocycle")->name('plan/update');
  Route::delete('/plan/{mezocycle}', [PlanController::class, 'destroy'])->can("delete", "mezocycle")->name('plan/destroy');
});


require __DIR__ . '/auth.php';
