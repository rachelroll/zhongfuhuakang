<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// 首页
Route::get('/', 'IndexController@index')->name('index');

// 关于我们
Route::get('/overview', 'AboutController@overview')->name('about.overview'); // 公司概况
Route::get('/structure', 'AboutController@structure')->name('about.structure'); // 组织架构
Route::get('/culture', 'AboutController@culture')->name('about.culture'); // 企业文化

// 业务布局
Route::get('/overview', 'AboutController@overview')->name('about.overview'); // 公司概况
