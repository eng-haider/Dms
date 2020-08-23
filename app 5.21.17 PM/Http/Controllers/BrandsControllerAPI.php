<?php

namespace App\Http\Controllers;

use App\Brands;
use App\Http\Resources\BrandsResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\BrandsRequest;
use App\Http\Resources\Collections\BrandsCollection;

class BrandsControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\BrandsCollection
     */
    public function index()
    {
        $this->authorize('viewAny', Brands::class);

        $brands = Brands::all();

        return new BrandsCollection($brands);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\BrandsRequest  $request
     * @return \App\Http\Resources\BrandsResource
     */
    public function store(BrandsRequest $request)
    {
        $this->authorize('create', Brands::class);

        $brands = Brands::create($request->validated());

        return new BrandsResource($brands);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brands  $brands
     * @return \App\Http\Resources\BrandsResource
     */
    public function show(Brands $brands)
    {
        $this->authorize('view', $brands);

        return new BrandsResource($brands);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\BrandsRequest  $request
     * @param  \App\Brands  $brands
     * @return \App\Http\Resources\BrandsResource
     */
    public function update(BrandsRequest $request, Brands $brands)
    {
        $this->authorize('update', $brands);

        $brands->update($request->validated());

        return new BrandsResource($brands);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brands  $brands
     * @return \App\Http\Resources\BrandsResource
     */
    public function destroy(Brands $brands)
    {
        $this->authorize('delete', $brands);

        $brands->delete();

        return new BrandsResource($brands);

    }
}
