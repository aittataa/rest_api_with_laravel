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
            //$table->id();
            $table->increments("id_category");
            $table->string("category_name", 100);
            $table->text("category_image", 100);
            $table->tinyInteger("category_status")->default(1);
            // $table->timestamp();
            // $table->softDeletes();

            $table->timestamp("created_at")->useCurrent();
            $table->timestamp("updated_at")->useCurrent();
            $table->timestamp("deleted_at")->nullable();
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
