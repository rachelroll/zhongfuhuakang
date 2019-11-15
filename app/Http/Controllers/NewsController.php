<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    //新闻首页
    public function index()
    {
        $news = News::all()->groupBy('type');

        foreach ($news as $key => &$item) {

            $promotion = News::where('type', $key)->where('promotion', 1)->first();

            $item->promotion = $promotion;

            $item->type = News::NEWS_TYPES[ $key ];
        }

        return view('news.index', compact('news'));
    }

    // 新闻列表页
    public function list($id)
    {
        $news = News::where('type', $id)->get();

        $promotion = News::where('type', $id)->where('promotion', 1)->first();
        return view('news.list', compact('news', 'promotion'));
    }

    // 详情页
    public function show($id)
    {
        $news = News::find($id);

        return view('news.show', compact('news'));
    }
}
