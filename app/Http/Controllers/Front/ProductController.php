<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id){
        $products = Product::where('category_id',$id)->paginate(9);
        return view('buyer.products.all', compact('products'));
    }
    public function details($id){
        $product = Product::find($id);
        return view('buyer.products.details', compact('product'));
    }
}
