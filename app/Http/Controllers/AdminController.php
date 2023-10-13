<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function makelogin(Request $req)
    {
      $data = ['email'=> $req->email,
            'password'=> $req->password,
            'role'=> 'admin'];
            
      if(Auth::attempt($data))
      {
        print_r($data);echo 'hiii';die;
        return back()->withErrors(['message'=>'invalid email or password']);
      }
      else
      { 
        
       // echo 'hiii';die;
        return redirect()->route('admin.dashboard');
      }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
