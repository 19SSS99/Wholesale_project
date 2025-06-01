<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class ProductController extends Controller
{
    public function index(){
        if (Auth::user()->type==2 ) {
            $products = Product::with(['category'])->get();

            return view('seller.products.index', compact('products'));
        }else{
            return redirect()->back();
        }
    }
    public function create(){
        if (Auth::user()->type==2 ) {
            $categories=Category::get();
        return view('seller.products.create',compact('categories'));
        }else{
            return redirect()->back();
        }
    }
    public function store(ProductRequest $request)
    {
        if (Auth::user()->type==2 ) {
        try {
            $filename=uploadimage('products',$request->photo);
            $product = Product::create([
                'name'=>$request->name,
                'price'=>$request->price,
                'qnty'=>$request->qnty,
                'user_id'=>$request->user_id,
                'description'=>$request->description,
                'category_id'=>$request->category_id,
                'photo'=>$filename
            ]);
            return redirect()->route('products.index')->with(['success' => 'Add Product success']);

        }catch (Exception $ex) {

            return redirect()->route('products.index')->with(['error' => 'There is problem']);
        }
        }else{
            return redirect()->back();
        }


    }
    public function destroy($id)
    {

        $product=Product::find($id);
        if(!$product){
            return redirect()->route('products.index')->with(['error' => 'There is problem']);
        }
        // magic method to delete path of image
        $product->delete();


        return redirect()->back()->with(['success' => 'Delete Success']);



    }
    public function edit($id)
    {
        if (Auth::user()->type==2 ) {
            $categories=Category::get();
        $product=Product::orderBy('id','DESC')->find($id);
        if(!$product) {
            return route('products.index')->with(['error' => 'not found product']);
        }
        return view('seller.products.edit',compact('product','categories'));
        }else{
            return redirect()->back();
        }
    }
    public function update(Request $request, $id)
    {
        if (Auth::user()->type==2 ) {
        $validator=  Validator::make($request->all(),[
            'name' => 'min:2|',
            'price'=>'min:1|numeric',
            'qnty'=>'min:1|numeric',


        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
        try {
            $product = Product::find($id);

            if (!$product)
                return redirect()->route('products.index')->with(['error' => 'There is problem']);

            if($request->has('photo')) {

               // magic method to delete path of image
                $filename=uploadimage('products',$request->photo);// magic method to create path of image
                Product::where('id', $product->id)->update(['photo' => $filename]);

            }
if ($request->qnty > ($product->qnty-$product->qnty_sold ) && ($product->qnty-$product->qnty_sold ) !=0) {
    $val=$request->qnty -($product->qnty-$product->qnty_sold);
    $new=$product->qnty + $val;
    $product->update(['qnty'=>$new]);
    $product->update($request->except('photo', 'user_id','qnty'));
    return redirect()->route('products.index')->with(['success' => 'Edit Success']);

}
if ($request->qnty < ($product->qnty-$product->qnty_sold ) && ($product->qnty-$product->qnty_sold ) !=0) {
                $val=($product->qnty-$product->qnty_sold) - $request->qnty;
                $new=$product->qnty_sold +$val;

                $product->update(['qnty_sold'=>$new]);
                $product->update($request->except('photo', 'user_id','qnty'));
                return redirect()->route('products.index')->with(['success' => 'Edit Success']);

}
if (($product->qnty-$product->qnty_sold ) == 0) {

    $product->update($request->except('photo', 'user_id'));
    $product->update(['qnty_sold'=>0]);
    return redirect()->route('products.index')->with(['success' => 'Edit Success']);
}

            $product->update($request->except('photo', 'user_id','qnty'));
            return redirect()->route('products.index')->with(['success' => 'Edit Success']);
        }
        catch (\Exception $ex ){
            return redirect()->route('products.index')->with(['error' => 'There is problem']);
        }
        }else{
            return redirect()->back();
        }
    }

}
