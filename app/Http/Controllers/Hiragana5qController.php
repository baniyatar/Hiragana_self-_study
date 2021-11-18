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
         return view('Hiragana/waAlphabet');
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

   public function viewZaAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'za'
            ]
         );
         return view('Hiragana/zaAlphabet');
      }


   public function viewJiAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'ji'
            ]
         );
         return view('Hiragana/jiAlphabet');
      }


   public function viewZuAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'zu'
            ]
         );
         return view('Hiragana/zuAlphabet');
      }


   public function viewZeAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'ze'
            ]
         );
         return view('Hiragana/zeAlphabet');
      }


   public function viewZoAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'zo'
            ]
         );
         return view('Hiragana/zoAlphabet');
      }

   public function viewKyaAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'kya'
            ]
         );
         return view('Hiragana/kyaAlphabet');
      }

   public function viewkyuAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'kyu'
            ]
         );
         return view('Hiragana/kyuAlphabet');
      }

   public function viewKyoAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'kyo'
            ]
         );
         return view('Hiragana/kyoAlphabet');
      }
      public function viewPaAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'pa'
            ]
         );
         return view('Hiragana/paAlphabet');
      }


      public function viewPiAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'pi'
            ]
         );
         return view('Hiragana/piAlphabet');
      }

      public function viewPuAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'pu'
            ]
         );
         return view('Hiragana/puAlphabet');
      }

      
      public function viewPeAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'pe'
            ]
         );
         return view('Hiragana/peAlphabet');
      }

      public function viewPoAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'po'
            ]
         );
         return view('Hiragana/poAlphabet');
      }
   public function viewGyaAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'gya'
            ]
         );
         return view('Hiragana/gyaAlphabet');
      }
   public function viewGyuAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'gyu'
            ]
         );
         return view('Hiragana/gyuAlphabet');
      }
   public function viewGyoAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'gyo'
            ]
         );
         return view('Hiragana/gyoAlphabet');
      }
   
   public function viewPyaAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'pya'
            ]
         );
         return view('Hiragana/pyaAlphabet');
      }
   public function viewPyuAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'pyu'
            ]
         );
         return view('Hiragana/pyuAlphabet');
      }
   public function viewPyoAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'pyo'
            ]
         );
         return view('Hiragana/pyoAlphabet');
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
   
   public function viewVoicedIntroPage()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'voicedIntro'
            ]
         );
         return view('Hiragana/voicedIntroPage');
      } 

   public function viewVoicedConstructPage()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'voicedConstruct'
            ]
         );
         return view('Hiragana/voicedConstructPage');
      }

   public function viewContractedIntroPage()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'contractedIntro'
            ]
         );
         return view('Hiragana/contractedIntroPage');
      } 

   public function viewContractedConstructPage()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'contractedConstruct'
            ]
         );
         return view('Hiragana/contractedConstructPage');
      }

   public function viewEndPage()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'end'
            ]
         );
         return view('Hiragana/endPage');
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
               case "ka":
                  return view('Hiragana/kaAlphabet');
                     break;
               case "ki":
                  return view('Hiragana/kiAlphabet');
                  break;
               case "ku":
                  return view('Hiragana/kuAlphabet');
                  break;
               case "ke":
                  return view('Hiragana/keAlphabet');
                  break;
               case "ko":
                  return view('Hiragana/koAlphabet');
                  break;
               case "sa":
                  return view('Hiragana/saAlphabet');
                  break;
               case "shi":
                  return view('Hiragana/shiAlphabet');
                  break;
               case "su":
                  return view('Hiragana/suAlphabet');
                  break;
               case "se":
                  return view('Hiragana/seAlphabet');
                  break;
               case "so":
                  return view('Hiragana/soAlphabet');
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
               case "na":
                  return view('Hiragana/naAlphabet');
                  break;
               case "ni":
                  return view('Hiragana/niAlphabet');
                  break;
               case "nu":
                  return view('Hiragana/nuAlphabet');
                  break;
               case "ne":
                  return view('Hiragana/neAlphabet');
                  break;
               case "no":
                  return view('Hiragana/noAlphabet');
                  break;
               case "ha":
                  return view('Hiragana/haAlphabet');
                  break;
               case "hi":
                  return view('Hiragana/hiAlphabet');
                  break;
               case "fu":
                  return view('Hiragana/fuAlphabet');
                  break;
               case "he":
                  return view('Hiragana/heAlphabet');
                  break;
               case "ho":
                  return view('Hiragana/hoAlphabet');
                  break;
               case "ma":
                  return view('Hiragana/maAlphabet');
                  break;
               case "mi":
                  return view('Hiragana/miAlphabet');
                  break;
               case "mu":
                  return view('Hiragana/muAlphabet');
                  break;
               case "me":
                  return view('Hiragana/meAlphabet');
                  break;
               case "mo":
                  return view('Hiragana/moAlphabet');
                  break;
               case "ya":
                  return view('Hiragana/yaAlphabet');
                  break;
               case "yu":
                  return view('Hiragana/yuAlphabet');
                  break;
               case "yo":
                  return view('Hiragana/yoAlphabet');
                  break;
               case "ra":
                  return view('Hiragana/raAlphabet');
                  break;
               case "ri":
                  return view('Hiragana/riAlphabet');
                  break;
               case "ru":
                  return view('Hiragana/ruAlphabet');
                  break;
               case "re":
                  return view('Hiragana/reAlphabet');
                  break;
               case "ro":
                  return view('Hiragana/roAlphabet');
                  break;
               case "wa":
                  return view('Hiragana/waAlphabet');
                  break;
               case "wo":
                  return view('Hiragana/woAlphabet');
                  break;
               case "n":
                  return view('Hiragana/nAlphabet');
                  break;
               case "voicedIntro":
                  return view('Hiragana/voicedIntro');
                  break;
               case "voicedConstruct":
                  return view('Hiragana/voicedConstruct');
                  break;
               case "za":
                  return view('Hiragana/zaAlphabet');
                  break;
               case "ji":
                  return view('Hiragana/jiAlphabet');
                  break;
               case "zu":
                  return view('Hiragana/zuAlphabet');
                  break;
               case "ze":
                  return view('Hiragana/zeAlphabet');
                  break;
               case "zo":
                 return view('Hiragana/zoAlphabet');
                  break;
               case "kya":
                  return view('Hiragana/kyaAlphabet');
                  break;
               case "kyu":
                  return view('Hiragana/kyuAlphabet');
                  break;
               case "kyo":
                  return view('Hiragana/kyoAlphabet');
                  break;
               case "pa":
                 return view('Hiragana/paAlphabet');
                     break;
               case "pi":
                  return view('Hiragana/piAlphabet');
                     break;
               case "pu":
                  return view('Hiragana/puAlphabet');
                     break;
               case "pe":
                  return view('Hiragana/peAlphabet');
                     break;
               case "po":
                  return view('Hiragana/poAlphabet');
                     break;
                     
               case "contractedIntro":
                  return view('Hiragana/contractedIntro');
                  break;
               case "contractedConstruct":
                  return view('Hiragana/contractedConstruct');
                  break;
               case "gya":
                  return view('Hiragana/gyaAlphabet');
                  break;
               case "gyu":
                  return view('Hiragana/gyuAlphabet');
                  break;
               case "gyo":
                  return view('Hiragana/gyoAlphabet');
                  break;
               case "pya":
                  return view('Hiragana/pyaAlphabet');
                  break;
               case "pyu":
                  return view('Hiragana/pyuAlphabet');
                  break;
               case "pyo":
                  return view('Hiragana/pyoAlphabet');
                  break;
               case "ga":
                  return view('Hiragana/gaAlphabet');
                  break;
               case "gi":
                  return view('Hiragana/giAlphabet');
                  break;
               case "gu":
                  return view('Hiragana/guAlphabet');
                  break;
               case "ge":
                  return view('Hiragana/geAlphabet');
                  break;
               case "go":
                  return view('Hiragana/goAlphabet');
                  break;
               case "da":
                  return view('Hiragana/daAlphabet');
                  break;
               case "di":
                  return view('Hiragana/diAlphabet');
                  break;
               case "du":
                  return view('Hiragana/duAlphabet');
                  break;
               case "de":
                  return view('Hiragana/deAlphabet');
                  break;
               case "do":
                  return view('Hiragana/doAlphabet');
                  break;
               case "ba":
                  return view('Hiragana/baAlphabet');
                  break;
               case "bi":
                  return view('Hiragana/biAlphabet');
                  break;
               case "bu":
                  return view('Hiragana/buAlphabet');
                  break;
               case "be":
                  return view('Hiragana/beAlphabet');
                  break;
               case "bo":
                  return view('Hiragana/boAlphabet');
                  break;
               case "end":
                  return view('Hiragana/endPage');
                  break;
               }

         case 'no':
            return view('Hiragana/introPage');
         }
      }  

      public function viewGaAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'ga'
            ]
         );
         return view('Hiragana/gaAlphabet');
      }
      public function viewGiAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'gi'
            ]
         );
         return view('Hiragana/giAlphabet');
      }
      public function viewGuAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'gu'
            ]
         );
         return view('Hiragana/guAlphabet');
      }
      public function viewGeAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'ge'
            ]
         );
         return view('Hiragana/geAlphabet');
      }
      public function viewGoAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'go'
            ]
         );
         return view('Hiragana/goAlphabet');
      }
      
      public function viewDaAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'da'
            ]
         );
         return view('Hiragana/daAlphabet');
      }
      public function viewDiAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'di'
            ]
         );
         return view('Hiragana/diAlphabet');
      }
      public function viewDuAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'du'
            ]
         );
         return view('Hiragana/duAlphabet');
      }
      public function viewDeAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'de'
            ]
         );
         return view('Hiragana/deAlphabet');
      }
      public function viewDoAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'do'
            ]
         );
         return view('Hiragana/doAlphabet');
      }

      public function viewbaAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'ba'
            ]
         );
         return view('Hiragana/baAlphabet');
      }
      public function viewBiAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'bi'
            ]
         );
         return view('Hiragana/biAlphabet');
      }
      public function viewBuAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'bu'
            ]
         );
         return view('Hiragana/buAlphabet');
      }
      public function viewBeAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'be'
            ]
         );
         return view('Hiragana/beAlphabet');
      }
      public function viewBoAlphabet()
      {
         $currentUserName = Session::get('userName');
         User::where('username', $currentUserName)->update(
            [
            'lastPointVisit'=>'bo'
            ]
         );
         return view('Hiragana/boAlphabet');
      }
      
}
