<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ColorsResource extends JsonResource
{
    public function toArray($request)
    {
        return  [
            "id" => $this->id,
            "color_name" => $this->color_name,
            "color_code" => $this->color_code,
            "color_status" => $this->color_status,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "deleted_at" => $this->deleted_at,
        ];
    }
}
