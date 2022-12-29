<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RestourantsController;
use App\Http\Controllers\SkyResortController;
use App\Http\Controllers\SkyTrackController;
use App\Http\Controllers\UserController;
use App\Http\Resources\RestourantsResource;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//User routes
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store']);
Route::get('/users/{user_id}', [UserController::class, 'show']);
Route::put('/users/{user_id}', [UserController::class, 'update']);
Route::delete('/users/{user_id}', [UserController::class, 'destroy']);
//Post routes
Route::get('/posts', [PostController::class, 'index']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{post_id}', [PostController::class, 'show']);
Route::put('/posts/{post_id}', [PostController::class, 'update']);
Route::delete('/posts/{post_id}', [PostController::class, 'destroy']);
//Restourant routes
Route::get('/restourants', [RestourantsController::class, 'index']);
Route::post('/restourants', [RestourantsController::class, 'store']);
Route::get('/restourants/{restourants_id}', [RestourantsController::class, 'show']);
Route::put('/restourants/{restourants_id}', [RestourantsController::class, 'update']);
Route::delete('/restourants/{restourants_id}', [RestourantsController::class, 'destroy']);
//Sky track routes
Route::get('/sky_tracks', [SkyTrackController::class, 'index']);
Route::post('/sky_tracks', [SkyTrackController::class, 'store']);
Route::get('/sky_tracks/{sky_track_id}', [SkyTrackController::class, 'show']);
Route::put('/sky_tracks/{sky_track_id}', [SkyTrackController::class, 'update']);
Route::delete('/sky_tracks/{sky_track_id}', [SkyTrackController::class, 'destroy']);
//Sky resort routes
Route::get('/sky_resorts', [SkyResortController::class, 'index']);
Route::post('/sky_resorts', [SkyResortController::class, 'store']);
Route::get('/sky_resorts/{sky_resort_id}', [SkyResortController::class, 'show']);
Route::put('/sky_resorts/{sky_resort_id}', [SkyResortController::class, 'update']);
Route::delete('/sky_resorts/{sky_resort_id}', [SkyResortController::class, 'destroy']);
