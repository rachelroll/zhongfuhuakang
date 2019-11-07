<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('title')->default('')->comment('新闻标题');
            $table->string('content')->default('')->comment('新闻内容');
            $table->string('author')->default('')->comment('新闻作者');
            $table->string('time')->default('')->comment('新闻发布时间');
            $table->string('cover')->default('')->comment('封面图');
            $table->tinyInteger('type')->default(0)->comment('新闻分类; 0: 公司新闻 | 1: 圆梦乡村 | 2: 专题系列 | 3: 行业动态');
            $table->tinyInteger('promotion')->default(0)->comment('是否设为推荐新闻; 0: 非推荐 | 1: 推荐');

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
        Schema::dropIfExists('news');
    }
}
