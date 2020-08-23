<?php

namespace App\Http\Controllers;

use App\Statuses;
use App\Http\Resources\StatusesResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\StatusesRequest;
use App\Http\Resources\Collections\StatusesCollection;

class StatusesControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\StatusesCollection
     */
    public function index()
    {
        $this->authorize('viewAny', Statuses::class);

        $statuses = Statuses::all();

        return new StatusesCollection($statuses);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StatusesRequest  $request
     * @return \App\Http\Resources\StatusesResource
     */
    public function store(StatusesRequest $request)
    {
        $this->authorize('create', Statuses::class);

        $statuses = Statuses::create($request->validated());

        return new StatusesResource($statuses);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Statuses  $statuses
     * @return \App\Http\Resources\StatusesResource
     */
    public function show(Statuses $statuses)
    {
        $this->authorize('view', $statuses);

        return new StatusesResource($statuses);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StatusesRequest  $request
     * @param  \App\Statuses  $statuses
     * @return \App\Http\Resources\StatusesResource
     */
    public function update(StatusesRequest $request, Statuses $statuses)
    {
        $this->authorize('update', $statuses);

        $statuses->update($request->validated());

        return new StatusesResource($statuses);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Statuses  $statuses
     * @return \App\Http\Resources\StatusesResource
     */
    public function destroy(Statuses $statuses)
    {
        $this->authorize('delete', $statuses);

        $statuses->delete();

        return new StatusesResource($statuses);

    }
}
