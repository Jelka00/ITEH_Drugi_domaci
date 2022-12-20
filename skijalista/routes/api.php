<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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
        Route::get('/', [PostController::class, 'index'])->name('index');
        Route::post('/', [PostController::class, 'store'])->name('store');
        Route::get('/{post_id}', [PostController::class, 'show'])->name('show');
        Route::put('/{post_id}', [PostController::class, 'update'])->name('update');
        Route::delete('/{post_id}', [PostController::class, 'destroy'])->name('destroy');
    });
Route::prefix('sky_tracks')
    ->name('sky_tracks.')
    ->group(function () {
        Route::get('/', [SkyTrackResource::class, 'index'])->name('index');
        Route::post('/', [SkyTrackResource::class, 'store'])->name('store');
        Route::get('/{sky_track_id}', [SkyTrackResource::class, 'show'])->name('show');
        Route::put('/{sky_track_id}', [SkyTrackResource::class, 'update'])->name('update');
        Route::delete('/{sky_track_id}', [SkyTrackResource::class, 'destroy'])->name('destroy');
    });
