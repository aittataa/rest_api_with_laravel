<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WallpapersController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::prefix("v1")->group(function () {
//Route::apiResource("categories", CategoriesController::class);
//Route::apiResource("wallpapers", CategoriesController::class);
//});

Route::prefix("v1")->group(function () {
    Route::apiResource("users", UsersController::class);
    Route::apiResource("categories", CategoriesController::class);
    Route::apiResource("wallpapers", WallpapersController::class);
});

// Route::apiResource("categories", App\Http\Controllers\CategoriesController::class);
