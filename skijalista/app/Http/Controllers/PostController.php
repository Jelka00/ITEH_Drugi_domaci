<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Post::all());
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
        $validator = Validator::make($request->all(),[
            'post_title' => 'required|string|max:225',
            'post_content' => 'required',
            'excerpt' => 'required',
            'slug' => 'required|string|max:100',
            'sky_resort_id' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }

        $post = Post::create([
            'post_title' => $request->post_title,
            'post_content' => $request->post_content,
            'excerpt' => $request->excerpt,
            'slug' => $request->slug,
            'sky_resort_id' => $request->sky_resort_id,
            'user_id' => Auth::user()->id
        ]);

        return response()->json(['Post created successfully.', new PostResource($post)]);
        //return new PostResource($post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post_id)
    {
        $post = Post::find($post_id);
        if(is_null($post)){
            return response()->json('Data not found!', 404);
        }
        return response()->json($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $validator = Validator::make($request->all(),[
            'post_title' => 'required|string|max:225',
            'post_content' => 'required',
            'excerpt' => 'required',
            'slug' => 'required|string|max:100',
            'sky_resort_id' => 'required'
        ]);

        if($validator->fails()){
            return response()->json($validator->errors());
        }
        $post->update([
            'post_title' => $request->post_title,
            'post_content' => $request->post_content,
            'excerpt' => $request->excerpt,
            'slug' => $request->slug,
            'sky_resort_id' => $request->sky_resort_id,
            'user_id' => $request->user_id,
        ]);
        return response()->json(['Post updated successfully.', new PostResource($post)]);
        //return new PostResource($post);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        return $post->delete();
        return response()->json('Post created successfully.');
    }
}
