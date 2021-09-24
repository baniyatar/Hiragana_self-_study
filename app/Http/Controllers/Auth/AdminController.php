<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;


class AdminController extends Controller
{
//     public function index()
//     {
//         return view('auth.login');
//     }  
      
    
//     public function registration()
//     {
//         return view('auth.registration');
//     }
    
//     public function postLogin(Request $request)
//     {
//         $request->validate([
//             'username' => 'required',
//             'password' => 'required',
//         ]);
//         $username  = $request->get('username');
//         echo $username;
   
//         $credentials = $request->only('username', 'password','password');
//         if (Auth::attempt($credentials)) {
//             return redirect()->intended('admindashboard')
//                         ->withSuccess('You have Successfully loggedin');
//         }
        
  
//         return redirect("login")->withSuccess('Opps! You have entered invalid credentials');
//     }
    
//  function postRegistration(Request $request)
//     {  
//         $request->validate([
//          'username' => 'required',
//           'password' => 'required|min:6',
//           'email' => 'required|email|unique:users',
//           'username' => 'required',
//           'surname' => 'required',
//           'city' => 'required',
//           'country' => 'required',
//         ]);
           
//         $data = $request->all();
//         $check = $this->create($data);
         
//         return redirect("admindashboard")->withSuccess('Great! You have Successfully loggedin');
//     }
    
    
//     public function admindashboard()
//     {
//         if(Auth::check()){
//             return view('admindashboard');
//         }
  
//         return redirect("login")->withSuccess('Opps! You do not have access');
//     }
    
    
    // public function create(array $data)
    // {
    //   return User::create([
    //     'username' => $data['username'],
    //     'password' => Hash::make($data['password']),
    //     'email' => $data['email'],
    //     'firstname' => $data['firstname'],
    //     'surname' => $data['surname'],
    //     'city' => $data['city'],
    //     'country' => $data['country'],
      
    //   ]);
    // }
    
    
    // public function logout() {
    //     Session::flush();
    //     Auth::logout();
  
    //     return Redirect("login");
    // }

 
 public function index(){
   
        $users= User::select('select* from user');
        return view ('show',['users'=>$users]);
  
        
        }
        




public function store(Request $request){
   $data = $request->except('_method','_token','submit');

   $validator = Validator::make($request->all(), [
   //    'name' => 'required|string|min:3',
   //    'description' => 'required|string|min:3',
   'username' => 'required',
   'password' => 'required|min:6',
   'email' => 'required|email|unique:users',
   'username' => 'required',
   'surname' => 'required',
   'city' => 'required',
   'country' => 'required',
   'payment'=>'',

   ]);

   if ($validator->fails()) {
      return redirect()->Back()->withInput()->withErrors($validator);
   }

   if($record = User::firstOrCreate($data)){
      Session::flash('message', 'Added Successfully!');
      Session::flash('alert-class', 'alert-success');
      return redirect()->route('users');
   }else{
      Session::flash('message', 'Data not saved!');
      Session::flash('alert-class', 'alert-danger');
   }

   return Back();
}

//Edit

public function edit($id){
   $users = User::find($id);
$users=USer::all();
   return view('users.edit')->with(compact('users',$users));
}

public function update(Request $request,$id){
   $data = $request->except('_method','_token','submit');

   $validator = Validator::make($request->all(), [
       'username' => 'required',
       'password' => 'required|min:6',
       'email' => 'required|email|unique:users',
       'username' => 'required',
       'surname' => 'required',
       'city' => 'required',
       'country' => 'required',
       'payment'=>'',
   ]);

   if ($validator->fails()) {
      return redirect()->Back()->withInput()->withErrors($validator);
   }
   $subject = User::find($id);

   if($subject->update($data)){

      Session::flash('message', 'Update successfully!');
      Session::flash('alert-class', 'alert-success');
      return redirect()->route('users');
   }else{
      Session::flash('message', 'Data not updated!');
      Session::flash('alert-class', 'alert-danger');
   }

   return Back()->withInput();
}
// Delete
  // Delete
  public function destroy($id){
   User::destroy($id);

   Session::flash('message', 'Delete successfully!');
   Session::flash('alert-class', 'alert-success');
   return redirect()->route('users');
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

}

