<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function register(Request $request)
    {

        if ($request->method() === 'POST') {
            $user = $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                 'password' => 'required|confirmed'
            ]);
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);


            if ($user) {
                return redirect()->route('login')->with('success', 'Registered Successfully!');
            } else {
                return back()->with('error', 'Registeration Failed');
            }
        }
    }
    public function login(Request $request)
    {

        if ($request->method() === 'POST') {
            $user = $request->validate([
                'email' => 'required|email',
                'password' => 'required'
            ]);

            if (Auth::attempt($user)) {
                return redirect()->route('index')->with('success', 'Login Successfully!');
            } else {
                return back()->with('error', 'Login Failed');
            }
        }
    }
   
}
