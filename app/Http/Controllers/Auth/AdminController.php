<?php

namespace App\Http\Controllers\Auth;
use App\UserRecord;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\adminstrator;
   

class AdminController extends Controller 
{ function init(Request $request)
   {
       $id = $request->get('id');
       $rec = UserRecord::where('username', $id)->first();
       $data = new UserRecord($rec['id'],$rec['username'], $rec['password'],$rec['email'], $rec['firstname'], $rec['surname'], $rec['city'], $rec['country'],  $rec['payment']);
      
       return view('admin/edit', ['data' => $data]);
   }  
}



