<?php

namespace App\Http\Controllers;

use App\Provinces;
use App\Http\Resources\ProvincesResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProvincesRequest;
use App\Http\Resources\Collections\ProvincesCollection;

class ProvincesControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\ProvincesCollection
     */
    public function index()
    {
        $this->authorize('viewAny', Provinces::class);

        $provinces = Provinces::all();

        return new ProvincesCollection($provinces);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ProvincesRequest  $request
     * @return \App\Http\Resources\ProvincesResource
     */
    public function store(ProvincesRequest $request)
    {
        $this->authorize('create', Provinces::class);

        $provinces = Provinces::create($request->validated());

        return new ProvincesResource($provinces);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Provinces  $provinces
     * @return \App\Http\Resources\ProvincesResource
     */
    public function show(Provinces $provinces)
    {
        $this->authorize('view', $provinces);

        return new ProvincesResource($provinces);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ProvincesRequest  $request
     * @param  \App\Provinces  $provinces
     * @return \App\Http\Resources\ProvincesResource
     */
    public function update(ProvincesRequest $request, Provinces $provinces)
    {
        $this->authorize('update', $provinces);

        $provinces->update($request->validated());

        return new ProvincesResource($provinces);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Provinces  $provinces
     * @return \App\Http\Resources\ProvincesResource
     */
    public function destroy(Provinces $provinces)
    {
        $this->authorize('delete', $provinces);

        $provinces->delete();

        return new ProvincesResource($provinces);

    }
}
