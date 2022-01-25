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
        Schema::create('wallpapers', function (Blueprint $table) {
            $table->id();
            $table->text("wallpaper_image");
            $table->tinyInteger("wallpaper_featured")->default(0);
            $table->string("wallpaper_type", 25)->default("Portrait");
            $table->text("wallpaper_tags")->default("Wallpaper");
            $table->text("wallpaper_colors")->nullable();
            $table->tinyInteger("wallpaper_status")->default(1);
            $table->foreignIdFor(Categories::class, "category_id")->nullable();
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
        Schema::dropIfExists('wallpapers');
    }
}
