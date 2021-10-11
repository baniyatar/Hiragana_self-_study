<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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

    $messages = [
        'username.required' => 'username is required!',
        'password.required' => 'Password is required!'
    ];
       $request->validate([
           'username' => 'required',
           'password' => 'required',
       ], $messages);
     
       
  
       $credentials = $request->only('username', 'password');
       if (Auth::attempt($credentials)) {
           return redirect()->intended('dashboard')
                       ->withSuccess('You have Successfully loggedin');
       }
     
      
       return Redirect::back()->withInput($request->all())->withErrors(
        [
            'username' => 'username or password is incorrect !',
            'password' => 'username or password is incorrect!'
        ]
    );
       
  
   }


   function postRegistration(Request $request,User $data)
 {
    $request->validate([
   'username' => 'required|alpha|unique:user|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
   'password' => 'required|min:6|regex:([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)',
   'email' => 'required|email:rfc,dns',
   'firstname' => 'required',
   'surname' => 'required',
   'city' => 'required',
   'country' => 'required',
   ]);

   $data = $request->all();
   // echo "aaa";

   // dd ($data );
   // echo ("bbb");

   $check = $this->create($data);

   return redirect("dashboard")->withSuccess('ひらがなの勉強(べんきょう)システムにつながりますGreat! You have Successfully loggedin');
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

        public function checkEmail(Request $request){
            $email = $request->input('email');
            $isExists = User::where('email',$email)->first();
            if($isExists){
                return response()->json(array("exists" => true));
            }else{
                return response()->json(array("exists" => false));
            }
        }
             
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

