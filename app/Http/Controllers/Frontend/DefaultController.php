<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DefaultController extends Controller
{
    function index(){
    	return view('frontend.index');
    }
    function shop(){
    	return view('frontend.shop');
    }
    function product(){
    	return view('frontend.product');
    }
    function blog(){
    	return view('frontend.blog');
    }
    function article(){
    	return view('frontend.article');
    }
}
