<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUsersRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user_name' => "required",
            'user_username' => "required",
            'user_email' => "required",
            'user_password' => "required",
            'user_phone' => "required",
        ];
    }
}
