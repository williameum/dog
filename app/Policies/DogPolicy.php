<?php

namespace App\Policies;

use App\Dog;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class DogPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any dogs.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the dog.
     *
     * @param  \App\User  $user
     * @param  \App\Dog  $dog
     * @return mixed
     */
    public function view(User $user, Dog $dog)
    {
        return $user->id == $dog->user_id;
    }

    /**
     * Determine whether the user can create dogs.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the dog.
     *
     * @param  \App\User  $user
     * @param  \App\Dog  $dog
     * @return mixed
     */
    public function update(User $user, Dog $dog)
    {
        //
    }

    /**
     * Determine whether the user can delete the dog.
     *
     * @param  \App\User  $user
     * @param  \App\Dog  $dog
     * @return mixed
     */
    public function delete(User $user, Dog $dog)
    {
        //
    }

    /**
     * Determine whether the user can restore the dog.
     *
     * @param  \App\User  $user
     * @param  \App\Dog  $dog
     * @return mixed
     */
    public function restore(User $user, Dog $dog)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the dog.
     *
     * @param  \App\User  $user
     * @param  \App\Dog  $dog
     * @return mixed
     */
    public function forceDelete(User $user, Dog $dog)
    {
        //
    }
}
