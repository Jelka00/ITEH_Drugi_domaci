<?php

namespace App\Http\Controllers;

use App\Models\Sky_track;
use Illuminate\Http\Request;

class SkyTrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Sky_track::all());
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
     * @param  \App\Models\Sky_track  $sky_track
     * @return \Illuminate\Http\Response
     */
    public function show(Sky_track $sky_track)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sky_track  $sky_track
     * @return \Illuminate\Http\Response
     */
    public function edit(Sky_track $sky_track)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sky_track  $sky_track
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sky_track $sky_track)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sky_track  $sky_track
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sky_track $sky_track)
    {
        //
    }
}
