<?php

namespace App\Policies;

use App\Provinces;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProvincesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any provinces.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the provinces.
     *
     * @param  \App\User  $user
     * @param  \App\Provinces  $provinces
     * @return mixed
     */
    public function view(User $user, Provinces $provinces)
    {
        //
    }

    /**
     * Determine whether the user can create provinces.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the provinces.
     *
     * @param  \App\User  $user
     * @param  \App\Provinces  $provinces
     * @return mixed
     */
    public function update(User $user, Provinces $provinces)
    {
        //
    }

    /**
     * Determine whether the user can delete the provinces.
     *
     * @param  \App\User  $user
     * @param  \App\Provinces  $provinces
     * @return mixed
     */
    public function delete(User $user, Provinces $provinces)
    {
        //
    }

    /**
     * Determine whether the user can restore the provinces.
     *
     * @param  \App\User  $user
     * @param  \App\Provinces  $provinces
     * @return mixed
     */
    public function restore(User $user, Provinces $provinces)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the provinces.
     *
     * @param  \App\User  $user
     * @param  \App\Provinces  $provinces
     * @return mixed
     */
    public function forceDelete(User $user, Provinces $provinces)
    {
        //
    }
}
