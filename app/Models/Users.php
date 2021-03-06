<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'user_name',
        'user_username',
        'user_email',
        'user_password',
        'user_phone',
        "user_type",
        "user_image",
        "user_status",
        "verified_at",
    ];
}
