<?php

namespace App\Http\Controllers;

use App\Models\Brand;


use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function create(Request $reques)
    { $brand=Brand::all();
       return view('brand.create',compact('brand')); 
    }
    
}
