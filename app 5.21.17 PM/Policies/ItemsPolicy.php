<?php

namespace App\Policies;

use App\Items;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ItemsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any items.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the items.
     *
     * @param  \App\User  $user
     * @param  \App\Items  $items
     * @return mixed
     */
    public function view(User $user, Items $items)
    {
        //
    }

    /**
     * Determine whether the user can create items.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the items.
     *
     * @param  \App\User  $user
     * @param  \App\Items  $items
     * @return mixed
     */
    public function update(User $user, Items $items)
    {
        //
    }

    /**
     * Determine whether the user can delete the items.
     *
     * @param  \App\User  $user
     * @param  \App\Items  $items
     * @return mixed
     */
    public function delete(User $user, Items $items)
    {
        //
    }

    /**
     * Determine whether the user can restore the items.
     *
     * @param  \App\User  $user
     * @param  \App\Items  $items
     * @return mixed
     */
    public function restore(User $user, Items $items)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the items.
     *
     * @param  \App\User  $user
     * @param  \App\Items  $items
     * @return mixed
     */
    public function forceDelete(User $user, Items $items)
    {
        //
    }
}
