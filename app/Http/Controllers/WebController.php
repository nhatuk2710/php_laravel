<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebController extends Controller
{
    public function login(){
        return view('login');
    }

    public function home(){
        $newests = Product::take(3)->orderBy('created_at','desc')->get();
        $max_price = Product::take(3)->orderBy('price','desc')->get();
        $min_price = Product::take(3)->orderBy('price','asc')->get();
        return view("home-page",['max_price'=> $max_price,'newests'=>$newests,'min_price'=>$min_price]);

    }



}
