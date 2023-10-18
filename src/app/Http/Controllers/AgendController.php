<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAgendRequest;
use App\Http\Requests\UpdateAgendRequest;
use App\Models\Agend;

class AgendController extends Controller
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
     * @param  \App\Http\Requests\StoreAgendRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAgendRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agend  $agend
     * @return \Illuminate\Http\Response
     */
    public function show(Agend $agend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agend  $agend
     * @return \Illuminate\Http\Response
     */
    public function edit(Agend $agend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAgendRequest  $request
     * @param  \App\Models\Agend  $agend
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgendRequest $request, Agend $agend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agend  $agend
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agend $agend)
    {
        //
    }
}
