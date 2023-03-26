<?php

namespace App\Http\Controllers;
use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    public function create()
{
    $data=Color::all();
    return view('color.create',compact('data'));
}
public function store(Request $request)
{$request->validate(

    [ 'color_name'=>'required',
        'color_user_id'=>'required',
    'color_product_id'=>'required'
    ]); 
    $data=new Color();
    $data->color_name=$request->color_name;
    $data->color_user_id=$request->color_user_id;
    $data->color_product_id=$request->color_product_id;
    // dd($data);
    $data->save();
   
return redirect()->route('color.index')->with('message',"Data Store Successfully!");
}
public function edit($id)
{
    $data=Color::find($id);

    return view('color.edit',compact('data'));
}
public function index() 
{ $data = Color::all();
//$data=Product::all();
    return view('color.index',compact('data'));
} 

    public function delete($id)
{
    $data=Color::find($id);
    $data->delete();
    return redirect()->route('color.index')->with('message',"Data Delete Successfully!");
}
public function update(Request $request,$id)
{
    $data=Color::find($id);
    $data->color_name=$request->color_name;
    $data->color_user_id=$request->color_user_id;
    $data->color_product_id=$request->color_product_id;
    //dd($data);
$data->save();
    return redirect()->route('color.index')->with('message',"Data Update Successfully!");
}


}
