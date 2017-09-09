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
        
        Schema::create('cw_posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('category_id')->unsigned();
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
            $table->foreign('category_id')
                    ->references('id')->on('cw_categories')
                    ->onDelete('cascade');
            $table->foreign('post_id')
                    ->references('id')->on('cw_posts')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('cw_posts');
    }

}
