<?php

namespace App\Policies;

use App\Images;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ImagesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any images.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the images.
     *
     * @param  \App\User  $user
     * @param  \App\Images  $images
     * @return mixed
     */
    public function view(User $user, Images $images)
    {
        //
    }

    /**
     * Determine whether the user can create images.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the images.
     *
     * @param  \App\User  $user
     * @param  \App\Images  $images
     * @return mixed
     */
    public function update(User $user, Images $images)
    {
        //
    }

    /**
     * Determine whether the user can delete the images.
     *
     * @param  \App\User  $user
     * @param  \App\Images  $images
     * @return mixed
     */
    public function delete(User $user, Images $images)
    {
        //
    }

    /**
     * Determine whether the user can restore the images.
     *
     * @param  \App\User  $user
     * @param  \App\Images  $images
     * @return mixed
     */
    public function restore(User $user, Images $images)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the images.
     *
     * @param  \App\User  $user
     * @param  \App\Images  $images
     * @return mixed
     */
    public function forceDelete(User $user, Images $images)
    {
        //
    }
}
