<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});
//day la phan dang nhap
Route::get("dang-nhap","WebController@login");

//day la trang chu
Route::get("/","WebController@home");

//day la trang san pham
Route::get("ngoi-nha","ProductController@house");
