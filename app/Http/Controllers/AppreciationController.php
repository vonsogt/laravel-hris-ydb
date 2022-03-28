<?php

namespace App\Http\Controllers;

use App\Models\Appreciation;
use App\Http\Requests\StoreAppreciationRequest;
use App\Http\Requests\UpdateAppreciationRequest;

class AppreciationController extends Controller
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
     * @param  \App\Http\Requests\StoreAppreciationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAppreciationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Appreciation  $appreciation
     * @return \Illuminate\Http\Response
     */
    public function show(Appreciation $appreciation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appreciation  $appreciation
     * @return \Illuminate\Http\Response
     */
    public function edit(Appreciation $appreciation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAppreciationRequest  $request
     * @param  \App\Models\Appreciation  $appreciation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAppreciationRequest $request, Appreciation $appreciation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appreciation  $appreciation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appreciation $appreciation)
    {
        //
    }
}
