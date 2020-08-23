<?php

namespace App\Policies;

use App\Statuses;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class StatusesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any statuses.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the statuses.
     *
     * @param  \App\User  $user
     * @param  \App\Statuses  $statuses
     * @return mixed
     */
    public function view(User $user, Statuses $statuses)
    {
        //
    }

    /**
     * Determine whether the user can create statuses.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the statuses.
     *
     * @param  \App\User  $user
     * @param  \App\Statuses  $statuses
     * @return mixed
     */
    public function update(User $user, Statuses $statuses)
    {
        //
    }

    /**
     * Determine whether the user can delete the statuses.
     *
     * @param  \App\User  $user
     * @param  \App\Statuses  $statuses
     * @return mixed
     */
    public function delete(User $user, Statuses $statuses)
    {
        //
    }

    /**
     * Determine whether the user can restore the statuses.
     *
     * @param  \App\User  $user
     * @param  \App\Statuses  $statuses
     * @return mixed
     */
    public function restore(User $user, Statuses $statuses)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the statuses.
     *
     * @param  \App\User  $user
     * @param  \App\Statuses  $statuses
     * @return mixed
     */
    public function forceDelete(User $user, Statuses $statuses)
    {
        //
    }
}
