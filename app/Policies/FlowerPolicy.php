<?php

namespace App\Policies;

use App\User;
use App\Flower;

use Illuminate\Auth\Access\HandlesAuthorization;

class FlowerPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


     /**
     * Determine if the given user can delete the given flower.
     *
     * @param  User  $user
     * @param  Flower  $flower
     * @return bool
     */
    public function destroy(User $user, Flower $flower)
    {
        return $user->id === $flower->user_id;
    }
}
