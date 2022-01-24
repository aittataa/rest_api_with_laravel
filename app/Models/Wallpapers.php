<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Wallpapers extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        "wallpaper_image",
        "wallpaper_featured",
        "wallpaper_type",
        "wallpaper_tags",
        "wallpaper_colors",
        "wallpaper_status",
        "category_id",
    ];

    public function category()
    {
        return $this->belongsTo(Categories::class, "category_id");
    }
}
