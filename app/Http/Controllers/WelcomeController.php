<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Welcome;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cms;

class WelcomeController extends Controller
{
    public function welcome()
    {
        
        $products=Product::all();
        $latest=Product::latest()->first();
        $category=Category::all();
return view('welcome',compact('products','latest','category'));      
    }
   
    public function admin()
    {
        return view('welcome.admin');
    }
    public function home()
    {
        return view('welcome.home');
    }
    public function contact()
    {
        return view('welcome.contact');
    }
    public function about()
    {
        $latest=Product::latest()->first();
        return view('welcome.about',compact('latest'));

    }
    public function shop()
    { $products=Product::paginate(3);
        $category=Category::all();
        return view('welcome.shop',compact('category','products'));
    }
    public function cart()
    {
        return view('welcome.cart');

    }
    public function checkout()
    {
        return view('welcome.checkout');

    }
    public function thankyou()
    {
        return view('welcome.thankyou');

    }
    public function shopsingle()
    {
        return view('welcome.shopsingle');

    }
    public function userprofile()
    {
        return view('welcome.userprofile');

    }
    
}


