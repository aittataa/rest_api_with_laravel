<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Colors extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "color_name",
        "color_code",
        "color_status"
    ];
}
