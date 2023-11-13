<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    //
    public function index()
    {
        $product_stock =Product::all();
        return view("Admin.inventory.inventory_management", compact("product_stock"));
    }
}
