<?php

namespace App\Http\Controllers;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function create()
{
    $data=Brand::all();
    return view('brand.create',compact('data'));
}
public function store(Request $request)
{$request->validate(

    ['name'=>'required',
 'user_id'=>'required',
    'product_id'=>'required'
    ]); 

    $data=new Brand();
    $data->name=$request->name;
    $data->user_id=$request->user_id;
    $data->product_id=$request->product_id;
    // dd($data);
    $data->save();
   
return redirect()->route('brand.index')->with('message',"Data Store Successfully!");
}
public function edit($id)
{
    $data=Brand::find($id);

    return view('brand.edit',compact('data'));
}
public function index() 
{ $data = Brand::all();
//$data=Product::all();
    return view('brand.index',compact('data'));
} 

    public function delete($id)
{
    $data=Brand::find($id);
    $data->delete();
    return redirect()->route('brand.index')->with('message',"Data Delete Successfully!");
}
public function update(Request $request,$id)
{
    $data=Brand::find($id);
    $data->name=$request->name;
    $data->user_id=$request->user_id;
    $data->product_id=$request->product_id;
    //dd($data);
$data->save();
    return redirect()->route('brand.index')->with('message',"Data Update Successfully!");
}


}
