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

// Route::get('/', function () {
//     return view('welcome');
// });
//后台首页
Route::resource('admin','Admin\IndexController');
//友情链接列表页
Route::resource('adminlink','Admin\AdminLinkController');
Route::resource('admincate','Admin\AdminCateController');
