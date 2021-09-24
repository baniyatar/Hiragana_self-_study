<!-- Extends template page -->
@extends('layout.app')

<!-- Specify content -->
@section('content')

<h3>Add Subject</h3>

<div class="row">

   <div class="col-md-12 col-sm-12 col-xs-12">

     <!-- Alert message (start) -->
     @if(Session::has('message'))
     <div class="alert {{ Session::get('alert-class') }}">
        {{ Session::get('message') }}
     </div>
     @endif 
     <!-- Alert message (end) -->

     <div class="actionbutton">

        <a class='btn btn-info float-right' href="{{route('users')}}">List</a>

     </div>

     <form action="{{route('users.store')}}" method="post" >
        {{csrf_field()}}

        <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username <span class="required">*</span></label>
          <div class="col-md-6 col-sm-6 col-xs-12">
             <input id="username" class="form-control col-md-12 col-xs-12" name="username" placeholder="Enter subject name" required="required" type="text">

             @if ($errors->has('username'))
               <span class="errormsg">{{ $errors->first('username') }}</span>
             @endif
          </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="password">Password <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="password" class="form-control col-md-12 col-xs-12" name="password" placeholder="password" required="required" type="text">
  
               @if ($errors->has('password'))
                 <span class="errormsg">{{ $errors->first('password') }}</span>
               @endif
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="email" class="form-control col-md-12 col-xs-12" name="email" placeholder="email" required="required" type="text">
  
               @if ($errors->has('email'))
                 <span class="errormsg">{{ $errors->first('email') }}</span>
               @endif
            </div>
          </div>



          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="firstname">Firstname <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="firstname" class="form-control col-md-12 col-xs-12" name="firstname" placeholder="firstname" required="required" type="text">
  
               @if ($errors->has('firstname'))
                 <span class="errormsg">{{ $errors->first('firstname') }}</span>
               @endif
            </div>
          </div>


          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="surname">Surname <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="surname" class="form-control col-md-12 col-xs-12" name="surname" placeholder="surname" required="required" type="text">
  
               @if ($errors->has('surname'))
                 <span class="errormsg">{{ $errors->first('surname') }}</span>
               @endif
            </div>
          </div>


          
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="city">City <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="city" class="form-control col-md-12 col-xs-12" name="city" placeholder="city" required="required" type="text">
  
               @if ($errors->has('city'))
                 <span class="errormsg">{{ $errors->first('city') }}</span>
               @endif
            </div>
          </div>


          
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="country">Country <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
               <input id="country" class="form-control col-md-12 col-xs-12" name="country" placeholder="country" required="required" type="text">
  
               @if ($errors->has('country'))
                 <span class="errormsg">{{ $errors->first('country') }}</span>
               @endif
            </div>
          </div>

             
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="payment">Paymen <span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="checkbox" name="payment" data-plugin="switchery" data-color="#1bb99a" {{ $manufacturer->status ? 'checked="1"' : 'checked="0"' }} >
  
               @if ($errors->has('country'))
                 <span class="errormsg">{{ $errors->first('country') }}</span>
               @endif
            </div>
          </div>




        <div class="form-group">
           <div class="col-md-6">

              <input type="submit" name="submit" value='Submit' class='btn btn-success'>
           </div>
        </div>

     </form>

   </div>
</div>
@stop