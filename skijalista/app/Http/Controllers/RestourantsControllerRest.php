<?php

namespace App\Http\Controllers;

use App\Http\Resources\RestourantsResource;
use App\Models\Restourants;
use Illuminate\Http\Request;

class RestourantsControllerRest extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $restourants = RestourantsResource::all();
        return RestourantsResource::collection($restourants);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restourants  $restourants
     * @return \Illuminate\Http\Response
     */
    public function show(Restourants $restourants)
    {
        return new RestourantsResource($restourants);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Restourants  $restourants
     * @return \Illuminate\Http\Response
     */
    public function edit(Restourants $restourants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Restourants  $restourants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restourants $restourants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restourants  $restourants
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restourants $restourants)
    {
        //
    }
}
