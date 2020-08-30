<?php

namespace App\Policies;

use App\Restaurants;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class RestaurantsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\Restaurants  $restaurants
     * @return mixed
     */
    public function view(User $user, Restaurants $restaurants)
    {
        // $userid = $restaurants->user_id;
        // return $userid === $user->id;
        // return $user->id === $restaurants->user_id;
        // return $restaurants->user->is($user);
        
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\Restaurants  $restaurants
     * @return mixed
     */
    // public function update(User $user, Restaurants $restaurants)
    // {
    //     // return $restaurants->user->is($user);
    // }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Restaurants  $restaurants
     * @return mixed
     */
    public function delete(User $user, Restaurants $restaurants)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\Restaurants  $restaurants
     * @return mixed
     */
    public function restore(User $user, Restaurants $restaurants)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\Restaurants  $restaurants
     * @return mixed
     */
    public function forceDelete(User $user, Restaurants $restaurants)
    {
        //
    }

    public function update(User $user, Restaurants $restaurants)
    {
        // $userid = $restaurants->user_id;
        // return $userid === $user->id;
        // return $user->id === $restaurants->user_id;
        return $restaurants->user->is($user);
        
    }

    public function order(User $user, Restaurants $restaurants)
    {
        
        // return $restaurants->user->is($user);

        // return $user->id != $restaurants->user_id;
        
    }



}
