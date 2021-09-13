<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;

use App\Models\Kanji5q as ModelsKanji5q;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\SupportHash;

class Kanji5qController extends Controller
{
    public function index()
    {
        return view('kanji/kanjilogin5q');
    }  
      
    
    public function registration()
    {
        return view('auth.registration');
    }
    
    public function postLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $username  = $request->get('username');
        echo $username;
   
        $credentials = $request->only('username', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboardkanji')
                        ->withSuccess('You have Successfully loggedin');
        }
        
  
        return redirect("kanjilogin5q")->withSuccess('Oppes! You have entered invalid credentials');
    }
    
 function postRegistration(Request $request)
    {  
        $request->validate([
          'username' => 'required',
          'password' => 'required|min:6',
          'email' => 'required|email|unique:users',
          'username' => 'required',
          'surname' => 'required',
          'city' => 'required',
          'country' => 'required',
 
 
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
        // dd ($data);
         
        return redirect("dashboardkanji")->withSuccess('Great! You have Successfully loggedin');
    }
    
    
    public function dashboardkanji()
    {
        if(Auth::check()){
            return view('dashboardkanji');
        }
  
        return redirect("kanjilogin5q")->withSuccess('Opps! You do not have access');
    }
    
    
    public function create(array $data)
    {
      return User::create([
        'username' => $data['username'],
        'password' => Hash::make($data['password']),
        'email' => $data['email'],
        'firstname' => $data['firs                  tname'],
        'surname' => $data['surname'],
        'city' => $data['city'],
        'country' => $data['country'],
      
      ]);
    }
    
    
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect("kanjilogin");
    }

// public  function index()
// {
//     $Kanji5q= User::all()->toArray();
//     dd($Kanji5q);
// }
}
