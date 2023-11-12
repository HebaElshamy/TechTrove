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
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:hold,available,canceled,in_stock,out_stock',
            'stock'=> 'required|integer',
            'min_stock'=> 'nullable|integer',
            'discount'=> 'nullable|integer',
            'category'=>'required|integer',
            'gallery'=> 'nullable|string',
            'price'=> 'required|integer',

        ]);
        $product = Product::create($request->all());

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
        $this->validate($request, []);

    }
    public function destroy($id){

    }
}
