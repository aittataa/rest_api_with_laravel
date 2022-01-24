<?php

namespace App\Http\Controllers;

use App\Models\Wallpapers;
use App\Http\Requests\StoreWallpapersRequest;
use App\Http\Requests\UpdateWallpapersRequest;
use App\Http\Resources\CategoriesResource;
use App\Http\Resources\WallpapersResource;

class WallpapersController extends Controller
{
    public function index()
    {
        $limit = 10;
        $wallpapers = WallpapersResource::collection(Wallpapers::paginate($limit));
        return [
            "info" => [
                "total" => $wallpapers->total(),
                "pages" => $wallpapers->lastPage(),
                "prev" => $wallpapers->previousPageUrl(),
                "next" => $wallpapers->nextPageUrl(),
            ],
            "results" => $wallpapers,
        ];
    }

    public function show($id)
    {
        $wallpaper = Wallpapers::findOrFail($id);
        return [
            "id" => $wallpaper->id,
            "wallpaper_image" => $wallpaper->wallpaper_image,
            "wallpaper_featured" => $wallpaper->wallpaper_featured,
            "wallpaper_type" => $wallpaper->wallpaper_type,
            "wallpaper_tags" => $wallpaper->wallpaper_tags,
            "wallpaper_colors" => $wallpaper->wallpaper_colors,
            "wallpaper_status" => $wallpaper->wallpaper_status,
            "created_at" => $wallpaper->created_at,
            "updated_at" => $wallpaper->updated_at,
            "deleted_at" => $wallpaper->deleted_at,
            "category" => new CategoriesResource($wallpaper->category),
        ];
    }

    public function store(StoreWallpapersRequest $request)
    {
        $wallpaper = Wallpapers::create($request->all());
        $wallpaper = Wallpapers::findOrFail($wallpaper->id);
        return [
            "id" => $wallpaper->id,
            "wallpaper_image" => $wallpaper->wallpaper_image,
            "wallpaper_featured" => $wallpaper->wallpaper_featured,
            "wallpaper_type" => $wallpaper->wallpaper_type,
            "wallpaper_tags" => $wallpaper->wallpaper_tags,
            "wallpaper_colors" => $wallpaper->wallpaper_colors,
            "wallpaper_status" => $wallpaper->wallpaper_status,
            "created_at" => $wallpaper->created_at,
            "updated_at" => $wallpaper->updated_at,
            "deleted_at" => $wallpaper->deleted_at,
            "category" => new CategoriesResource($wallpaper->category),
        ];
    }

    public function update(UpdateWallpapersRequest $request, $id)
    {
        $wallpaper = Wallpapers::findOrFail($id);
        $wallpaper->update($request->all());
        return [
            "id" => $wallpaper->id,
            "wallpaper_image" => $wallpaper->wallpaper_image,
            "wallpaper_featured" => $wallpaper->wallpaper_featured,
            "wallpaper_type" => $wallpaper->wallpaper_type,
            "wallpaper_tags" => $wallpaper->wallpaper_tags,
            "wallpaper_colors" => $wallpaper->wallpaper_colors,
            "wallpaper_status" => $wallpaper->wallpaper_status,
            "created_at" => $wallpaper->created_at,
            "updated_at" => $wallpaper->updated_at,
            "deleted_at" => $wallpaper->deleted_at,
            "category" => new CategoriesResource($wallpaper->category),
        ];
    }

    public function destroy($id)
    {
        $wallpaper = Wallpapers::findOrFail($id);
        $wallpaper->delete();
        return ["message" => "Successfully Deleted"];
    }
}
