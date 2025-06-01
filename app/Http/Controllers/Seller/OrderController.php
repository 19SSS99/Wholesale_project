<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
        if (Auth::user()->type==2) {
            $products = Product::with(['category'])->where('user_id',Auth::id())->where('qnty', '!=', 0)->whereColumn('qnty', 'qnty_sold')->get();
            return view('seller.orders.index',compact('products'));
        }
        else{
            return redirect()->back();
        }

    }
    public function show($id){
        if (Auth::user()->type==2) {
            $product=Product::with(['order_details'])->find($id);
            return view('seller.orders.show',compact('product'));
        }
        else{
            return redirect()->back();
        }
    }

}
