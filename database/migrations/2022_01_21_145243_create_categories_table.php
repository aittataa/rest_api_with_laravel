<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_categories', function (Blueprint $table) {
            $table->id_category();
            $table->string("category_name", 100);
            $table->text("category_image", 100);
            $table->bit("category_status", 1);
            $table->timestamps("create_at");
            $table->timestamps("update_at");
            $table->timestamps("delete_at");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_categories');
    }
}
