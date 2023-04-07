<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() 
{ 
   $contact=Contact::all();
    return view('contact_form.index',compact('contact'));
} 
public function store(Request $request)
{
//dd($request->all()); only check

    $contact=new Contact();
    $contact->fname=$request->fname;
    $contact->lname=$request->lname;
    $contact->email=$request->email;
    $contact->subject=$request->subject;
    $contact->message=$request->message;
    $contact->save();

    return redirect()->route('contacts')->with('message',"Data Store Successfully!");
}





}