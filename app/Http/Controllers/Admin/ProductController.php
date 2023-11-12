<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view("Admin.products.products",compact("products"));
    }
    public function create(){
        $categories =Category::select('id','name')->get();
        return view("Admin.products.addproduct",compact("categories"));
    }
    public function store(Request $request){
        // dd($request->all());

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:hold,available,canceled',
            'stock' => 'required|integer|min:0',
            'min_stock' => 'required|integer|min:0',
            'discount' => 'required|numeric|min:0',
            'category' => 'required|numeric|min:0|exists:categories,id',
            'gallery' => 'nullable|string',
            'price' => 'required|numeric|min:0',

        ]);
        Product::create([
            'name'=> $request->name,
            'description'=> $request->description,
            'status'=> $request->status,
            'stock'=> $request->stock,
            'min_stock'=> $request->min_stock,
            'discount'=> $request->discount,
            'category_id'=> $request->category,
            'gallery'=> $request->gallery,
            'price'=> $request->price,
        ]);
        return redirect()->route('all.product')->with('message','Added successfully');

    }
    public function show($id){
        $product = Product::findOrFail($id);
        return view("Admin.products.viewproduct",compact("product"));
    }
    public function edit($id){
        $product = Product::findOrFail($id);
        $categories =Category::select('id','name')->get();
        return view('Admin.products.editproduct',compact('product','categories'));
    }
    public function update(Request $request, $id){
        $product = Product::findOrFail($id);
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:hold,available,canceled',
            'stock' => 'required|integer|min:0',
            'min_stock' => 'required|integer|min:0',
            'discount' => 'required|numeric|min:0',
            'category' => 'required|numeric|min:0|exists:categories,id',
            'gallery' => 'nullable|string',
            'price' => 'required|numeric|min:0',

        ]);
        $product->update([
            'name'=> $request->name,
            'description'=> $request->description,
            'status'=> $request->status,
            'stock'=> $request->stock,
            'min_stock'=> $request->min_stock,
            'discount'=> $request->discount,
            'category_id'=> $request->category,
            'gallery'=> $request->gallery,
            'price'=> $request->price,
        ]) ;
        return redirect()->route('all.product')->with('info','Modified successfully');

    }
    public function destroy($id){
        
        Product::findOrfail($id)->delete();
        return redirect()->route('all.product')->with('error','Deleted successfully');



    }
}
