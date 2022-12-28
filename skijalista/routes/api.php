<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostControllerRest;
use App\Http\Controllers\RestourantsController;
use App\Http\Controllers\SkyResortController;
use App\Http\Controllers\SkyTrackController;
use App\Http\Controllers\UserController;
use App\Http\Resources\RestourantsResource;
use App\Http\Resources\SkyResortResource;
use App\Http\Resources\SkyTrackResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Route::apiResource('users',UserController::class);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('sky_resorts')
    ->name('sky_resorts.')
    ->group(function () {
        Route::get('/', [SkyResortController::class, 'index'])->name('index');
        Route::post('/', [SkyResortController::class, 'store'])->name('store');
        Route::get('/{sky_resort_id}', [SkyResortController::class, 'show'])->name('show');
        Route::put('/{sky_resort_id}', [SkyResortController::class, 'update'])->name('update');
        Route::delete('/{sky_resort_id}', [SkyResortController::class, 'destroy'])->name('destroy');
    });
Route::prefix('users')
    ->name('users.')
    ->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::post('/', [UserController::class, 'store'])->name('store');
        Route::get('/{user}', [UserController::class, 'show'])->name('show');
        Route::put('/{user}', [UserController::class, 'update'])->name('update');
        Route::delete('/{user}', [UserController::class, 'destroy'])->name('destroy');
    });
Route::prefix('posts')
    ->name('posts.')
    ->group(function () {
        Route::resource('/', PostControllerRest::class);
        //Route::resource('/{post_id}', PostControllerRest::class);
        //Route::get('/', [PostController::class, 'index'])->name('index');
        //Route::post('/', [PostController::class, 'store'])->name('store');
        //Route::get('/{post_id}', [PostController::class, 'show']);
        //Route::put('/{post}', [PostController::class, 'update'])->name('update');
        //Route::delete('/{post_id}', [PostController::class, 'destroy'])->name('destroy');
    });
Route::prefix('sky_tracks')
    ->name('sky_tracks.')
    ->group(function () {
        //Route::resource('/', SkyTrackController::class);
        //Route::resource('/{sky_track_id}', SkyTrackController::class);
        Route::get('/', [SkyTrackController::class, 'index'])->name('index');
        Route::post('/', [SkyTrackController::class, 'store'])->name('store');
        Route::get('/{sky_track_id}', [SkyTrackController::class, 'show'])->name('show');
        Route::put('/{sky_track_id}', [SkyTrackController::class, 'update'])->name('update');
        Route::delete('/{sky_track_id}', [SkyTrackController::class, 'destroy'])->name('destroy');
    });
Route::prefix('restourants')
    ->name('restourants.')
    ->group(function () {
        Route::resource('/', RestourantsController::class);
        Route::resource('/{restourants_id}', RestourantsController::class);
        //Route::get('/', [RestourantsController::class, 'index'])->name('index');
        Route::post('/', [RestourantsController::class, 'store'])->name('store');
        //Route::get('/{restourants_id}', [RestourantsController::class, 'show'])->name('show');
        Route::put('/{restourants_id}', [RestourantsController::class, 'update'])->name('update');
        Route::delete('/{restourants_id}', [RestourantsController::class, 'destroy'])->name('destroy');
    });

    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);

    Route::group(['middleware' => ['auth:sanctum']], function(){
        Route::get('/profile', function(Request $request){
            return auth()->user();
        });
        Route::resource('posts', PostController::class)->only(['store']);
        Route::get('posts/{post_id}', [PostController::class, 'show'])->name('show');
        Route::put('posts/{post}', [PostController::class, 'update'])->name('update');
        Route::delete('posts/{post}', [PostController::class, 'destroy'])->name('destroy');
        Route::post('/logout', [AuthController::class, 'logout']);
    });