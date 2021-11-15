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

   public function viewIAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'i'
            ]
         );
         return view('Hiragana/iAlphabet');
      }

   public function viewUAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'u'
            ]
         );
         return view('Hiragana/uAlphabet');
      }

   public function viewEAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'e'
            ]
         );
         return view('Hiragana/eAlphabet');
      }

   public function viewOAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'o'
            ]
         );
         return view('Hiragana/oAlphabet');
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
      
   public function viewSaAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'sa'
            ]
         );
         return view('Hiragana/saAlphabet');
      }

   public function viewShiAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'shi'
            ]
         );
         return view('Hiragana/shiAlphabet');
      }

   public function viewSuAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'su'
            ]
         );
         return view('Hiragana/suAlphabet');
      }

   public function viewSeAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'se'
            ]
         );
         return view('Hiragana/seAlphabet');
      }

   public function viewSoAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'so'
            ]
         );
         return view('Hiragana/soAlphabet');
      }

   public function viewTaAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'ta'
            ]
         );
         return view('Hiragana/taAlphabet');
      }

   public function viewChiAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'chi'
            ]
         );
         return view('Hiragana/chiAlphabet');
      }

   public function viewTsuAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'tsu'
            ]
         );
         return view('Hiragana/tsuAlphabet');
      }

   public function viewTeAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'te'
            ]
         );
         return view('Hiragana/teAlphabet');
      }

   public function viewToAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'to'
            ]
         );
         return view('Hiragana/toAlphabet');
      }
   public function viewNaAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'na'
            ]
         );
         return view('Hiragana/naAlphabet');
      }

   public function viewNiAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'ni'
            ]
         );
         return view('Hiragana/niAlphabet');
      }

   public function viewNuAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'nu'
            ]
         );
         return view('Hiragana/nuAlphabet');
      }

   public function viewNeAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'ne'
            ]
         );
         return view('Hiragana/neAlphabet');
      }

   public function viewNoAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'no'
            ]
         );
         return view('Hiragana/noAlphabet');
      }

   public function viewHaAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'ha'
            ]
         );
         return view('Hiragana/haAlphabet');
      }

   public function viewHiAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'hi'
            ]
         );
         return view('Hiragana/hiAlphabet');
      }

   public function viewFuAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'fu'
            ]
         );
         return view('Hiragana/fuAlphabet');
      }

   public function viewHeAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'he'
            ]
         );
         return view('Hiragana/heAlphabet');
      }

   public function viewHoAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'ho'
            ]
         );
         return view('Hiragana/hoAlphabet');
      }

   public function viewMaAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'ma'
            ]
         );
         return view('Hiragana/maAlphabet');
      }

   public function viewMiAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'mi'
            ]
         );
         return view('Hiragana/miAlphabet');
      }

   public function viewMuAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'mu'
            ]
         );
         return view('Hiragana/muAlphabet');
      }

   public function viewMeAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'me'
            ]
         );
         return view('Hiragana/meAlphabet');
      }

   public function viewMoAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'mo'
            ]
         );
         return view('Hiragana/moAlphabet');
      }

      public function viewYaAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'ya'
            ]
         );
         return view('Hiragana/yaAlphabet');
      }
   public function viewYuAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'yu'
            ]
         );
         return view('Hiragana/yuAlphabet');
      }

   public function viewYoAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'yo'
            ]
         );
         return view('Hiragana/yoAlphabet');
      }

   public function viewRaAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'ra'
            ]
         );
         return view('Hiragana/raAlphabet');
      }

   public function viewRiAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'ri'
            ]
         );
         return view('Hiragana/riAlphabet');
      }

   public function viewRuAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'ru'
            ]
         );
         return view('Hiragana/ruAlphabet');
      }

   public function viewReAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'re'
            ]
         );
         return view('Hiragana/reAlphabet');
      }
      
   public function viewRoAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'ro'
            ]
         );
         return view('Hiragana/roAlphabet');
      }

   public function viewWaAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'wa'
            ]
         );
         return view('Hiragana/ruAlphabet');
      }

   public function viewWoAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'wo'
            ]
         );
         return view('Hiragana/woAlphabet');
      }
      
   public function viewNAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'n'
            ]
         );
         return view('Hiragana/nAlphabet');
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
               case "i":
                  return view('Hiragana/iAlphabet');
                  break;
               case "u":
                  return view('Hiragana/uAlphabet');
                  break;
               case "e":
                  return view('Hiragana/eAlphabet');
                  break;
               case "o":
                  return view('Hiragana/oAlphabet');
                  break;
               case "ta":
                  return view('Hiragana/taAlphabet');
                  break;
               case "chi":
                  return view('Hiragana/chiAlphabet');
                  break;
               case "tsu":
                  return view('Hiragana/tsuAlphabet');
                  break;
               case "te":
                  return view('Hiragana/teAlphabet');
                  break;
               case "to":
                  return view('Hiragana/toAlphabet');
                  break;

               }

         case 'no':
            return view('Hiragana/introPage');
         }
      }  


}
