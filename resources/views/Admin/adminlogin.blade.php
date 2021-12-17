{{-- @extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Admin Login</div>
                  <div class="card-body">

                      <form action="{{ route('login.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="username" class="col-md-4 col-form-label text-md-right">Username </label>
                              <div class="col-md-6">
                                <input type="text" id="username" class="form-control @if ($errors->first('username')) is-invalid @endif"  name="username" value="{{old('username')}}"  required autofocus>
                                @if ($errors->has('username'))
                                    <span class="text-danger">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                <input id="password" type="password" class="form-control @if ($errors->first('password')) is-invalid @endif" name="password" value="{{old('password')}}"  required autofocus>
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif    
                            </div>
                          </div>
  
                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Remember Me
                                      </label>
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Login
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection --}}



<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8">
  <title>管理者ログイン</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

 </head>
 <body>
  <br />
  <div class="container">
   <div class = "title-login">
   <h3 align="center">管理者ログイン</h3>
   <br />
    </div>
   @if ($message = Session::get('error'))
   <div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $message }}</strong>
   </div>
   @endif

   @if (count($errors) > 0)
    <div class="alert alert-danger">
     <ul>
     @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
     @endforeach
     </ul>
    </div>
   @endif

   <form method="post" action="{{ url('') }}">
    {{ csrf_field() }}
    <div class="form-group">
        <div class = "left-side-login">
            <label class = "normal-label">ＩＤ</label>
        </div>
        <div class = "right-side-login">     
            <input type="text" name="id" class="form-control" required maxlength="50"/>
        </div>
    </div>
    <div class="form-group">
        <div class = "left-side-login">
            <label class = "normal-label">パスワード</label>
        </div>
        <div class = "right-side-login">     
            <input type="password" name="password" class="form-control" required maxlength="50"/>
        </div>
    </div>
    <div class="form-group login-button">
     <input type="submit" name="login" class="btn btn-primary" value="Login" />
    </div>
   </form>
  </div>
 </body>
</html>