@extends('layout')
 
@section('content')
<main class="List">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('あ') }}</div>
                <head>
                    <script>
                  <meta name="viewport" content="width=device-width, initial-scale=1">
                  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                </head>
<body>

    <img src="{{ asset('hiragana\Alistgif\あ（small）.gif') }}"  onClick="document.getElementById('audio_play').play(); return false;"  />
    
    
    <div><p class ="font-size-big century">Writing order of 'あ' </p></div> 

<img src="{{ asset('hiragana\A-nWriting order\あ-bw.png') }}" >

    
<div ><p class ="font-size-big century">Vocabulary with (or Including) ‘あ’  </p></div> 
<a href="{{ URL::to( '/aka') }}"> <div style="display: flex;  space-between;">
                                <p class="font-size-big gothic bold" > あ</p><p class="font-size-big mincho ">か</p>
                                </div></a>
   
                                <div style="display: flex;  space-between;">
        
        <p class="font-size-big gothic bold" > あ</p><p class="font-size-big mincho ">し</p>
        </div>
        <div style="display: flex;  space-between;">
                                <p class="font-size-big gothic bold" > あ</p><p class="font-size-big mincho ">たま</p>

                                </div>
                                <div style="display: flex;  space-between;">
                                <p class="font-size-big gothic bold" > あ</p><p class="font-size-big mincho ">め</p>

                                </div>


                                <audio id="audio_play">
                                    <source  src="{{ asset('\hiragana\Hiragana-sound\あ.wav') }}" type="audio/wav" />
 
</audio>

                    </body>
                    <a href="{{ URL::to( '/aka') }}">Next</a>
            </div>
        </div>
    </div>
</div>
</div>
</main>


@endsection