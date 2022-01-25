<?php

use App\Models\Users;
use App\Models\Wallpapers;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritesTable extends Migration
{
    public function up()
    {
        Schema::create('favorites', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger("favorite_status")->default(1);
            $table->foreignIdFor(Users::class, "user_id")->nullable();
            $table->foreignIdFor(Wallpapers::class, "wallpaper_id")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('favorites');
    }
}
