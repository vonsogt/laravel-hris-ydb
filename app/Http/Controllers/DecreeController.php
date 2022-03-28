<?php

namespace App\Http\Controllers;

use App\Models\Decree;
use App\Http\Requests\StoreDecreeRequest;
use App\Http\Requests\UpdateDecreeRequest;

class DecreeController extends Controller
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
     * @param  \App\Http\Requests\StoreDecreeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDecreeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Decree  $decree
     * @return \Illuminate\Http\Response
     */
    public function show(Decree $decree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Decree  $decree
     * @return \Illuminate\Http\Response
     */
    public function edit(Decree $decree)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDecreeRequest  $request
     * @param  \App\Models\Decree  $decree
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDecreeRequest $request, Decree $decree)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Decree  $decree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Decree $decree)
    {
        //
    }
}
