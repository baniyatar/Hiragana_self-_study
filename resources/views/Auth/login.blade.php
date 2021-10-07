@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">ひらがな　ログイン　<br>Hiragana Login</div>
                  <div class="card-body">
  
                      <form action="{{ route('login.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right"><ruby>
                              登録名<rp></rp><rt>とうろくめい</rt><rp></rp>
                              </ruby> Username </label>
                            <div class="col-md-6">
                                <input type="text" id="username" class="form-control @if ($errors->first('username')) is-invalid @endif"  name="username" value="{{old('username')}}"  required autofocus>
                                @if ($errors->first('username'))
                                    <span class="text-danger">{{ $errors->first('username') }}</span>
                                @endif
                            </div>
                        </div>
                          <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"> パスワード Password</label>
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
                                 ログイン Login
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