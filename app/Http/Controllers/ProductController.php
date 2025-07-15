<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view("products", ["products" => $products]);
    }
    public function confirm(Request $request){
        $product_id = $request->input('id');
        
        $product = Product::find($product_id);

        if(!$product) return view("404");

        return view("confirm", ["product" => $product]);
    }
}
