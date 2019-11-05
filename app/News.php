<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    const NEWS_COMPANY = 0;
    const NEWS_YMXC = 1;
    const NEWS_SPECIAL_TOPICS = 2;
    const NEWS_TRENDS = 3;

    const NEWS_TYPES = [
        self::NEWS_COMPANY => '公司新闻',
        self::NEWS_YMXC => '圆梦乡村',
        self::NEWS_SPECIAL_TOPICS => '专题系列',
        self::NEWS_TRENDS => '行业动态',
    ];
}
