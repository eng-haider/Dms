<?php

namespace App\Http\Controllers;

use App\Orders;
use App\Http\Resources\OrdersResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrdersRequest;
use App\Http\Resources\Collections\OrdersCollection;

class OrdersControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\OrdersCollection
     */
    public function index()
    {
        $this->authorize('viewAny', Orders::class);

        $orders = Orders::all();

        return new OrdersCollection($orders);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\OrdersRequest  $request
     * @return \App\Http\Resources\OrdersResource
     */
    public function store(OrdersRequest $request)
    {
        $this->authorize('create', Orders::class);

        $orders = Orders::create($request->validated());

        return new OrdersResource($orders);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orders  $orders
     * @return \App\Http\Resources\OrdersResource
     */
    public function show(Orders $orders)
    {
        $this->authorize('view', $orders);

        return new OrdersResource($orders);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\OrdersRequest  $request
     * @param  \App\Orders  $orders
     * @return \App\Http\Resources\OrdersResource
     */
    public function update(OrdersRequest $request, Orders $orders)
    {
        $this->authorize('update', $orders);

        $orders->update($request->validated());

        return new OrdersResource($orders);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orders  $orders
     * @return \App\Http\Resources\OrdersResource
     */
    public function destroy(Orders $orders)
    {
        $this->authorize('delete', $orders);

        $orders->delete();

        return new OrdersResource($orders);

    }
}
