<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post_tabs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id')->unsigned()->nullable();
            $table->integer('tab_id')->unsigned()->nullable();
            $table->string('tab_type')->nullable();
            $table->string('parameter')->nullable();
            $table->string('description', 2000)->nullable();
            $table->string('title', 500)->nullable();
            $table->string('snippet',2000)->nullable();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('SET NULL');
            $table->foreign('tab_id')->references('id')->on('tabs')->onDelete('SET NULL');
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
        Schema::dropIfExists('post_tabs');
    }
}