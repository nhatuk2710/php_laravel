<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function login(){
        return view('login');
    }

    public function home(){
        $product = Product::all();
        
        return view("home-page",['product'=> $product]);

    }



}
