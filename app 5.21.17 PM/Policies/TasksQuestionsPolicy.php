<?php

namespace App\Policies;

use App\TasksQuestions;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TasksQuestionsPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any tasksQuestions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the tasksQuestions.
     *
     * @param  \App\User  $user
     * @param  \App\TasksQuestions  $tasksQuestions
     * @return mixed
     */
    public function view(User $user, TasksQuestions $tasksQuestions)
    {
        //
    }

    /**
     * Determine whether the user can create tasksQuestions.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the tasksQuestions.
     *
     * @param  \App\User  $user
     * @param  \App\TasksQuestions  $tasksQuestions
     * @return mixed
     */
    public function update(User $user, TasksQuestions $tasksQuestions)
    {
        //
    }

    /**
     * Determine whether the user can delete the tasksQuestions.
     *
     * @param  \App\User  $user
     * @param  \App\TasksQuestions  $tasksQuestions
     * @return mixed
     */
    public function delete(User $user, TasksQuestions $tasksQuestions)
    {
        //
    }

    /**
     * Determine whether the user can restore the tasksQuestions.
     *
     * @param  \App\User  $user
     * @param  \App\TasksQuestions  $tasksQuestions
     * @return mixed
     */
    public function restore(User $user, TasksQuestions $tasksQuestions)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the tasksQuestions.
     *
     * @param  \App\User  $user
     * @param  \App\TasksQuestions  $tasksQuestions
     * @return mixed
     */
    public function forceDelete(User $user, TasksQuestions $tasksQuestions)
    {
        //
    }
}
