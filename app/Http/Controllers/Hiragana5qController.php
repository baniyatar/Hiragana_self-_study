<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Hiragana5qController extends Controller
{
 public function index(){
$users= User::all();
return view ('users.index',['$user']);


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

    return view('users.edit')->with('users',$users);
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

   public function viewAAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'a'
            ]
         );
         return view('Hiragana/aAlphabet');
      }

   public function viewKaAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'ka'
            ]
         );
         return view('Hiragana/kaAlphabet');
      }
   public function viewKiAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'ki'
            ]
         );
         return view('Hiragana/kiAlphabet');
      }
   public function viewKuAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'ku'
            ]
         );
         return view('Hiragana/kuAlphabet');
      }
   public function viewKeAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'ke'
            ]
         );
         return view('Hiragana/keAlphabet');
      }
   public function viewKoAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'ko'
            ]
         );
         return view('Hiragana/koAlphabet');
      }
      
   public function viewConstructPage()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'construct'
            ]
         );
         return view('Hiragana/constructPage');
      }
   public function viewIntroPage()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'intro'
            ]
         );
         return view('Hiragana/introPage');
      }  
   public function viewHomePage()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'home'
            ]
         );
         return view('Hiragana/homePage');
      } 
   
   public function viewLastPointCheck()
      {
         $currentUserName = Session::get('userName');
         $lastStopPoint = User::where('username', $currentUserName)->first()->lastPointVisit;
         switch ($lastStopPoint){
            case null:
               return view('Hiragana/introPage');
               break;
            default:
               return view('/returnLastPoint');
               break;
               }
      }
   function returnToLastPoint(Request $request)
      {
         switch($request->get('questionAnswer')){
         case 'yes':
            $currentUserName = Session::get('userName');
            $lastStopPoint = User::where('username', $currentUserName)->first()->lastPointVisit;
            switch ($lastStopPoint){
               case null:
               case "intro":
                  return view('Hiragana/introPage');
                  break;
               case "construct":
                  return view('Hiragana/constructPage');
                  break;
               case "home":
                  return view('Hiragana/homePage');
                  break;
               case "a":
                  return view('Hiragana/aAlphabet');
                  break;
               }

         case 'no':
            return view('Hiragana/introPage');
         }
      }  
}
