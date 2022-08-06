<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClothesRequest;
use App\Http\Requests\UpdateClothesRequest;
use App\Models\Api\V1\Clothes;

class ClothesController extends Controller
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
     * @param  \App\Http\Requests\StoreClothesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClothesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Api\V1\Clothes  $clothes
     * @return \Illuminate\Http\Response
     */
    public function show(Clothes $clothes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Api\V1\Clothes  $clothes
     * @return \Illuminate\Http\Response
     */
    public function edit(Clothes $clothes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClothesRequest  $request
     * @param  \App\Models\Api\V1\Clothes  $clothes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClothesRequest $request, Clothes $clothes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Api\V1\Clothes  $clothes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Clothes $clothes)
    {
        //
    }
}
