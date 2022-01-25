<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WallpapersResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "wallpaper_image" => $this->wallpaper_image,
            "wallpaper_featured" => $this->wallpaper_featured,
            "wallpaper_type" => $this->wallpaper_type,
            "wallpaper_tags" => $this->wallpaper_tags,
            "wallpaper_colors" => $this->wallpaper_colors,
            "wallpaper_status" => $this->wallpaper_status,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "deleted_at" => $this->deleted_at,
            "category" => new CategoriesResource($this->whenLoaded("category")),
        ];
    }
}
