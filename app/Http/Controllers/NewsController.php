<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    //新闻首页
    public function index()
    {
        return view('news.index');
    }

    // 新闻列表页
    public function list($id)
    {
        return view('news.list');
    }

    // 详情页
    public function show($id)
    {
        return view('news.show');
    }

}
