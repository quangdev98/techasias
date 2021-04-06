<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('post', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->string('title', 500);
            $table->string('contentHot', 1000);
            $table->string('slug', 300)->nullable();
            $table->string('image', 500);
            $table->dateTime('postDate')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('thời gian tạo bài viết');
            $table->string('tag', 500)->nullable()->index();
            $table->longtext('content')->nullable()->comment('nội dung bài viết dạng html');
            $table->unsignedBigInteger('user_id')->nullable()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('cate_id')->nullable()->index();
            $table->foreign('cate_id')->references('id')->on('category')->onDelete('cascade');
            $table->tinyInteger('status')->default(2)->comment('trạng thái: 1:Bản nháp, 2:chờ duyệt, 3: đã xuất bản');
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
