<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view("Admin.products.products",compact("products"));
    }
    public function store(Request $request){
        $this->validate($request, []);
    }
    public function update(Request $request, $id){
    }
    public function destroy($id){

    }
}
