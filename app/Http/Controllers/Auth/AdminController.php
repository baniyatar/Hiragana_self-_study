<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

use App\Models\Admin;

class AdminController extends Controller
{
    public function index()
    {
        return view('auth.login');
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
   
        $credentials = $request->only('username', 'password','password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admindashboard')
                        ->withSuccess('You have Successfully loggedin');
        }
        
  
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
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
         
        return redirect("admindashboard")->withSuccess('Great! You have Successfully loggedin');
    }
    
    
    public function admindashboard()
    {
        if(Auth::check()){
            return view('admindashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }
    
    
    public function create(array $data)
    {
      return User::create([
        'username' => $data['username'],
        'password' => Hash::make($data['password']),
        'email' => $data['email'],
        'firstname' => $data['firstname'],
        'surname' => $data['surname'],
        'city' => $data['city'],
        'country' => $data['country'],
      
      ]);
    }
    
    
    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect("login");
    }
}
