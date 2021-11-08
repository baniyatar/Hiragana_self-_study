@extends('layout')
 
@section('content')
<main class="List">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('あたま') }}</div> --}}
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
                                    <th><p class="font-size-big gothic bold" > あ</p><p class="font-size-big mincho ">たま</p></th>
                                  
                                </tr> --}}
                               
        
                                <div style="display: flex;  space-between;">
                                <p class="font-size-big gothic bold" > あ</p><p class="font-size-big mincho ">たま</p>

                                </div>
                            </table>
                            <a onclick="playSound();"> Play</a>
                    <audio id ="sample" autoplay>
                    <source  src="{{ asset('hiragana\Alistsound\あたま.wav') }}" type="audio/wav" />
                    </audio>

                    </body>
                    <a href="{{ URL::to( '/aame') }}">Next</a>
            </div>
        </div>
    </div>
</div>
</div>
</main>


@endsection