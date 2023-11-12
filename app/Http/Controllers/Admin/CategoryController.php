<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        return view("Admin.categories.categories",compact("categories"));
    }
    public function store(Request $request){
        // dd($requste->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:hold,canceled,available',
        ]);
        Category::create([
            'name'=> $request->name,
            'description'=> $request->description,
            'status'=> $request->status,

        ]);
        return redirect()->route('all.category')->with('message','Added successfully');
    }
    public function update(Request $request,$id){
        $cat = Category::findOrfail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:hold,canceled,available',
        ]);
        $cat->update([
            'name'=> $request->name,
            'description'=> $request->description,
            'status'=> $request->status,
        ]);

        return redirect()->route('all.category')->with('info','Modified successfully');
    }
    public function destroy($id){
        Category::findOrfail($id)->delete();
        return redirect()->route('all.category')->with('error','Deleted successfully');
    }

}
