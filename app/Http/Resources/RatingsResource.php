<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RatingsResource extends JsonResource
{
    public function toArray($request)
    {
        return  [
            "id" => $this->id,
            "rating_star" => $this->rating_star,
            "rating_status" => $this->rating_status,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "deleted_at" => $this->deleted_at,
            "user" => new UsersResource($this->user),
            "wallpaper" => new WallpapersResource($this->wallpaper),
        ];
    }
}
