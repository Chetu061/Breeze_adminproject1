<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::get('master', function () {
    return view('layouts.master');
});
//project view
//not work because give nickname in  welcome route
Route::get('admin',[CategoryController::class,'admin']) ->name('admin');

//category route

Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('category/index',[CategoryController::class,'index'])->name('category.index');
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');

//product route 
Route::get('product/create',[ProductController::class,'create'])->name('product.create');
Route::post('product/store',[ProductController::class,'store'])->name('product.store');
 Route::get('product/index',[ProductController::class,'index'])->name('product.index');
 Route::get('product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('product/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::get('product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');

//cms route
Route::get('cms/create',[CmsController::class,'create'])->name('cms.create');
Route::post('cms/store',[CmsController::class,'store'])->name('cms.store');
 Route::get('cms/index',[CmsController::class,'index'])->name('cms.index');
 Route::get('cms/edit/{id}',[CmsController::class,'edit'])->name('cms.edit');
Route::post('cms/update/{id}',[CmsController::class,'update'])->name('cms.update');
Route::get('cms/delete/{id}',[CmsController::class,'delete'])->name('cms.delete');
//order controller
Route::get('order/index',[OrderController::class,'index'])->name('order.index');