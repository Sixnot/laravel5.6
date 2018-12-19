<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    /**
     * Run the migrations.
     *创建方法
     * @return void
     */
    public function up()
    {
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255)->default('')->comment('标题');
            $table->unsignedInteger('uid')->default(0)->comment('用户ID');
            $table->string('desn',500)->default('')->comment('描述');
            $table->text('cnt')->comment('文章内容');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *回滚用的方法
     * @return void
     */
    public function down()
    {
        //如果表存在则删除
        Schema::dropIfExists('article');
    }
}
