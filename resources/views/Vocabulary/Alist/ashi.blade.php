@extends('layout')
 
@section('content')
<main class="List">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- <div class="card-header">{{ __('あし') }}</div> --}}
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
        
                                <p class="font-size-big gothic bold" > あ</p><p class="font-size-big mincho ">し</p>
                                </div>
                            </table>
                            <a onclick="playSound();"> Play</a>
                    <audio id ="sample" autoplay>
                    <source  src="{{ asset('hiragana\Alistsound\あし.wav') }}" type="audio/wav" />
                    </audio>

                    </body>
                    <a href="{{ URL::to( '/atama') }}">Next</a>
            </div>
        </div>
    </div>
</div>
</div>
</main>


@endsection