<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoriesResource extends JsonResource
{
    public function toArray($request)
    {
        return  [
            "id" => $this->id,
            "category_name" => $this->category_name,
            "category_image" => $this->category_image,
            "category_status" => $this->category_status,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "deleted_at" => $this->deleted_at,
            "wallpaperts" => WallpapersResource::collection($this->whenLoaded("wallpapers")),
        ];
    }
}
