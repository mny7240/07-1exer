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
        if (!Schema::hasTable('blogs')) {
            Schema::create('blogs', function (Blueprint $table) {       //schema::create で'blogs'の定義を作り、Blueprint でtable の定義を書いていく
            $table->id();            //$table はBlueprint のインスタンスで、id()はそのメソッド
            $table->string('title',100);    //title は 100文字
            $table->text('content');
            $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');         //blogs の定義があったら消去する。
    }
};
