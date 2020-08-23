<?php

namespace App\Http\Controllers;

use App\Items;
use App\Http\Resources\ItemsResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemsRequest;
use App\Http\Resources\Collections\ItemsCollection;

class ItemsControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\ItemsCollection
     */
    public function index()
    {
        //$this->authorize('viewAny', Items::class);

        $items = Items::all();

        return new ItemsCollection($items);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ItemsRequest  $request
     * @return \App\Http\Resources\ItemsResource
     */
    public function store(ItemsRequest $request)
    {
        $this->authorize('create', Items::class);

        $items = Items::create($request->validated());

        return new ItemsResource($items);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Items  $items
     * @return \App\Http\Resources\ItemsResource
     */
    public function show(Items $items)
    {
        $this->authorize('view', $items);

        return new ItemsResource($items);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ItemsRequest  $request
     * @param  \App\Items  $items
     * @return \App\Http\Resources\ItemsResource
     */
    public function update(ItemsRequest $request, Items $items)
    {
        $this->authorize('update', $items);

        $items->update($request->validated());

        return new ItemsResource($items);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Items  $items
     * @return \App\Http\Resources\ItemsResource
     */
    public function destroy(Items $items)
    {
        $this->authorize('delete', $items);

        $items->delete();

        return new ItemsResource($items);

    }
}
