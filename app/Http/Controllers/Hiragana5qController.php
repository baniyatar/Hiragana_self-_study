<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class Hiragana5qController extends Controller
{
 
    public function index()
    {
        $Users = User::latest()->paginate(5);

        return view('Users.index',compact('Users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

  
    public function create()
    {
        return view('Users.create');
    }

    
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:6',
            'email' => 'required|email|unique:users',
            'username' => 'required',
            'surname' => 'required',
            'city' => 'required',
            'country' => 'required',
            'payment'=>'required',
        ]);

        User::create($request->all());

        return redirect()->route('Users.index')
            ->with('success','User created successfully.');
    }

   
    public function show(User $User)
    {
        return view('Users.showRegistration',compact('User'));
    }

    
    public function edit(User $User)
    {
        return view('Users.editRegistration',compact('User'));
    }

   
    public function update(Request $request, User $User)
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

        $User->update($request->all());

        return redirect()->route('Users.index')
            ->with('success','User updated successfully');
    }

    public function destroy(User $User)
    {
        $User->delete();

        return redirect()->route('Users.index')
            ->with('success','User deleted successfully');
    }
}
