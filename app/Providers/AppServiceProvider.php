<?php

namespace App\Providers;

use App\Models\Mezocycle;
use App\Policies\MezocyclePolicy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
  /**
   * Register any application services.
   */
  public function register(): void {
    //
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void {
    Vite::prefetch(concurrency: 3);
    Model::unguard();
    Model::preventLazyLoading();

    Gate::policy(Mezocycle::class, MezocyclePolicy::class);
  }
}
