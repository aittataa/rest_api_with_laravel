<?php

namespace App\Http\Controllers;

use App\Models\Ratings;
use App\Http\Requests\StoreRatingsRequest;
use App\Http\Requests\UpdateRatingsRequest;
use App\Http\Resources\RatingsResource;
use App\Http\Resources\UsersResource;
use App\Http\Resources\WallpapersResource;

class RatingsController extends Controller
{
    public function index()
    {
        $limit = 10;
        $ratings = RatingsResource::collection(Ratings::paginate($limit));
        return [
            "info" => [
                "total" => $ratings->total(),
                "pages" => $ratings->lastPage(),
                "prev" => $ratings->previousPageUrl(),
                "next" => $ratings->nextPageUrl(),
            ],
            "results" => $ratings,
        ];
    }

    public function show($id)
    {
        $rating = Ratings::findOrFail($id);
        return  [
            "id" => $rating->id,
            "rating_star" => $rating->rating_star,
            "rating_status" => $rating->rating_status,
            "created_at" => $rating->created_at,
            "updated_at" => $rating->updated_at,
            "deleted_at" => $rating->deleted_at,
            "user" => new UsersResource($rating->user),
            "wallpaper" => new WallpapersResource($rating->wallpaper),
        ];
    }

    public function store(StoreRatingsRequest $request)
    {
        $rating = Ratings::create($request->all());
        $rating  = Ratings::findOrFail($rating->id);
        return  [
            "id" => $rating->id,
            "rating_star" => $rating->rating_star,
            "rating_status" => $rating->rating_status,
            "created_at" => $rating->created_at,
            "updated_at" => $rating->updated_at,
            "deleted_at" => $rating->deleted_at,
            "user" => new UsersResource($rating->user),
            "wallpaper" => new WallpapersResource($rating->wallpaper),
        ];
    }

    public function update(UpdateRatingsRequest $request, $id)
    {
        $rating = Ratings::findOrFail($id);
        $rating->update($request->all());
        return  [
            "id" => $rating->id,
            "rating_star" => $rating->rating_star,
            "rating_status" => $rating->rating_status,
            "created_at" => $rating->created_at,
            "updated_at" => $rating->updated_at,
            "deleted_at" => $rating->deleted_at,
            "user" => new UsersResource($rating->user),
            "wallpaper" => new WallpapersResource($rating->wallpaper),
        ];
    }

    public function destroy($id)
    {
        $rating = Ratings::findOrFail($id);
        $rating->delete();
        return ["message" => "Successfully Deleted"];
    }
}
