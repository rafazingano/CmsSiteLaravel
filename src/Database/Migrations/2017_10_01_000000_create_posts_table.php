<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        
        Schema::create('posts_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('posts_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_type_id')->unsigned();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('post_type_id')
                    ->references('id')->on('posts_types')
                    ->onDelete('cascade');
        });
        
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('post_category_id')->unsigned();
            $table->integer('post_id')->unsigned()->nullable();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('content');
            $table->enun('status', [1,0])->default(1);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade');
            $table->foreign('post_category_id')
                    ->references('id')->on('posts_categories')
                    ->onDelete('cascade');
            $table->foreign('post_id')
                    ->references('id')->on('posts')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('posts');
        Schema::dropIfExists('posts_categories');
        Schema::dropIfExists('posts_types');
    }

}
