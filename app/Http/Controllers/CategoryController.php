<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
public function admin()
{
    return view('admin');
}
public function index()
{
    
$cate=Category::all();
return view('category.index',compact('cate'));//view madhe loaction nusar path
}

public function create()
{
    return view('category.create');
}


public function store(Request $request )
{ 
    $request->validate(
    ['title'=>'required',
    'status'=>'required'
    ]);
    $cate=new Category();
    $cate->title=$request->title;
    $cate->status=$request->status;
    //dd($user);

    $cate->save();
    return redirect()->route('categories')->with('message',"Data Added Successfully!");//url nusar path
}
public function edit($id)
{
    $cate=Category::find($id);
    return view('category.edit',compact('cate'));
}
public function update(Request $request,$id)
{
    $cate=Category::find($id);
    $cate->title=$request->title;
    $cate->status=$request->status;
    //dd($user);

    $cate->save();
    return redirect()->route('categories')->with('message',"Data Update Successfully!");
}
public function delete($id)
{
    $cate=Category::find($id);
    $cate->delete();
    return redirect()->route('categories')->with('message',"Data Delete Successfully!");
}


}


