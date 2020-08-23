<?php

namespace App\Http\Controllers;

use App\Tasks;
use App\Http\Resources\TasksResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\TasksRequest;
use App\Http\Resources\Collections\TasksCollection;

class TasksControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\TasksCollection
     */
    public function index()
    {
        $this->authorize('viewAny', Tasks::class);

        $tasks = Tasks::all();

        return new TasksCollection($tasks);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\TasksRequest  $request
     * @return \App\Http\Resources\TasksResource
     */
    public function store(TasksRequest $request)
    {
        $this->authorize('create', Tasks::class);

        $tasks = Tasks::create($request->validated());

        return new TasksResource($tasks);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tasks  $tasks
     * @return \App\Http\Resources\TasksResource
     */
    public function show(Tasks $tasks)
    {
        $this->authorize('view', $tasks);

        return new TasksResource($tasks);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\TasksRequest  $request
     * @param  \App\Tasks  $tasks
     * @return \App\Http\Resources\TasksResource
     */
    public function update(TasksRequest $request, Tasks $tasks)
    {
        $this->authorize('update', $tasks);

        $tasks->update($request->validated());

        return new TasksResource($tasks);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tasks  $tasks
     * @return \App\Http\Resources\TasksResource
     */
    public function destroy(Tasks $tasks)
    {
        $this->authorize('delete', $tasks);

        $tasks->delete();

        return new TasksResource($tasks);

    }
}
