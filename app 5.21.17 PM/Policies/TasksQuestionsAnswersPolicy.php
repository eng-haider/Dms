<?php

namespace App\Policies;

use App\TasksQuestionsAnswers;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TasksQuestionsAnswersPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any tasksQuestionsAnswers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the tasksQuestionsAnswers.
     *
     * @param  \App\User  $user
     * @param  \App\TasksQuestionsAnswers  $tasksQuestionsAnswers
     * @return mixed
     */
    public function view(User $user, TasksQuestionsAnswers $tasksQuestionsAnswers)
    {
        //
    }

    /**
     * Determine whether the user can create tasksQuestionsAnswers.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the tasksQuestionsAnswers.
     *
     * @param  \App\User  $user
     * @param  \App\TasksQuestionsAnswers  $tasksQuestionsAnswers
     * @return mixed
     */
    public function update(User $user, TasksQuestionsAnswers $tasksQuestionsAnswers)
    {
        //
    }

    /**
     * Determine whether the user can delete the tasksQuestionsAnswers.
     *
     * @param  \App\User  $user
     * @param  \App\TasksQuestionsAnswers  $tasksQuestionsAnswers
     * @return mixed
     */
    public function delete(User $user, TasksQuestionsAnswers $tasksQuestionsAnswers)
    {
        //
    }

    /**
     * Determine whether the user can restore the tasksQuestionsAnswers.
     *
     * @param  \App\User  $user
     * @param  \App\TasksQuestionsAnswers  $tasksQuestionsAnswers
     * @return mixed
     */
    public function restore(User $user, TasksQuestionsAnswers $tasksQuestionsAnswers)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the tasksQuestionsAnswers.
     *
     * @param  \App\User  $user
     * @param  \App\TasksQuestionsAnswers  $tasksQuestionsAnswers
     * @return mixed
     */
    public function forceDelete(User $user, TasksQuestionsAnswers $tasksQuestionsAnswers)
    {
        //
    }
}
