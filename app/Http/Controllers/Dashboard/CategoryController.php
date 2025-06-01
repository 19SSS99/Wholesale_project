<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\ContactRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Validator;

class CategoryController extends Controller
{
    public function index()
    {
        $categories=Category::get();

        return view('dashboard.categories.index',compact('categories'));

    }
    public function create()
    {
        return view('dashboard.categories.create');
    }
    public function store(CategoryRequest $request)
    {
        try {


            $category = Category::create([
                'name'=>$request->name,
            ]);
            return redirect()->route('categories.index')->with(['success' => 'Add success']);

        }catch (Exception $ex) {

            return redirect()->route('categories.index')->with(['error' => 'There is problem']);
        }


    }
    public function edit($id)
    {


        $category=Category::orderBy('id','DESC')->find($id);
        if(!$category)
            return route('categories.index')->with(['error'=>'category not found']);
        return view('dashboard.categories.edit',compact('category'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $validator=  Validator::make($request->all(),[
            'name' => 'min:1',

        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInputs($request->all());
        }
        try {
            $category = Category::find($id);
            if (!$category)
                return redirect()->route('categories.index')->with(['error' => 'there is problem']);



            $category->update($request->all());



            return redirect()->route('categories.index')->with(['success' => 'update success']);

        }
        catch (\Exception $ex ){
            return redirect()->route('categories.index')->with(['error' => 'there is problem']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $category=Category::find($id);
        if(!$category){
            return redirect()->route('categories.index')->with(['error' => 'Category not found']);
        }
        // magic method to delete path of image
        $category->delete();


        return redirect()->back()->with(['success' => 'Delete success']);



    }
}
