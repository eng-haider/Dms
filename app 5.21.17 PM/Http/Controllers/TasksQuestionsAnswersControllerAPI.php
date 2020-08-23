<?php

namespace App\Http\Controllers;

use App\TasksQuestionsAnswers;
use App\Http\Resources\TasksQuestionsAnswersResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\TasksQuestionsAnswersRequest;
use App\Http\Resources\Collections\TasksQuestionsAnswersCollection;

class TasksQuestionsAnswersControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\TasksQuestionsAnswersCollection
     */
    public function index()
    {
        $this->authorize('viewAny', TasksQuestionsAnswers::class);

        $tasksQuestionsAnswers = TasksQuestionsAnswers::all();

        return new TasksQuestionsAnswersCollection($tasksQuestionsAnswers);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TasksQuestionsAnswersRequest  $request
     * @return \App\Http\Resources\TasksQuestionsAnswersResource
     */
    public function store(TasksQuestionsAnswersRequest $request)
    {
        $this->authorize('create', TasksQuestionsAnswers::class);

        $tasksQuestionsAnswers = TasksQuestionsAnswers::create($request->validated());

        return new TasksQuestionsAnswersResource($tasksQuestionsAnswers);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TasksQuestionsAnswers  $tasksQuestionsAnswers
     * @return \App\Http\Resources\TasksQuestionsAnswersResource
     */
    public function show(TasksQuestionsAnswers $tasksQuestionsAnswers)
    {
        $this->authorize('view', $tasksQuestionsAnswers);

        return new TasksQuestionsAnswersResource($tasksQuestionsAnswers);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TasksQuestionsAnswersRequest  $request
     * @param  \App\TasksQuestionsAnswers  $tasksQuestionsAnswers
     * @return \App\Http\Resources\TasksQuestionsAnswersResource
     */
    public function update(TasksQuestionsAnswersRequest $request, TasksQuestionsAnswers $tasksQuestionsAnswers)
    {
        $this->authorize('update', $tasksQuestionsAnswers);

        $tasksQuestionsAnswers->update($request->validated());

        return new TasksQuestionsAnswersResource($tasksQuestionsAnswers);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TasksQuestionsAnswers  $tasksQuestionsAnswers
     * @return \App\Http\Resources\TasksQuestionsAnswersResource
     */
    public function destroy(TasksQuestionsAnswers $tasksQuestionsAnswers)
    {
        $this->authorize('delete', $tasksQuestionsAnswers);

        $tasksQuestionsAnswers->delete();

        return new TasksQuestionsAnswersResource($tasksQuestionsAnswers);

    }
}
