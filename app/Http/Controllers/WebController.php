<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function login(){
        return view('login');
    }

    public function home(){
        $product = [
            [
                'name'=>'Ship',
//                'image'=>'http://drive.google.com/open?id=1Vz1ENuuP_IQnskluyRLbIITrMKh5f1JD',
                'price'=>'$3999',
            ],
            [
                'name'=>'House',
//                'image'=>'img/portfolio/cake.png',
                'price'=>'$3999',
            ],
            [
                'name'=>'Ship',
//                'image'=>'http://drive.google.com/open?id=1Vz1ENuuP_IQnskluyRLbIITrMKh5f1JD',
                'price'=>'$3999',
            ],
            [
                'name'=>'Ship',
//                'image'=>'http://drive.google.com/open?id=1Vz1ENuuP_IQnskluyRLbIITrMKh5f1JD',
                'price'=>'$3999',
            ],
            [
                'name'=>'Ship',
//                'image'=>'http://drive.google.com/open?id=1Vz1ENuuP_IQnskluyRLbIITrMKh5f1JD',
                'price'=>'$3999',
            ],
            [
                'name'=>'Ship',
//                'image'=>'http://drive.google.com/open?id=1Vz1ENuuP_IQnskluyRLbIITrMKh5f1JD',
                'price'=>'$3999',
            ],
        ];
        return view("home-page",['product'=> $product]);

    }



}
