<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('tab_ids');
            $table->string('slug')->unique();
            $table->integer('cat_id')->unsigned()->nullable();
            $table->integer('priority')->nullable();
            // $table->integer('child_cat_id')->unsigned()->nullable();
            $table->text('description')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('SET NULL');
            // $table->foreign('child_cat_id')->references('id')->on('categories')->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
