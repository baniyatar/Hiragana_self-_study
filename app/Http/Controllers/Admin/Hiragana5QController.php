<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;


use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class Hiragana5QController extends Controller
{

   public function index()
   {
      $users = User::select(
         'id',
         'username',
         'password',
         'email',
         'firstname',
         'surname',
         'city',
         'country',
         'payment'
      )->get();
      return view('users.index')->with('users', $users);

      echo $users;
   }

   public function create()
   {
      return view('users.create');
   }

   public function store(Request $request)
   {
      $data = $request->except('_method', '_token', 'submit');

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
         'payment' => '',

      ]);

      if ($validator->fails()) {
         return redirect()->Back()->withInput()->withErrors($validator);
      }

      if ($record = User::firstOrCreate($data)) {
         Session::flash('message', 'Added Successfully!');
         Session::flash('alert-class', 'alert-success');
         return redirect()->route('users');
      } else {
         Session::flash('message', 'Data not saved!');
         Session::flash('alert-class', 'alert-danger');
      }

      return Back();
   }

   //Edit

   public function edit($id)
   {
      $users = User::find($id);

      return view('users.edit')->with('users', $users);
   }

   public function update(Request $request, $id)
   {
      $data = $request->except('_method', '_token', 'submit');

      $validator = Validator::make($request->all(), [
         'username' => 'required',
         'password' => 'required|min:6',
         'email' => 'required|email|unique:users',
         'username' => 'required',
         'surname' => 'required',
         'city' => 'required',
         'country' => 'required',
         'payment' => '',
      ]);

      if ($validator->fails()) {
         return redirect()->Back()->withInput()->withErrors($validator);
      }
      $subject = User::find($id);

      if ($subject->update($data)) {

         Session::flash('message', 'Update successfully!');
         Session::flash('alert-class', 'alert-success');
         return redirect()->route('users');
      } else {
         Session::flash('message', 'Data not updated!');
         Session::flash('alert-class', 'alert-danger');
      }

      return Back()->withInput();
   }
   // Delete
   // Delete
   public function destroy($id)
   {
      User::destroy($id);

      Session::flash('message', 'Delete successfully!');
      Session::flash('alert-class', 'alert-success');
      return redirect()->route('users');
   }
}
