<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

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
            $table->bigIncrements('id')->index();
            $table->string('image', 400)->nullable()->default('images/user_default.png')->comment('Avatar');
            $table->string('name')->comment('Tên đầy đủ');
            $table->string('slug',300)->nullable()->comment('Chuỗi không dấu');
            $table->string('phone', 20)->nullable()->comment('Số điện thoại');
            $table->string('email',50)->unique()->comment('Địa chỉ Email');
            $table->string('address', 200)->nullable()->comment('Địa chỉ');
            $table->tinyInteger('gender')->nullable()->comment('Giới tính');
            $table->dateTime('birthday')->default('1912-01-01')->nullable()->comment('Ngày sinh');
            $table->string('info',1000)->nullable()->comment('Thông tin thêm');
            $table->string('password')->default(12345678)->comment('Mật khẩu đăng nhập');
            $table->tinyInteger('level')->default(2)->comment('Cấp độ phân quyền: 1: Tài khoản hệ thống - 2: Tài khoản viết bài - 3: Tài khoản quản lý bài viết - 4: Tài khoản biên tập sản phẩm/dự án - 5: Tài khoản quản lý sản phẩm/dự án ');
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
        Schema::dropIfExists('users');
    }
}
