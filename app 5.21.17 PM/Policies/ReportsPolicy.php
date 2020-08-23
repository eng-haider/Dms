<?php

namespace App\Policies;

use App\Reports;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReportsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any reports.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the reports.
     *
     * @param  \App\User  $user
     * @param  \App\Reports  $reports
     * @return mixed
     */
    public function view(User $user, Reports $reports)
    {
        //
    }

    /**
     * Determine whether the user can create reports.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the reports.
     *
     * @param  \App\User  $user
     * @param  \App\Reports  $reports
     * @return mixed
     */
    public function update(User $user, Reports $reports)
    {
        //
    }

    /**
     * Determine whether the user can delete the reports.
     *
     * @param  \App\User  $user
     * @param  \App\Reports  $reports
     * @return mixed
     */
    public function delete(User $user, Reports $reports)
    {
        //
    }

    /**
     * Determine whether the user can restore the reports.
     *
     * @param  \App\User  $user
     * @param  \App\Reports  $reports
     * @return mixed
     */
    public function restore(User $user, Reports $reports)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the reports.
     *
     * @param  \App\User  $user
     * @param  \App\Reports  $reports
     * @return mixed
     */
    public function forceDelete(User $user, Reports $reports)
    {
        //
    }
}
