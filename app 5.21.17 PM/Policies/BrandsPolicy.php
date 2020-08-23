<?php

namespace App\Policies;

use App\Brands;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BrandsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any brands.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the brands.
     *
     * @param  \App\User  $user
     * @param  \App\Brands  $brands
     * @return mixed
     */
    public function view(User $user, Brands $brands)
    {
        //
    }

    /**
     * Determine whether the user can create brands.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the brands.
     *
     * @param  \App\User  $user
     * @param  \App\Brands  $brands
     * @return mixed
     */
    public function update(User $user, Brands $brands)
    {
        //
    }

    /**
     * Determine whether the user can delete the brands.
     *
     * @param  \App\User  $user
     * @param  \App\Brands  $brands
     * @return mixed
     */
    public function delete(User $user, Brands $brands)
    {
        //
    }

    /**
     * Determine whether the user can restore the brands.
     *
     * @param  \App\User  $user
     * @param  \App\Brands  $brands
     * @return mixed
     */
    public function restore(User $user, Brands $brands)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the brands.
     *
     * @param  \App\User  $user
     * @param  \App\Brands  $brands
     * @return mixed
     */
    public function forceDelete(User $user, Brands $brands)
    {
        //
    }
}
