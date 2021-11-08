@extends('layout')
 
@section('content')
<main class="List">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
   <head>           
         {{-- <div class="card-header">{{ __('あか') }}</div> --}}
<script>
    function init() {
    if (navigator.userAgent.match(/(iPhone|iPod|iPad|Android|BlackBerry)/)) {
            document.addEventListener("deviceready", initDB, false);
    } 
    else{
        initDB();
    }
}
function playSound ()
{
                var sample = document.getElementById("sample");
                sample.addEventListener("ended", function() {});  
                sample.play();
}
    </script>
                </head>
                    <body  onload="init">
                        <table class="table table-sm">
                            {{-- <thead>
                                <tr>
                                    <th>A Vocabulary</th>
                                  
                                </tr> --}}
                               
                                <div style="display: flex;  space-between;">
                                <p class="font-size-big gothic bold" > あ</p><p class="font-size-big mincho ">か</p>
                                </div>
                            </table>
                            <a onclick="playSound();"> Play</a>
                    <audio id ="sample" src="{{ asset('hiragana\Alistsound\あか.wav') }}" type="audio/wav"   autoplay>
                    {{-- <source playsinline webkit-playsinline/> --}}
                    </audio>

                    </body>
                    
                    <a href="{{ URL::to( '/ashi') }}">Next</a>
            </div>
        </div>
    </div>
</div>
</div>
</main>


@endsection