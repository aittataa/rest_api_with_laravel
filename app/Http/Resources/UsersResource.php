<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "user_name" => $this->user_name,
            "user_username" => $this->user_username,
            "user_email" => $this->user_email,
            "user_password" => $this->user_password,
            "user_phone" => $this->user_phone,
            "user_type" => $this->user_type,
            "user_image" => $this->user_image,
            "user_status" => $this->user_status,
            "verified_at" => $this->verified_at,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
            "deleted_at" => $this->deleted_at,
        ];
    }
}
