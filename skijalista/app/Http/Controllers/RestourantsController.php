<?php

namespace App\Http\Controllers;

use App\Http\Resources\RestourantsResource;
use App\Models\Restourants;
use Illuminate\Http\Request;

class RestourantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return Restourants::collection(Restourants::all());
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

        return new RestourantsResource($restourant);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Restourants  $restourants
     * @return \Illuminate\Http\Response
     */
    public function show(Restourants $restourants_id)
    {
        $restourants = Restourants::find($restourants_id);
        if(is_null($restourants)){
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
    public function update(Request $request, Restourants $restourants_id)
    {
        $restourants_id->update([
            'post_title' => $request->post_title,
            'post_content' => $request->post_content,
            'excerpt' => $request->excerpt,
            'slug' => $request->slug,
            'sky_resort_id' => $request->sky_resort_id,
            'user_id' => $request->user_id,
        ]);

        return new RestourantsResource($restourants_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Restourants  $restourants
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restourants $restourants_id)
    {
        return $restourants_id->delete();
    }
}
