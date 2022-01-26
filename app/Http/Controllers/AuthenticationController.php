<?php

namespace App\Http\Controllers;

 
use App\Models\Users;
use App\Http\Controllers\Controller;

class AuthenticationController extends Controller
{
    public function show($id)
    {
        $user = Users::findOrFail($id);
        return [
            "id" => $user->id,
            "user_name" => $user->user_name,
            "user_username" => $user->user_username,
            "user_email" => $user->user_email,
            "user_password" => $user->user_password,
            "user_phone" => $user->user_phone,
            "user_type" => $user->user_type,
            "user_image" => $user->user_image,
            "user_status" => $user->user_status,
            "verified_at" => $user->verified_at,
            "created_at" => $user->created_at,
            "updated_at" => $user->updated_at,
            "deleted_at" => $user->deleted_at,
        ];
    }
}
