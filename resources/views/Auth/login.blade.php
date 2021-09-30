@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">ひらがな　ログイン　Hiragana Login</div>
                  <div class="card-body">
  
                      <form action="{{ route('login.post') }}" method="POST">
                          @csrf
                          <div class="form-group ">
                              <label for="username" class="col-md-4 col-form-label text-md-right"><ruby>
                                登録名<rp></rp><rt>とうろくめい</rt><rp></rp>
                                </ruby>　Username </label>
                              <div class="col-md-6">
                                  <input type="text" id="username" class="form-control" name="username" required autofocus autocomplete="on" placeholder="Enter Username">
                                  @if ($errors->has('username'))
                                      <span class="text-danger">{{ $errors->first('username') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group ">
                              <label for="password" class="col-md-4 col-form-label text-md-right">
                                パスワード  Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required autocomplete="on"placeholder="Enter Password">
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                            
                          </div>
  
                          <div class="form-group ">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> セーブしてください。Remember Me
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