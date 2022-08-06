<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDisciplineRequest;
use App\Http\Requests\UpdateDisciplineRequest;
use App\Models\Api\V1\Discipline;

class DisciplineController extends Controller
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
     * @param  \App\Http\Requests\StoreDisciplineRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDisciplineRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Api\V1\Discipline  $discipline
     * @return \Illuminate\Http\Response
     */
    public function show(Discipline $discipline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Api\V1\Discipline  $discipline
     * @return \Illuminate\Http\Response
     */
    public function edit(Discipline $discipline)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDisciplineRequest  $request
     * @param  \App\Models\Api\V1\Discipline  $discipline
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDisciplineRequest $request, Discipline $discipline)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Api\V1\Discipline  $discipline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Discipline $discipline)
    {
        //
    }
}
