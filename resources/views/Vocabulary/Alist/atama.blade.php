@extends('layout')
 
@section('content')
<main class="List">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('あたま') }}</div>
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
                               
        
                       
                               <h1> あたま</h1>
                            </table>
                            <a onclick="playSound();"> Play</a>
                    <audio id ="sample" autoplay>
                    <source  src="{{ asset('hiragana\Alistsound\あたま.wav') }}" type="audio/wav" />
                    </audio>

                    </body>
            </div>
        </div>
    </div>
</div>
</div>
</main>


@endsection