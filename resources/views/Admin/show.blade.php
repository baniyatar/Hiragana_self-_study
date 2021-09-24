@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
       <!-- Alert message (start) -->
       @if(Session::has('message'))
       <div class="alert {{ Session::get('alert-class') }}">
          {{ Session::get('message') }}
       </div>
       @endif
       <!-- Alert message (end) -->
 
       <div class='actionbutton'>
 
          <a class='btn btn-info float-right' href="{{route('users.create')}}">Add</a>
 
       </div>
       
       <table class="table" >
         <thead>
           <tr>
             <th width='10%'>Username</th>
             <th width='10%'>password</th>
             <th width='10%'>email</th>
             <th width='10%'>firstname</th>
             <th width='10%'>surname</th>
             <th width='10%'>city</th>
             <th width='10%'>country</th>
             <th width='10%'>payment</th>
          
           </tr>
         </thead>
         <tbody>
         @foreach($users as $user)
       
            <tr>
               <td>{{ $user->username }}</td>
               <td>{{ $user->password }}</td>
               <td>{{ $user->email }}</td>
               <td>{{ $user->firstname }}</td>
               <td>{{ $user->surname }}</td>
               <td>{{ $user->city }}</td>
               <td>{{ $user->country }}</td>
               <td>{{ $user->payment }}</td>
               <td>
                  <!-- Edit -->
                  <a href="{{ route('users.edit',[$user->id]) }}" class="btn btn-sm btn-info">Edit</a>
                  <!-- Delete -->
                  <a href="{{ route('users.delete',$user->id) }}" class="btn btn-sm btn-danger">Delete</a>
               </td>
            </tr>
         @endforeach
         </tbody>
      </table>
 
    </div>
 </div>
 @stop