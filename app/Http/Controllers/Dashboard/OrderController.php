<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders=Order::get();
        return view('dashboard.orders.index',compact('orders'));
    }
    public function show($id){
        $order=Order::with(['order_details'])->find($id);
        return view('dashboard.orders.show',compact('order'));


    }
    public function destroy($id){
        $order=Order::with(['order_details'])->find($id);
        $order->order_details()->delete();
        $order->delete();
        return redirect()->back()->with(['success'=>'Delete Order Success']);
    }
}
