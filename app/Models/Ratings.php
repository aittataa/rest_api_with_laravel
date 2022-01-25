<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ratings extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "rating_star",
        "rating_status",
        "user_id",
        "wallpaper_id"
    ];

    public function user()
    {
        return $this->belongsTo(Users::class, "user_id");
    }

    public function wallpaper()
    {
        return $this->belongsTo(Wallpapers::class, "wallpaper_id");
    }
}
