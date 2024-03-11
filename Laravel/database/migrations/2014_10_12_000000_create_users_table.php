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
           $table->integer('id')->autoIncrement()->comment('id');
            $table->string('over_name',60)->comment('姓');
            $table->string('under_name',60)->comment('名');
            $table->string('username',60)->comment('表示されるユーザー名');
            $table->string('bio',300)->nullable()->comment('プロフィール文');
            $table->string('mail_address',60)->unique()->comment('メールアドレス');
            $table->string('password',200)->comment('パスワード');
            $table->rememberToken();
            $table->timestamp('created_at')->nullable()->comment('登録日時');
            $table->timestamp('updated_at')->default(DB::raw('current_timestamp on update current_timestamp'))->comment('更新日時');
            $table->softDeletes();
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
