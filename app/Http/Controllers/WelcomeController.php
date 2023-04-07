<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Welcome;
use Illuminate\Http\Request;
use App\Models\Product;

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
        return view('welcome.about');

    }
    public function shop()
    {
        return view('welcome.shop');
    }
}


