<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\SupportHash;
use App\Models\User;
use App\Models\SequenceHiragana;


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

    // $messages = [
    //     'username.required' => 'username is required!',
    //     'password.required' => 'Password is required!'
    // ];
    //    $request->validate([
    //        'username' => 'required',
    //        'password' => 'required',
    //    ], $messages);
     
       $userName = $request->get('username');
       $passWord = $request->get('password');

       if($userName == null || $userName == ""){
            return Redirect::back()->withInput($request->all())->withErrors(
                [
                'username' => 'username is required!',
                ]);
       }
        if($passWord == null || $passWord == ''){
            return Redirect::back()->withInput($request->all())->withErrors(
                [
                'username' => 'Password is required!',
                ]);
        }
        //$user = User::where('username', $request->username)->firstOrFail();
        $user = User::where('username', $request->username)->first();

        if($user == null){
            return Redirect::back()->withInput($request->all())->withErrors(
                [
                'username' => 'username or password is incorrect!',
                'password' => 'username or password is incorrect!'
                ]);            
        }

        if($user->password === $passWord) {
            //Auth::login($user, true);
            $request->session()->put('userName', $request->get('username'));
            return redirect()->intended('dashboard')->withSuccess('You have Successfully loggedin');
        }else{
            return Redirect::back()->withInput($request->all())->withErrors(
                [
                'password' => 'password is incorrect!'
                ]);
        }
    //    $credentials = $request->only('username', 'password');
    //    if (Auth::attempt($credentials)) {
    //         $request->session()->put('userName', $request->get('username'));
    //         return redirect()->intended('dashboard')
    //                    ->withSuccess('You have Successfully loggedin');
    //    }
    //    return Redirect::back()->withInput($request->all())->withErrors(
    //     [
    //         'username' => 'username or password is incorrect !',
    //         'password' => 'username or password is incorrect!'
    //     ]
    //    );

   }

   function postRegistration(Request $request,User $data)           
 {
    $request->validate([
   'username' => 'required|alpha_num|unique:user|regex:/(^[A-Za-z0-9 ]+$)+/',
   'password' => 'required|min:6|regex:/^[ A-Za-z0-9_!"@#$%^&()*]*$/',
   'email' => 'required|email:rfc,dns,filter',
   'firstname' => 'required|regex:/(^[A-Za-z0-9 -]+$)+/',
   'surname' => 'required|regex:/(^[A-Za-z0-9 -]+$)+/',
   'city' => 'required|regex:/(^[A-Za-z0-9 -]+$)+/',
   'country' => 'required|regex:/(^[A-Za-z0-9 -]+$)+/',
   ]);

   $data = $request->all();

   $request->session()->put('userName', $request->get('username'));
   
   $check = $this->create($data);

   return redirect("dashboard")->withSuccess('?????????????????????(???????????????)???????????????????????????????????? Great! You have Successfully loggedin.');

}

    public function create(array $data)
    {
        return User::create([
            'userid' => SequenceHiragana::issue(),
            'username' => $data['username'],
            //'password' => Hash::make($data['password']),
            'password' => $data['password'],
            'email' => $data['email'],
            'firstname' => $data['firstname'],
            'surname' => $data['surname'],
            'city' => $data['city'],
            'country' => $data['country'],
            'payment' => 0,
        ]);    
    }

   public function dashboard()
   {
       if(Auth::check()){
           return view('dashboard');
       }
 
       return redirect("login")->withSuccess('Opps! You do not have access');
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

