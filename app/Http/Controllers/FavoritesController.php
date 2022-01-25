<?php

namespace App\Http\Controllers;

use App\Models\Favorites;
use App\Http\Requests\StoreFavoritesRequest;
use App\Http\Requests\UpdateFavoritesRequest;
use App\Http\Resources\FavoritesResource;
use App\Http\Resources\UsersResource;
use App\Http\Resources\WallpapersResource;

class FavoritesController extends Controller
{
    public function index()
    {
        $limit = 10;
        $favorites = FavoritesResource::collection(Favorites::paginate($limit));
        return [
            "info" => [
                "total" => $favorites->total(),
                "pages" => $favorites->lastPage(),
                "prev" => $favorites->previousPageUrl(),
                "next" => $favorites->nextPageUrl(),
            ],
            "results" => $favorites,
        ];
    }

    public function show($id)
    {
        $favorite = Favorites::findOrFail($id);
        return  [
            "id" => $favorite->id,
            "favorite_status" => $favorite->favorite_status,
            "created_at" => $favorite->created_at,
            "updated_at" => $favorite->updated_at,
            "deleted_at" => $favorite->deleted_at,
            "user" => new UsersResource($favorite->user),
            "wallpaper" => new WallpapersResource($favorite->wallpaper),
        ];
    }

    public function store(StoreFavoritesRequest $request)
    {
        $favorite = Favorites::create($request->all());
        $favorite  = Favorites::findOrFail($favorite->id);
        return  [
            "id" => $favorite->id,
            "favorite_status" => $favorite->favorite_status,
            "created_at" => $favorite->created_at,
            "updated_at" => $favorite->updated_at,
            "deleted_at" => $favorite->deleted_at,
            "user" => new UsersResource($favorite->user),
            "wallpaper" => new WallpapersResource($favorite->wallpaper),
        ];
    }

    public function update(UpdateFavoritesRequest $request, $id)
    {
        $favorite = Favorites::findOrFail($id);
        $favorite->update($request->all());
        return  [
            "id" => $favorite->id,
            "favorite_status" => $favorite->favorite_status,
            "created_at" => $favorite->created_at,
            "updated_at" => $favorite->updated_at,
            "deleted_at" => $favorite->deleted_at,
            "user" => new UsersResource($favorite->user),
            "wallpaper" => new WallpapersResource($favorite->wallpaper),
        ];
    }

    public function destroy($id)
    {
        $favorite = Favorites::findOrFail($id);
        $favorite->delete();
        return ["message" => "Successfully Deleted"];
    }
}
