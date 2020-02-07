<?php

use App\Good;
use App\User;
use Illuminate\Http\Request;

//表示
Route::get('/','GoodsController@index');

//認証機能
Auth::routes(); 
Route::get('/home','GoodsController@index')->name('home');

//物品登録画面表示
Route::get('/goodsnew', 'GoodsController@show');

// 物品登録
Route::post('/goods','GoodsController@store');

// 物品削除
Route::delete('/good/{good}','GoodsController@destroy');

//物品更新画面表示
Route::post('/goodsedit/{goods}','GoodsController@edit');

// 物品更新
Route::post('/goods/update','GoodsController@update');

// 一時保存登録
Route::post('/saves','SavesController@store');

//会員情報更新画面
Route::post('/usersedit/{users}','UsersController@edit');

// 会員情報更新
Route::post('/users/update','UsersController@update');
