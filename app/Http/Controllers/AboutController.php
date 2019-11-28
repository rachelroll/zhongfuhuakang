<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // 公司概况
    public function overview()
    {
        return view('about.overview');
    }

    // 组织架构
    public function structure()
    {
        dd(request()->fullUrl(), route('about.structure'));
        return view('about.structure');
    }

    // 企业文化
    public function culture()
    {
        return view('about.culture');
    }
}
