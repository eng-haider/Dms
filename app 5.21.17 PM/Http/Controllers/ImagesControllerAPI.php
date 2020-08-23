<?php

namespace App\Http\Controllers;

use App\Images;
use App\Http\Resources\ImagesResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\ImagesRequest;
use App\Http\Resources\Collections\ImagesCollection;

class ImagesControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\ImagesCollection
     */
    public function index()
    {
        $this->authorize('viewAny', Images::class);

        $images = Images::all();

        return new ImagesCollection($images);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ImagesRequest  $request
     * @return \App\Http\Resources\ImagesResource
     */
    public function store(ImagesRequest $request)
    {
        $this->authorize('create', Images::class);

        $images = Images::create($request->validated());

        return new ImagesResource($images);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Images  $images
     * @return \App\Http\Resources\ImagesResource
     */
    public function show(Images $images)
    {
        $this->authorize('view', $images);

        return new ImagesResource($images);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ImagesRequest  $request
     * @param  \App\Images  $images
     * @return \App\Http\Resources\ImagesResource
     */
    public function update(ImagesRequest $request, Images $images)
    {
        $this->authorize('update', $images);

        $images->update($request->validated());

        return new ImagesResource($images);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Images  $images
     * @return \App\Http\Resources\ImagesResource
     */
    public function destroy(Images $images)
    {
        $this->authorize('delete', $images);

        $images->delete();

        return new ImagesResource($images);

    }
}
