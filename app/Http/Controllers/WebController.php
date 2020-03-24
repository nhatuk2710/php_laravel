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

    public function product(){
        $product =Product::find(1)->get(); //tra ve 1 object theo id
        $category_product= Product::where("category_id",$product->category_id)->where('id',"!=",$product->id)->take(10)->get();
        $brand_product= Product::where("brand_id",$product->brand_id)->where('id',"!=",$product->id)->take(10)->get();
        return view('product',['product'=>$product,'category_product'=>$category_product,'brand_product'=>$brand_product]);
    }

    public function listproduct($id){
        $listproduct = Product::where("category_id",$id)->take(3)->orderBy('created_at','desc')->get();
        return view('listproduct',['listproduct'=>$listproduct]);
    }
    public function danhmuc(){
        return view("danhmuc");
    }


}
