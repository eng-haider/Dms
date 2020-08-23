<?php

namespace App\Policies;

use App\Stores;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StoresPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any stores.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the stores.
     *
     * @param  \App\User  $user
     * @param  \App\Stores  $stores
     * @return mixed
     */
    public function view(User $user, Stores $stores)
    {
        //
    }

    /**
     * Determine whether the user can create stores.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the stores.
     *
     * @param  \App\User  $user
     * @param  \App\Stores  $stores
     * @return mixed
     */
    public function update(User $user, Stores $stores)
    {
        //
    }

    /**
     * Determine whether the user can delete the stores.
     *
     * @param  \App\User  $user
     * @param  \App\Stores  $stores
     * @return mixed
     */
    public function delete(User $user, Stores $stores)
    {
        //
    }

    /**
     * Determine whether the user can restore the stores.
     *
     * @param  \App\User  $user
     * @param  \App\Stores  $stores
     * @return mixed
     */
    public function restore(User $user, Stores $stores)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the stores.
     *
     * @param  \App\User  $user
     * @param  \App\Stores  $stores
     * @return mixed
     */
    public function forceDelete(User $user, Stores $stores)
    {
        //
    }
}
