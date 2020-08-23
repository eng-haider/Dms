<?php

namespace App\Http\Controllers;

use App\Stores;
use App\Http\Resources\StoresResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoresRequest;
use App\Http\Resources\Collections\StoresCollection;

class StoresControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\StoresCollection
     */
    public function index()
    {
        $this->authorize('viewAny', Stores::class);

        $stores = Stores::all();

        return new StoresCollection($stores);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoresRequest  $request
     * @return \App\Http\Resources\StoresResource
     */
    public function store(StoresRequest $request)
    {
        $this->authorize('create', Stores::class);

        $stores = Stores::create($request->validated());

        return new StoresResource($stores);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stores  $stores
     * @return \App\Http\Resources\StoresResource
     */
    public function show(Stores $stores)
    {
        $this->authorize('view', $stores);

        return new StoresResource($stores);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\StoresRequest  $request
     * @param  \App\Stores  $stores
     * @return \App\Http\Resources\StoresResource
     */
    public function update(StoresRequest $request, Stores $stores)
    {
        $this->authorize('update', $stores);

        $stores->update($request->validated());

        return new StoresResource($stores);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stores  $stores
     * @return \App\Http\Resources\StoresResource
     */
    public function destroy(Stores $stores)
    {
        $this->authorize('delete', $stores);

        $stores->delete();

        return new StoresResource($stores);

    }
}
