<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class Contactcontroller extends Controller
{
    public function add(Request $request)
    {
      if ($request->method() === 'POST') {
      $contacts = $request->validate([
          'fullname' => 'required',
          'email' => 'required',
          'phonenumber' => 'required',
          'message' => 'required',
  
        ]);
      $contacts = Contact::create([
          'fullname' => $request->fullname,
          'email' => $request->email,
          'phonenumber' => $request->phonenumber,
          'message' => $request->message,
        ]);
   
  
        if ($contacts) {
          return redirect()->route('contact')->with('success', 'contact added successfully!');
        } else {
          return back()->with('error', 'Contact not added!');
        }
 
    }
}
}
