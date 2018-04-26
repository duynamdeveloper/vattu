<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Brand;

class ProductController extends Controller
{
    public function index(){
    	return view('backend.product.index');
    }
    public function ajaxGetProducts(){
    	$product = Product::with(['category','brand'])->get();
    	return response()->json($product);
    }
}
