<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserprofileController;



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

Route::get('/',[WelcomeController::class,'welcome'])->name('welcome');

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
Route::get('master1', function () {
    return view('layouts.master1');
});

//project view
//not work because give nickname in  welcome route
Route::get('headfoot',[CategoryController::class,'headfoot']) ->name('headfoot');

//category route

Route::get('category/create',[CategoryController::class,'create'])->name('category.create');
Route::post('category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('categories',[CategoryController::class,'index'])->name('categories');
Route::get('category/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('category/update/{id}',[CategoryController::class,'update'])->name('category.update');
Route::get('category/delete/{id}',[CategoryController::class,'delete'])->name('category.delete');


//product route 
Route::get('product/create',[ProductController::class,'create'])->name('product.create');
Route::post('product/store',[ProductController::class,'store'])->name('product.store');
 Route::get('products',[ProductController::class,'index'])->name('products');
 Route::get('product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('product/update/{id}',[ProductController::class,'update'])->name('product.update');
Route::get('product/delete/{id}',[ProductController::class,'delete'])->name('product.delete');


//cms route
Route::get('cms/create',[CmsController::class,'create'])->name('cms.create');
Route::post('cms/store',[CmsController::class,'store'])->name('cms.store');
Route::get('cms',[CmsController::class,'index'])->name('cms');
Route::get('cms/edit/{id}',[CmsController::class,'edit'])->name('cms.edit');
Route::post('cms/update/{id}',[CmsController::class,'update'])->name('cms.update');
Route::get('cms/delete/{id}',[CmsController::class,'delete'])->name('cms.delete');
//Softdelete route
// Route::get('cms/trash',[CmsController::class,'trash'])->name('cms.trash');
// Route::get('cms/forceDelete/{id}',[CmsController::class,'forceDelete'])->name('cms.forceDelete');
// Route::get('cms/restore/{id}',[CmsController::class,'restore'])->name('cms.restore');

//order controller
Route::get('orders',[OrderController::class,'index'])->name('orders');

//brand route
Route::get('brand/create',[BrandController::class,'create'])->name('brand.create');
Route::post('brand/store',[BrandController::class,'store'])->name('brand.store');
 Route::get('brands',[BrandController::class,'index'])->name('brands');
 Route::get('brand/edit/{id}',[BrandController::class,'edit'])->name('brand.edit');
Route::post('brand/update/{id}',[BrandController::class,'update'])->name('brand.update');
Route::get('brand/delete/{id}',[BrandController::class,'delete'])->name('brand.delete');
//Softdelete route
// Route::get('brand/trash',[BrandController::class,'trash'])->name('brand.trash');
// Route::get('brand/forceDelete/{id}',[BrandController::class,'forceDelete'])->name('brand.forceDelete');
// Route::get('brand/restore/{id}',[BrandController::class,'restore'])->name('brand.restore');

//color route
Route::get('color/create',[ColorController::class,'create'])->name('color.create');
Route::post('color/store',[ColorController::class,'store'])->name('color.store');
 Route::get('colors',[ColorController::class,'index'])->name('colors');
 Route::get('color/edit/{id}',[ColorController::class,'edit'])->name('color.edit');
Route::post('color/update/{id}',[ColorController::class,'update'])->name('color.update');
Route::get('color/delete/{id}',[ColorController::class,'delete'])->name('color.delete');
//Softdelete route
// Route::get('color/trash',[ColorController::class,'trash'])->name('color.trash');
// Route::get('color/forceDelete/{id}',[ColorController::class,'forceDelete'])->name('color.forceDelete');
// Route::get('color/restore/{id}',[ColorController::class,'restore'])->name('color.restore');


//review route
Route::get('reviews',[ReviewController::class,'index'])->name('reviews');


Route::get('home',[WelcomeController::class,'home'])->name('welcome.home');
Route::get('contact',[WelcomeController::class,'contact'])->name('welcome.contact');
Route::get('about',[WelcomeController::class,'about'])->name('welcome.about');
Route::get('shop',[WelcomeController::class,'shop'])->name('welcome.shop');
Route::get('cart',[WelcomeController::class,'cart'])->name('welcome.cart');
Route::get('checkout',[WelcomeController::class,'checkout'])->name('welcome.checkout');
Route::get('thankyou',[WelcomeController::class,'thankyou'])->name('welcome.thankyou');
Route::get('shopsingle',[WelcomeController::class,'shopsingle'])->name('welcome.shopsingle');

Route::get('admin',[WelcomeController::class,'admin'])->name('welcome.admin');

//route of contact
Route::get('contacts',[ContactController::class,'index'])->name('contacts');
Route::post('contact_form/store',[ContactController::class,'store'])->name('contact_form.store');
//route of form
Route::get('userprofile',[WelcomeController::class,'userprofile'])->name('welcome.userprofile');
Route::get('userprofiles',[UserprofileController::class,'index'])->name('userprofiles');
Route::post('userprofile/store',[UserprofileController::class,'store'])->name('userprofile.store');