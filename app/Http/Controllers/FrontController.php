<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('index');
    }

    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function shop(){
        return view('shop');
    }
    public function produkinfo(){
        return view('produkinfo');
    }
}
