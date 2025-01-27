<?php

namespace App\Policies;

use App\Models\Mezocycle;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class MezocyclePolicy {
  /**
   * Determine whether the user can view any models.
   */
  public function viewAny(User $user): bool {
    return true;
  }

  /**
   * Determine whether the user can view the model.
   */
  public function view(User $user, Mezocycle $mezocycle): bool {
    return $this->isUserOwner($user, $mezocycle);
  }

  /**
   * Determine whether the user can create models.
   */
  public function create(User $user): bool {
    return true;
  }

  /**
   * Determine whether the user can update the model.
   */
  public function update(User $user, Mezocycle $mezocycle): bool {
    return $this->isUserOwner($user, $mezocycle);
  }

  /**
   * Determine whether the user can delete the model.
   */
  public function delete(User $user, Mezocycle $mezocycle): bool {
    return $this->isUserOwner($user, $mezocycle);
  }

  /**
   * Check if the user is the owner of the Mezocycle.
   */
  private function isUserOwner(User $user, Mezocycle $mezocycle): bool {
    return $user->id === $mezocycle->user_id;
  }
}
