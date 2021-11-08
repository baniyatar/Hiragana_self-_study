@extends('layout')
 
@section('content')
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<main class="List">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                {{-- <div class="card-header">{{ __('あめ') }}</div> --}}
<script>
function playSound ()
{
                var sample = document.getElementById("sample");
                sample.addEventListener("ended", function() {});  
                sample.play();
}
    </script>
    
                
                    <body  onload="init">
                        <table class="table table-sm">
                            {{-- <thead>
                                <tr>
                                    <th>A Vocabulary</th>
                                  
                                </tr> --}}
                               
             <div style="display: flex;  space-between;">
                       
                              <p class="font-size-big gothic bold" > あ</p><p class="font-size-big mincho ">め</p>
                           
             </div>
                            </table>
                            <a onclick="playSound();"> Play</a>
                    <audio id ="sample" autoplay playsinline>
                    <source  src="{{ asset('hiragana\Alistsound\あめ.wav') }}"  type="audio/wav" />
                    </audio>

                    </body>
                  
                    <a href="{{ URL::to( 'users/'  ) }}">Next</a>
            </div>
        </div>
    </div>
</div>
</div>
</main>


@endsection