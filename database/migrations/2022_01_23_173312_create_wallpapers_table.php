<?php

use App\Models\Categories;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWallpapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_wallpapers', function (Blueprint $table) {
            $table->id();
            $table->string("wallpaper_image", 250);
            $table->tinyInteger("wallpaper_featured")->default(0);
            $table->string("wallpaper_type", 25)->default("Portrait");
            $table->text("wallpaper_tags")->default("Wallpaper");
            $table->text("wallpaper_colors");
            $table->tinyInteger("wallpaper_status")->default(1);
            $table->foreignIdFor(Categories::class, "category_id");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_wallpapers');
    }
}
