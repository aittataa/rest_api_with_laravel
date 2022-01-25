<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('user_name', 250)->nullable();
            $table->string('user_username', 250)->unique()->nullable();
            $table->string('user_email', 250)->unique()->nullable();
            $table->string('user_password', 250)->nullable();
            $table->string('user_phone', 25)->nullable();
            $table->string('user_type', 25)->default('User');
            $table->text('user_image')->default('profile.png');
            $table->tinyInteger("user_status")->default(1);
            $table->timestamp('verified_at')->nullable();
            // $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
