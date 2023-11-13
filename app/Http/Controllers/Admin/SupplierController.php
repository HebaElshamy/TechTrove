<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    //
    public function index(){
        $suppliers = Supplier::all();
        return view("Admin.inventory.suppliers",compact("suppliers"));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile_no' => 'required|string|unique:suppliers',
            'email' => 'required|string|unique:suppliers',
            'address' => 'required|string',
        ]);
        Supplier::create([
            'name'=> $request->name,
            'mobile_no'=> $request->mobile_no,
            'email'=> $request->email,
            'address'=> $request->address,

        ]);
        return redirect()->route('all.suppliers')->with('message','Added successfully');

    }
    public function update(Request $request,$id){
        $supplier = Supplier::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'mobile_no' => 'required|string|unique:suppliers,mobile_no,' . $supplier->id,
            'email' => 'required|string|unique:suppliers,email,' . $supplier->id,
            'address' => 'required|string',
        ]);

        $supplier->update([
            'name' => $request->name,
            'mobile_no' => $request->mobile_no,
            'email' => $request->email,
            'address' => $request->address,
        ]);

        return redirect()->route('all.suppliers')->with('info', 'Modified successfully');
    }
    public function destroy($id){
        Supplier::findOrfail($id)->delete();
        return redirect()->route('all.suppliers')->with('error','Deleted successfully');

    }

}

