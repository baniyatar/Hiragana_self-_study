<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;
use db;
use  App\UserRecord;                             

class UserEditController extends Controller
{
    function init(Request $request)
    {
        $id = $request->get('id');
        $rec = UserRecord::where('username', $id)->first();
        $data = new UserRecord($rec['id'],$rec['username'], $rec['password'],$rec['email'], $rec['firstname'], $rec['surname'], $rec['city'], $rec['country'],  $rec['payment']);
       
        return view('admin/edit', ['data' => $data]);
    }  
    function regist(Request $request)
    {
        $id = $request->get('id');
        $username = $request->get('username');
        $password = $request->get('password');
        $email = $request->get('email');
        $firstname = $request->get('firstname');
        $surname = $request->get('surname');  
        $city = $request->get('city');
        $country = $request->get('country');
        $paymentDone=$request->get('payment');
      
   
        $currentPaymentStatus = User::where('id', $id)->first()->payment;
        User::where('id', $id)->update([
            'username' => $username,
            'password' => $password,
            'email' => $email,
            'firstname' => $firstname,
            'surname' => $surname,
            'city' => $city,
            'country' => $country,
            'payment' => $paymentDone,
            
        ]);
        
    
            $currentPaymentStatus = User::where('id', $id)->first()->payment;
            User::where('id', $id)->update([
                'username' => $username,
                'password' => $password,
                'email' => $email,
                'firstname'=> $firstname,
                'surname' => $surname,
                'city' => $city,    
                'country' => $country,
                'payment' => $paymentDone,
        ]);
      
        if ($paymentDone != $currentPaymentStatus)
            {
                static::updateGoogleSheet($id,$paymentDone);
            }
        $condition = Session::get('ExamineeListCondition');
        $condition->setAutoSearch(1);
        $list = [];
        return view('admin/', ['data' => $list, 'condition' => $condition]);

        }}

