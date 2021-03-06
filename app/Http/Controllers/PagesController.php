<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class PagesController extends Controller
{
    public function index()
    {
    	return view('pages.index');
    }


    public function contact()
    {
    	return view('pages.contact');
    }


    public function products()
    {
    	$products = Product::orderby('id','desc')->get();
    	return view('pages.products.index')->with('products', $products);
    }
}
