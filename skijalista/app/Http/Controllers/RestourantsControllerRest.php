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
        return response()->json(Restourants::all());
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
        $restourant = Restourants::create([
            'name' => $request->name,
            'class' => $request->class,
            'slug' => $request->slug,
            'sky_resort_id' => $request->sky_resort_id,
        ]);

        return response()->json(['Restourant created successfully.', new RestourantsResource($restourant)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restourants  $restourants
     * @return \Illuminate\Http\Response
     */
    public function show(Restourants $restourant)
    {
        $restourants = Restourants::find($restourant);
        if (is_null($restourants)) {
            return response()->json('Data not found!', 404);
        }
        return response()->json($restourants);
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
    public function update(Request $request, Restourants $restourant)
    {
        $restourant->update([
            'name' => $request->name,
            'class' => $request->class,
            'slug' => $request->slug,
            'sky_resort_id' => $request->sky_resort_id,
        ]);
        return response()->json(['Restourant updated successfully.', new RestourantsResource($restourant)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restourants  $restourants
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restourants $restourant)
    {
        $restourant->delete();
        return response()->json('Restourant deleted successfully.');
    }
}
