<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\InventoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SupplierController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {

//     return view('Admin.index');
// });
Route::get('/', [HomeController::class,'index'])->name('home');

//admin Routes
//Category Route
Route::controller(CategoryController::class)->group(function () {
    Route::get('/categories', 'index')->name('all.category');
    Route::post('/categories', 'store')->name('store.category');
    Route::put('/categories/{id}', 'update')->name('update.category');
    Route::delete('/categories/{id}', 'destroy')->name('destroy.category');
});
//Product Route
Route::controller(ProductController::class)->group(function () {
    Route::get('/products','index')->name('all.product');
    Route::get('/product','create')->name('add.product');
    Route::post('/product','store')->name('store.product');
    Route::get('/product/{id}','edit')->name('edit.product');
    Route::get('/oneproduct/{id}','show')->name('show.product');
    Route::put('/product/{id}','update')->name('update.product');
    Route::delete('/deleteproduct/{id}','destroy')->name('destroy.product');
});
//Inventory Management Route
Route::controller(InventoryController::class)->group(function () {
    Route::get('/inventory','index')->name('inventory.management');
});

//Suppliers
Route::controller(SupplierController::class)->group(function () {
    Route::get('/suppliers','index')->name('all.suppliers');

    Route::post('/suppliers', 'store')->name('store.supplier');
    Route::put('/suppliers/{id}', 'update')->name('update.supplier');
    Route::delete('/suppliers/{id}', 'destroy')->name('destroy.supplier');
});

require __DIR__.'/auth.php';
