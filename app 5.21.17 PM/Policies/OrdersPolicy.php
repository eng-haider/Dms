<?php

namespace App\Policies;

use App\Orders;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrdersPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any orders.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the orders.
     *
     * @param  \App\User  $user
     * @param  \App\Orders  $orders
     * @return mixed
     */
    public function view(User $user, Orders $orders)
    {
        //
    }

    /**
     * Determine whether the user can create orders.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the orders.
     *
     * @param  \App\User  $user
     * @param  \App\Orders  $orders
     * @return mixed
     */
    public function update(User $user, Orders $orders)
    {
        //
    }

    /**
     * Determine whether the user can delete the orders.
     *
     * @param  \App\User  $user
     * @param  \App\Orders  $orders
     * @return mixed
     */
    public function delete(User $user, Orders $orders)
    {
        //
    }

    /**
     * Determine whether the user can restore the orders.
     *
     * @param  \App\User  $user
     * @param  \App\Orders  $orders
     * @return mixed
     */
    public function restore(User $user, Orders $orders)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the orders.
     *
     * @param  \App\User  $user
     * @param  \App\Orders  $orders
     * @return mixed
     */
    public function forceDelete(User $user, Orders $orders)
    {
        //
    }
}
