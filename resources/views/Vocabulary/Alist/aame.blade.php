@extends('layout')
 
@section('content')
<main class="List">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('あめ') }}</div>
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
                               
        
                       
                              <div  id="element1">  <h1 font-family='ＭＳ ゴシック' style="color:red;"> あ</h1></div> <div id="element2"><h2>め</h2>　</div>
                            </table>
                            <a onclick="playSound();"> Play</a>
                    <audio id ="sample" autoplay>
                    <source  src="{{ asset('hiragana\Alistsound\あめ.wav') }}" type="audio/wav" />
                    </audio>

                    </body>
            </div>
        </div>
    </div>
</div>
</div>
</main>


@endsection