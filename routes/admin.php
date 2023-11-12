<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ProductController;
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
Route::get('/categories', [CategoryController::class,'index'])->name('all.category');
Route::post('/categories', [CategoryController::class,'store'])->name('store.category');
Route::put('/categories/{id}', [CategoryController::class,'update'])->name('update.category');
Route::delete('/categories/{id}', [CategoryController::class,'destroy'])->name('destroy.category');
//Product Route
Route::get('/products', [ProductController::class,'index'])->name('all.product');
Route::post('/products', [CategoryController::class,'store'])->name('store.product');
Route::put('/products/{id}', [CategoryController::class,'update'])->name('update.product');
Route::delete('/products/{id}', [CategoryController::class,'destroy'])->name('destroy.product');

require __DIR__.'/auth.php';
