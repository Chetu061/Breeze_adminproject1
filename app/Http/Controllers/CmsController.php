<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cms;
use Illuminate\Http\Request;

class CmsController extends Controller
{

    public function create()
{
    $data=Cms::where('status','=',1)->get();
    return view('cms.create',compact('data'));
}
public function store(Request $request)
{$request->validate(
    ['title'=>'required',
    'description'=>'required',
    'images'=>'required',
    'status'=>'required'
    
    ]); 
    $data=new Cms();
    $data->title=$request->title;
    $data->description=$request->description;
    if($files=$request->file('images')){
        foreach($files as $file){
            $name=$file->getClientOriginalName();
        $file->move('uploads/car/',$name);
        $images[]=$name;
        }
    }
    $data->images =   implode("|",$images);
    $data->status =$request->status; 
     //dd($data);
    $data->save();
   
return redirect()->route('cms')->with('message',"Data Store Successfully!");
}

public function index() 
{ $data =Cms::with('category')->get();
//$data=Product::all();
//dd($data);
    return view('cms.index',compact('data'));
} 
public function edit($id)
{
    $data=Cms::find($id);

    $cust=Category::all();
    return view('cms.edit',compact('data','cust'));
}
public function update(Request $request,$id)
{
    $data=Cms::find($id);
    $data->title=$request->title;
    $data->description=$request->description;
     if ($request->hasFile(key: 'images')) 
    {
        $file = $request->images;
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads', $filename);
        $data->images= $filename;
    }
    $data->status= $request->status;
    //dd($data);
    $data->save();
    return redirect()->route('cms')->with('message',"Data Update Successfully!");
}public function delete($id)
{
    $data=Cms::find($id);
    $data->delete();
    return redirect()->route('cms')->with('message',"Data Delete Successfully!");
}

}  


