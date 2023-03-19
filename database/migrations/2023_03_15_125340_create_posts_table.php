<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned()->nullable()->comment('회원 ID');
            $table->bigInteger('board_id')->unsigned()->nullable()->comment('게시판 ID');
            $table->bigInteger('refer')->unsigned()->nullable()->comment('원게시물 ID');
            $table->string('thread', 50)->default('a')->comment('정렬값 atoz');
            $table->string('title', 100)->comment('타이틀');
            $table->mediumText('content')->nullable()->comment('본문');
            $table->integer('hits')->unsigned()->default(0)->comment('조회수');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('set null')
                ->onUpdate('cascade');

            $table->foreign('board_id')->references('id')->on('boards')
                ->onDelete('set null')
                ->onUpdate('cascade');
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
};
