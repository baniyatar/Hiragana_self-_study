@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">HIragana Self study </div>
                  <div class="card-body">
  
                     
                          <div class="form-group row">
                              <label for="username" class="col-md-4 col-form-label text-md-center">Are you a first comer ? </label>
                              
                          </div>
  
                        
                           <div class="col-md-6 offset-md-4">
                            <button type="button" class="btn btn-primary" onclick="window.location='{{ url("registration")}}'">Yes</button><span>
                                <button type="button" class="btn btn-primary" onclick="window.location='{{ url("login")}}'">No</button><span>
                        </div> 
                        
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
  
</main>
@endsection