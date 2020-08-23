<?php

namespace App\Http\Controllers;

use App\Users;
use App\Http\Resources\UsersResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\UsersRequest;
use App\Http\Resources\Collections\UsersCollection;

class UsersControllerAPI extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return App\Http\Resources\Collections\UsersCollection
     */
    public function index()
    {
        $this->authorize('viewAny', Users::class);

        $users = Users::all();

        return new UsersCollection($users);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\UsersRequest  $request
     * @return \App\Http\Resources\UsersResource
     */
    public function store(UsersRequest $request)
    {
        $this->authorize('create', Users::class);

        $users = Users::create($request->validated());

        return new UsersResource($users);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Users  $users
     * @return \App\Http\Resources\UsersResource
     */
    public function show(Users $users)
    {
        $this->authorize('view', $users);

        return new UsersResource($users);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UsersRequest  $request
     * @param  \App\Users  $users
     * @return \App\Http\Resources\UsersResource
     */
    public function update(UsersRequest $request, Users $users)
    {
        $this->authorize('update', $users);

        $users->update($request->validated());

        return new UsersResource($users);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Users  $users
     * @return \App\Http\Resources\UsersResource
     */
    public function destroy(Users $users)
    {
        $this->authorize('delete', $users);

        $users->delete();

        return new UsersResource($users);

    }
}
