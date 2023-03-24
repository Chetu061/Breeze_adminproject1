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
    'image'=>'required',
    'status'=>'required'
    
    ]); 
    $data=new Cms();
    $data->title=$request->title;
    $data->description=$request->description;


    $validatedData = $request->validate([
        'images.*' => 'required|image|max:2048'
    ]);

    foreach ($request->file('images') as $image) {
        $filename = $image->getClientOriginalName();
        $path = $image->store('public/images');
        Cms::create([
            'filename' => $filename,
            'path' => $path
           
        ]);
    }
    return redirect()->back()->with('success', 'Images uploaded successfully.');


 // if ($request->hasFile(key: 'image')) {
    //     $file = $request->image;
    //     $extension = $file->getClientOriginalExtension();
    //     $filename = time() . '.' . $extension;
    //     $file->move('uploads', $filename);
    //     $data->image = $filename;
    // }
    $data->status =$request->status; 
    $data->save();
    dd($data);
return redirect()->route('cms.index')->with('message',"Data Store Successfully!");
}

public function index() 
{ $data = Cms::with('category')->get();
//$data=Product::all();
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
    
    
    
    if ($request->hasFile(key: 'image')) 
    {
        $file = $request->image;
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads', $filename);
        $data->image = $filename;
    }
    $data->status= $request->status;
    //dd($data);

    $data->save();
    return redirect()->route('cms.index')->with('message',"Data Update Successfully!");
}public function delete($id)
{
    $data=Cms::find($id);
    $data->delete();
    return redirect()->route('cms.index')->with('message',"Data Delete Successfully!");
}

}  


