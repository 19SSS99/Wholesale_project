<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class CartController extends Controller
{
    public function index(){
        if (Auth::user()->type==1 ) {
            $carts = Cart::where('user_id', Auth::id())->get();
            $total = 0;
            foreach ($carts as $cart) {
                $total += $cart->sum;
            }
            return view('buyer.cart', compact('carts', 'total'));
        }
        else{
            return redirect()->back();
        }
    }
    public function add_cart(Request $request){

        if (Auth::user()->type==1 ) {
            $validator = Validator::make($request->all(), [

                'qnt' => 'min:1|numeric',
                'product_id'=>'required',

            ]);
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInputs($request->all());
            }
            $product=Product::find($request->product_id);
            $tt=$product->qnty - $product->qnty_sold;

            if($request->qnt >$tt){
                return redirect()->back()->with(['error'=>'The required quantity is not available']);
            }
            $sum=($request->qnt * $product->price);

            $cart=Cart::create([
                'user_id'=>Auth::id(),
                'product_id'=>$request->product_id,
                'qnt'=>$request->qnt,
                'sum'=>$sum

            ]);
            return redirect()->back()->with(['success'=>'Add success to Cart']);
        }
        else{
            return redirect()->back();
        }
    }

    public function delete_all(){
        if (Auth::user()->type==1 ) {
            $carts = Cart::where('user_id', Auth::id())->get();

            if ($carts) {
                foreach ($carts as $cart) {
                    $cart = Cart::find($cart->id);
                    $cart->delete();
                }

            }
            return redirect()->back();
        }
        else {
            return redirect()->back();
        }
    }

    public function destroy($id){
        if (Auth::user()->type==1 ) {
        $cart=Cart::find($id);
        if($cart) {
            $cart->delete();
        }
        return redirect()->back();
    }else{
            return redirect()->back();
        }
    }



}
