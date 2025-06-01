<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Orderdetails;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
        if (Auth::user()->type==1 ) {
            $carts = Cart::where('user_id', Auth::id())->get();
            if (count($carts) > 0) {
                return view('buyer.order');
            }
            else{
                return redirect()->back();
            }
        }else{
            return redirect()->back();
        }
    }
    public function store(OrderRequest $request){
        if (Auth::user()->type==1 ) {
            $carts = Cart::where('user_id', Auth::id())->get();
            if (count($carts) > 0) {
                $total = 0;
                foreach ($carts as $cart) {
                    $total += $cart->sum;
                }
                $order = Order::create([
                    'user_id' => Auth::id(),
                    'username' => $request->username,
                    'phone' => $request->phone,
                    'address' => $request->address,
                    'order_count' => count($carts),
                    'total' => $total
                ]);
                foreach ($carts as $cart) {
                    $product=Product::find($cart->product_id);
                    $new_qnt=$product->qnty_sold + $cart->qnt;
                    $product->update(['qnty_sold' => $new_qnt]);
                    Orderdetails::create([
                        'order_id' => $order->id,
                        'product_id' => $cart->product_id,
                        'qnt' => $cart->qnt,
                        'sum' => $cart->sum

                    ]);


                    $cart = Cart::find($cart->id);
                    $cart->delete();
                }


                return redirect()->route('front.cart')->with(['success' => 'Order Done Success']);


            } else {
                return redirect()->back()->with(['error' => 'Not Found Cart']);
            }
        }else{
            return redirect()->back();
        }

    }
}
