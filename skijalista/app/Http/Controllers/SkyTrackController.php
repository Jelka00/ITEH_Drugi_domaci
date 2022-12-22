<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkyTrackResource;
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
        $sky_track = Sky_track::create([
            'track_name' => $request->track_name,
            'track_length' => $request->track_length,
            'track_category' => $request->track_category,
            'slug' => $request->slug,
            'sky_resort_id' => $request->sky_resort_id,
        ]);

        return new SkyTrackResource($sky_track);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sky_track  $sky_track
     * @return \Illuminate\Http\Response
     */
    public function show(Sky_track $sky_track_id)
    {
        $sky_track = Sky_track::find($sky_track_id);
        if(is_null($sky_track)){
            return response()->json('Data not found!', 404);
        }
        return response()->json($sky_track);
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
        $sky_track->update([
            'track_name' => $request->track_name,
            'track_length' => $request->track_length,
            'track_category' => $request->track_category,
            'slug' => $request->slug,
            'sky_resort_id' => $request->sky_resort_id,
        ]);

        return new SkyTrackResource($sky_track);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sky_track  $sky_track
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sky_track $sky_track)
    {
        return $sky_track->delete();
    }
}
