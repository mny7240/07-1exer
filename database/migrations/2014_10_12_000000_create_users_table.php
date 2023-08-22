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
    public function up()                //up が実行(作成)。こっちに基本は定義を書いていく
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');              //名前カラムを作成している
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()        //down が元に戻す(削除)
    {
        Schema::dropIfExists('users');
    }
};
