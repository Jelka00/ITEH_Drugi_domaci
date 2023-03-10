<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkyResortResource;
use App\Models\Sky_resort;
use Illuminate\Http\Request;

class SkyResortController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sky_resort = Sky_resort::all();
        return SkyResortResource::collection($sky_resort);
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
        $sky_resort = Sky_resort::create([
            'resort_name' => $request->resort_name,
            'resort_location' => $request->resort_location,
            'track_km' => $request->track_km,
            'slug' => $request->slug,
        ]);
        return new SkyResortResource($sky_resort);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sky_resort  $sky_resort
     * @return \Illuminate\Http\Response
     */
    public function show(Sky_resort $sky_resort_id)
    {
        return new SkyResortResource($sky_resort_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sky_resort  $sky_resort
     * @return \Illuminate\Http\Response
     */
    public function edit(Sky_resort $sky_resort)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sky_resort  $sky_resort
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sky_resort $sky_resort_id)
    {
        $sky_resort_id->update([
            'resort_name' => $request->resort_name,
            'resort_location' => $request->resort_location,
            'track_km' => $request->track_km,
            'slug' => $request->slug,
        ]);

        return new SkyResortResource($sky_resort_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sky_resort  $sky_resort
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sky_resort $sky_resort_id)
    {
        $sky_resort_id->delete();
        return response()->json('Sky resort deleted successfully.');
    }
}
