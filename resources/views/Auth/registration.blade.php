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
  
                      <form action="{{ route('register.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="username" class="col-md-4 col-form-label text-md-right"><ruby>
                                登録名<rp></rp><rt>とうろくめい</rt><rp></rp>
                                </ruby> Username</label>
                              <div class="col-md-6">
                                  <input type="text" id="username" class="form-control" name="username" required autofocus>
                                  @if ($errors->has('username'))
                                      <span class="text-danger">{{ $errors->first('username') }}</span>
                                  @endif
                              </div>
                          </div>
  
                         
                      
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right"> 
                                パスワード  Password    
                                <small id="passwordHelp" class="form-text text-muted"><ruby>
                                    6 桁以上<rp></rp><rt> 6 けたいじょう</rt><rp></rp>
                                    </ruby>*6 digits or over</small></label>
                              
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif    
                              </div>
                          </div>

                          <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><ruby>e-mail アドレス　</ruby>e-mail address</label>
                            <div class="col-md-6">
                                <input type="text" id="email" class="form-control" name="email" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>
  
                        <div class="form-group row">
                            <label for="firstname" class="col-md-4 col-form-label text-md-right"><ruby>名<rp></rp><rt>めい</rt></ruby>  Firstname<small class="form-text text-muted">アルファベットで in alphabet</small></label>
                            <div class="col-md-6">
                                <input type="text" id="firstname" class="form-control" name="firstname" required autofocus>
                                @if ($errors->has('firstname'))
                                    <span class="text-danger">{{ $errors->first('firstname') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right"><ruby>姓<rp></rp><rt>せい</rt></ruby> Surname <small class="form-text text-muted">アルファベットで in alphabet</small></label>
                            <div class="col-md-6">
                                <input type="text" id="surname" class="form-control" name="surname" required autofocus>
                                @if ($errors->has('surname'))
                                    <span class="text-danger">{{ $errors->first('surname') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="city" class="col-md-4 col-form-label text-md-right"><ruby>
                                都市/<rp>(</rp><rt>とし/</rt><rp>)</rp>
                                </ruby><ruby>
                                    町<rp>(</rp><rt>まち</rt><rp>)</rp>
                                    </ruby>
                                City/town</label>
                            <div class="col-md-6">
                                <input type="text" id="city" class="form-control" name="city" required autofocus>
                                @if ($errors->has('city'))
                                    <span class="text-danger">{{ $errors->first('city') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row"> 
                            <label for="country" class="col-md-4 col-form-label text-md-right"><ruby>
                                国<rp>(</rp><rt>くに</rt><rp>)</rp>
                                </ruby> Country</label>
                            <div class="col-md-6">
                                <input type="text" id="country" class="form-control" name="country" required autofocus>
                                @if ($errors->has('country'))
                                    <span class="text-danger">{{ $errors->first('country') }}</span>
                                @endif
                            </div>
                        </div>


                          <div class="form-group row">
                              <div class="col-md-6 offset-md-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember">セーブしてください。 Remember Me
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