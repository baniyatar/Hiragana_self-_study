@extends('layout')
 
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header"><ruby>
                    登録 <rp></rp><rt>とうろく</rt><rp></rp>
                    </ruby> Register</div>
                  <div class="card-body">
  <head>
      <script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
@if($errors->first('username'))
  $("input[name='username']").focus();
@elseif($errors->first('password'))
  $("input[name='password']").focus();
  @elseif($errors->first('email'))
  $("input[name='email']").focus();
  @elseif($errors->first('firstname'))
  $("input[name='firstname']").focus();
  @elseif($errors->first('surname'))
  $("input[name='surname']").focus();
  @elseif($errors->first('city'))
  $("input[name='city']").focus();
  @elseif($errors->first('country'))
  $("input[name='country']").focus();
@endif
});
   </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js">
   
        </script>
  </head>
                      <form action="{{ route('register.post') }}" role="form" data-toggle="validator"  method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="username" class="col-md-4 col-form-label text-md-right"><ruby>
                                登録名<rp></rp><rt>とうろくめい</rt><rp></rp>
                                </ruby> Username <small class="form-text text-muted">アルファベットで in alphabet</small></label>
                              <div class="col-md-6">
                                  <input type="text" id="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" name="username" value="{{ old('username') }}"  required autofocus>
                                    
                                @if ($errors->has('username'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif  
                              </div>
                          </div>
  
                         
                      
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right"> 
                                パスワード  Password    
                                <small id="password" class="form-text text-muted"> 6 <ruby>  桁以上<rp></rp><rt>  けたいじょう</rt><rp></rp>
                                    </ruby> 6 digits or more</small></label>
                              
                              <div class="col-md-6">
                                <input type="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"  name="password" value="{{ old('password') }}" data-error=" email address is invalid" required autofocus>
                                
                                @if ($errors->has('password'))
                                <span class="text-danger">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif  
                              </div>
                          </div>

                          <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><ruby>e-mail アドレス　</ruby>e-mail address</label>
                            <div class="col-md-6">
                                <input type="text" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"  value="{{ old('email') }}" data-error="Bruh, that email address is invalid"  required autofocus>
                                <div class="help-block with-errors"></div>
                                @if ($errors->has('email'))
                                    <span class="text-danger">
                                    <strong>{{ $errors->first('email') }}</strong></span>
                                @endif
                            </div>
                        </div> 


                      


                
  
                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right"><ruby>名<rp></rp><rt>めい</rt></ruby>  Firstname<small class="form-text text-muted">アルファベットで in alphabet</small></label>
                            <div class="col-md-6">
                                <input type="text" id="firstname" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}" required autofocus>
                                @if ($errors->has('firstname'))
                                <span class="text-danger">
                            <strong>{{ $errors->first('firstname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right"><ruby>姓<rp></rp><rt>せい</rt></ruby> Surname <small class="form-text text-muted">アルファベットで in alphabet</small></label>
                            <div class="col-md-6">
                                <input type="text" id="surname" class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" name="surname" value="{{ old('surname') }}" required autofocus>
                                @if ($errors->has('surname'))
                                <span class="text-danger">
                            <strong>{{ $errors->first('surname') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right"><ruby>
                                都市<rp></rp><rt>とし</rt><rp></rp>
                                </ruby>/
                                <ruby>
                                    町<rp>(</rp><rt>まち</rt><rp>)</rp>
                                    </ruby>
                                City/town  <small class="form-text text-muted">アルファベットで in alphabet</small></label>
                            <div class="col-md-6">
                              <input type="text" id="city" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>
                                @if ($errors->has('city'))
                                <span class="text-danger">
                            <strong>{{ $errors->first('city') }}</strong>
                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row"> 
                            <label for="country" class="col-md-4 col-form-label text-md-right"><ruby>
                                国<rp>(</rp><rt>くに</rt><rp>)</rp>
                                </ruby> Country <small class="form-text text-muted">アルファベットで in alphabet</small></label>
                            <div class="col-md-6">
                                <input type="text" id="country" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" required autofocus>
                                @if ($errors->has('country'))
                                <span class="text-danger">
                            <strong>{{ $errors->first('country') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>


                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="Remember">セーブしてください。 Remember Me
                                      </label>
                                  </div>
                              </div>
                          </div>
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                        　<ruby>
                                    登録<rp>(</rp><rt>とうろく</rt><rp>)</rp>
                                    </ruby>    Register
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection