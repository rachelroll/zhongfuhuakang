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
Route::get('/system', 'BusinessController@system')->name('business.system'); // 业务体系
Route::get('/strategy', 'BusinessController@strategy')->name('business.strategy'); // 战略布局
Route::get('/production', 'BusinessController@production')->name('business.production'); // 农业生产
Route::get('/tour', 'BusinessController@tour')->name('business.tour'); // 乡村旅游观光
Route::get('/agriculture', 'BusinessController@agriculture')->name('business.agriculture'); // 电子商务 + 农业
Route::get('/plan', 'BusinessController@plan')->name('business.plan'); // 规划计划
Route::get('/hotel', 'BusinessController@hotel')->name('business.hotel'); // 民宿

// 新闻资讯
Route::get('/news-index', 'NewsController@index')->name('news.index'); // 新闻首页
Route::get('/news-list/{id}', 'NewsController@list')->name('news.list'); // 新闻列表
Route::get('/news-show/{id}', 'NewsController@show')->name('news.show'); // 详情页
Route::post('/news-search', 'NewsController@search')->name('news.search'); // 详情页

// 社会责任
Route::get('/responsiblity', 'ResponsibilityController@index')->name('responsibility.index');
















