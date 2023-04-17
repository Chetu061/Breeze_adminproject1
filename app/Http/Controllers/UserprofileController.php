<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserprofileController extends Controller
{
    public function index() 
    { 
       $form=User::all();
        return view('userprofile.index',compact('form'));
    } 
    public function store(Request $request)
{
// dd($request->all()); 

    $form=new User();
    $form->name=$request->name;
    $form->email=$request->email;
    $form->password=$request->password;
    if ($request->hasFile('image')) {
        $file = $request->image;
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $file->move('uploads', $filename);
        $form->image = $filename;
    }
    $form->save();

    return redirect()->route('userprofiles')->with('message',"Data Store Successfully!");
}
}
