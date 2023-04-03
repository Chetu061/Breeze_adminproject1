<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BrandController extends Controller
{
    public function create()
{
    $product = Product::all();//relation
    $user=User::all();//relation
    // $data=Brand::all();
    // dd($product);
    return view('brand.create',compact('product','user'));
}
public function store(Request $request)
{
$request->validate(
['name'=>'required',
  'user_id'=>'required',
    'product_id'=>'required'
    ]); 
 $data=new Brand();
    $data->name=$request->name;
 $data->user_id=$request->user_id;
 $data->product_id=$request->product_id;
    $data->save();
   //dd($data);
return redirect()->route('brands')->with('message',"Data Store Successfully!");
}
public function edit($id)
{
    $data=Brand::find($id);
    $product = Product::all(); //relation changedouble

    return view('brand.edit',compact('data','product'));
}
public function index() 
{ //$data = Brand::all();
    $data = Brand::with('product')->get();//relation
//$data=Product::all();
    return view('brand.index',compact('data'));
} 

    public function delete($id)
{
    $data=Brand::find($id);
    $data->delete();
    return redirect()->route('brands')->with('message',"Data Delete Successfully!");
}
public function update(Request $request,$id)
{
    $data=Brand::find($id);
    $data->name=$request->name;
    $data->user_id=$request->user_id;
    $data->product_id=$request->product_id;
    //dd($data);
$data->save();
    return redirect()->route('brands')->with('message',"Data Update Successfully!");
}

}
