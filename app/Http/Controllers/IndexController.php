<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index()
    {
        $news = News::orderBy('updated_at')->limit(4)->get();

        $promotion = News::where('promotion', 1)->first();

        return view('index', compact('news', 'promotion'));
    }
}
