<?php

namespace App\Http\Controllers;

use App\Models\Authentication;
use App\Http\Requests\StoreAuthenticationRequest;
use App\Http\Requests\UpdateAuthenticationRequest;
use App\Models\Users;
use Illuminate\Foundation\Auth\User;

class AuthenticationController extends Controller
{
    public function index()
    {
    }

    public function login(Users $user)
    {
    }
}
