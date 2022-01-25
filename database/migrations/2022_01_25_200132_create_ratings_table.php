<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger("rating_star")->default(0);
            $table->tinyInteger("rating_status")->default(1);
            $table->foreignIdFor(Users::class, "user_id")->nullable();
            $table->foreignIdFor(Wallpapers::class, "wallpaper_id")->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}
