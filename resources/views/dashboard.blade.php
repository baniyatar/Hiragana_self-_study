@extends('layout')
  
@section('content')
<head>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script>
body {
  margin: 0;
}
iframe {
  height:calc(100vh - 4px);
  width:calc(100vw - 4px);
  box-sizing: border-box;
}
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ひらがな <span style="font-family: serif;font-weight: bold; font-size: larger;">Hiragana</span></div>
               
                <div class="card-body">
                  
{{-- <div class="myIframe">
                    <iframe src="\hiragana\index.html" > <div class="col-md-6 offset-md-4">
                        
                            
                    </div> </iframe><button type="やります　Quit" class="btn btn-primary" onclick="window.location='{{ url("dashboard")}}'">Yes</button><span>
</div> --}}

                    
                    <a href = "{{ url('/return') }}" class="btn btn-Secondary btn-lg btn-block" style="font-family: sans-serif">ひらがなの <ruby>
                        勉強<rp></rp><rt>べんきょう</rt><rp></rp>
                        </ruby>を <br>  <ruby>
                            始<rp></rp><rt>はじ</rt><rp></rp>
                            </ruby>  めましょう。<br><span style="font-family: serif;">Let's study Hiragana.</span>  </a> 

                            
                   {{-- <button type="button" class="btn btn-Secondary btn-lg btn-block">Kanji </button>
                    <button type="button" class="btn btn-Secondary btn-lg btn-block">Katakana </button>               
                {{-- <button type="button" class="btn btn-Secondary btn-lg btn-block">Kanji </button>
                    <button type="button" class="btn btn-Secondary btn-lg btn-block">Katakana </button> --}}
               
                    <a class="nav-link" href="{{ url('/logout') }}">やめる <span style="font-family: serif;">Log out</span></a> </div>
            </div>
        </div>
    </div>
   
</div>
@endsection