<?php

namespace App\Http\Controllers;

use App\TasksQuestions;
use App\Http\Resources\TasksQuestionsResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\TasksQuestionsRequest;
use App\Http\Resources\Collections\TasksQuestionsCollection;

class TasksQuestionsControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\TasksQuestionsCollection
     */
    public function index()
    {
        $this->authorize('viewAny', TasksQuestions::class);

        $tasksQuestions = TasksQuestions::all();

        return new TasksQuestionsCollection($tasksQuestions);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TasksQuestionsRequest  $request
     * @return \App\Http\Resources\TasksQuestionsResource
     */
    public function store(TasksQuestionsRequest $request)
    {
        $this->authorize('create', TasksQuestions::class);

        $tasksQuestions = TasksQuestions::create($request->validated());

        return new TasksQuestionsResource($tasksQuestions);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TasksQuestions  $tasksQuestions
     * @return \App\Http\Resources\TasksQuestionsResource
     */
    public function show(TasksQuestions $tasksQuestions)
    {
        $this->authorize('view', $tasksQuestions);

        return new TasksQuestionsResource($tasksQuestions);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TasksQuestionsRequest  $request
     * @param  \App\TasksQuestions  $tasksQuestions
     * @return \App\Http\Resources\TasksQuestionsResource
     */
    public function update(TasksQuestionsRequest $request, TasksQuestions $tasksQuestions)
    {
        $this->authorize('update', $tasksQuestions);

        $tasksQuestions->update($request->validated());

        return new TasksQuestionsResource($tasksQuestions);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TasksQuestions  $tasksQuestions
     * @return \App\Http\Resources\TasksQuestionsResource
     */
    public function destroy(TasksQuestions $tasksQuestions)
    {
        $this->authorize('delete', $tasksQuestions);

        $tasksQuestions->delete();

        return new TasksQuestionsResource($tasksQuestions);

    }
}
