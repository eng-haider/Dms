<?php

namespace App\Http\Controllers;

use App\Reports;
use App\Http\Resources\ReportsResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReportsRequest;
use App\Http\Resources\Collections\ReportsCollection;

class ReportsControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\ReportsCollection
     */
    public function index()
    {
        $this->authorize('viewAny', Reports::class);

        $reports = Reports::all();

        return new ReportsCollection($reports);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\ReportsRequest  $request
     * @return \App\Http\Resources\ReportsResource
     */
    public function store(ReportsRequest $request)
    {
        $this->authorize('create', Reports::class);

        $reports = Reports::create($request->validated());

        return new ReportsResource($reports);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reports  $reports
     * @return \App\Http\Resources\ReportsResource
     */
    public function show(Reports $reports)
    {
        $this->authorize('view', $reports);

        return new ReportsResource($reports);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\ReportsRequest  $request
     * @param  \App\Reports  $reports
     * @return \App\Http\Resources\ReportsResource
     */
    public function update(ReportsRequest $request, Reports $reports)
    {
        $this->authorize('update', $reports);

        $reports->update($request->validated());

        return new ReportsResource($reports);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reports  $reports
     * @return \App\Http\Resources\ReportsResource
     */
    public function destroy(Reports $reports)
    {
        $this->authorize('delete', $reports);

        $reports->delete();

        return new ReportsResource($reports);

    }
}
