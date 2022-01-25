<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Http\Requests\StoreUsersRequest;
use App\Http\Requests\UpdateUsersRequest;
use App\Http\Resources\UsersResource;

class UsersController extends Controller
{
    public function index()
    {
        $limit = 10;
        $users = UsersResource::collection(Users::paginate($limit));
        return [
            "info" => [
                "total" => $users->total(),
                "pages" => $users->lastPage(),
                "prev" => $users->previousPageUrl(),
                "next" => $users->nextPageUrl(),
            ],
            "results" => $users,
        ];
    }

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

    public function store(StoreUsersRequest $request)
    {
        $user = Users::create($request->all());
        $user = Users::findOrFail($user->id);
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

    public function update(UpdateUsersRequest $request, $id)
    {
        $user = users::findOrFail($id);
        $user->update($request->all());
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

    public function destroy($id)
    {
        $user = users::findOrFail($id);
        $user->delete();
        return ["message" => "Successfully Deleted"];
    }
}
