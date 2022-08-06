<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSubProjectRequest;
use App\Http\Requests\UpdateSubProjectRequest;
use App\Models\Api\V1\SubProject;

class SubProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubProjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Api\V1\SubProject  $subProject
     * @return \Illuminate\Http\Response
     */
    public function show(SubProject $subProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Api\V1\SubProject  $subProject
     * @return \Illuminate\Http\Response
     */
    public function edit(SubProject $subProject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubProjectRequest  $request
     * @param  \App\Models\Api\V1\SubProject  $subProject
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubProjectRequest $request, SubProject $subProject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Api\V1\SubProject  $subProject
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubProject $subProject)
    {
        //
    }
}
