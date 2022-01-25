<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FavoritesResource extends JsonResource
{
    public function toArray($request)
    {
        return  [
            "id" => $this->id,
            "favorite_status" => $this->favorite_status,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "deleted_at" => $this->deleted_at,
            "user" => new UsersResource($this->whenLoaded("user")),
            "wallpaper" => new WallpapersResource($this->whenLoaded("wallpaper")),
        ];
    }
}
