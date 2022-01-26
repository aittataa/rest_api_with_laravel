<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ColorsController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\RatingsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\WallpapersController;
use App\Models\Authentication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::prefix("v1")->group(function () {});
Route::apiResource("authentication", AuthenticationController::class);
Route::apiResource("users", UsersController::class);
Route::apiResource("categories", CategoriesController::class);
Route::apiResource("colors", ColorsController::class);
Route::apiResource("wallpapers", WallpapersController::class);
Route::apiResource("favorites", FavoritesController::class);
Route::apiResource("ratings", RatingsController::class);
