<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\SupportHash;

class AuthController extends Controller
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
  
       $credentials = $request->only('username', 'password');
       if (Auth::attempt($credentials)) {
           return redirect()->intended('dashboard')
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
    //    echo "aaa";

    //    dd ($data );
    //    echo ("bbb");

       $check = $this->create($data);
        
       return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
   }
   
   
   public function dashboard()
   {
       if(Auth::check()){
           return view('dashboard');
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

        //   public function edit($id, Request $request)
        //   { $this->validate($request, [
        //   'email' => 'required|email',
        //   'password' => 'required|confirmed|min:6',
        //   ]);
        //   $userData = $request->only(["email","password"]);
        //   $userData['password'] = Hash::make($userData['password']);
        //   User::find($id)->update($userData);
        //   Session::flash('success_msg', 'User details updated successfully!');
        //   return redirect()->route('admin.user');
        //   }


             
   public function logout(Request $request) {
       $request->Session()->flush();
       $request->session()->regenerate();
        Auth::logout();

       return Redirect('/login');
   }
   public function main(){

    return view('main');
    
     }
}

