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
                
                    <body  onload="init();">
                        <table class="table table-sm">
                            {{-- <thead>
                                <tr>
                                    <th>A Vocabulary</th>
                                  
                                </tr> --}}
                                <div style="display: flex;  space-between;">
        
                                <p class="font-size-big gothic bold" > あ</p><p class="font-size-big mincho ">たま</p>
                                </div>
                            </table>
                            <a onclick="playSound();"> </a>
                    <audio id ="sample"  autoplay  muted playsinline>
                    <source  src="{{ asset('hiragana\Alistsound\あたま.wav') }}" type="audio/wav" />
                    </audio>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                      
                        </div>
                        <select class="custom-select" >
                      <optgroup>
                          <optgroup label ="あ　line"></optgroup>
                          <option value= "1"><a>あ</a></option>
                          <option value="2">い</option>
                          <option value="3">う</option>
                          <option value="４">え</option>
                          <option value="５">お</option>
                      
                         <optgroup>
                          <optgroup label ="か　line"　></optgroup>
                          <option value="1">か</option>
                          <option value="2">き</option>
                          <option value="3">く</option>
                          <option value="４">け</option>
                          <option value="５">こ</option>
                      
                          <optgroup label ="さ　line"　></optgroup>
                          <option value="1">さ</option>
                          <option value="2">し</option>
                          <option value="3">す</option>
                          <option value="４">せ</option>
                          <option value="５">そ</option>
                      
                          <optgroup label ="た　line"　></optgroup>
                          <option value="1">た</option>
                          <option value="2">ち</option>
                          <option value="3">つ</option>
                          <option value="４">て</option>
                          <option value="５">と</option>
                      
                          <optgroup label ="な　line"　></optgroup>
                          <option value="1">な</option>
                          <option value="2">に</option>
                          <option value="3">ぬ</option>
                          <option value="４">ね</option>
                          <option value="５">の</option>
                        
                          <optgroup label ="は　line"　></optgroup>
                          <option value="1">は</option>
                          <option value="2">ひ</option>
                          <option value="3">ふ</option>
                          <option value="４">へ</option>
                          <option value="５">ほ</option>
                      
                          <optgroup label ="ま　line"　></optgroup>
                          <option value="1">ま</option>
                          <option value="2">み</option>
                          <option value="3">む</option>
                          <option value="４">め</option>
                          <option value="５">も</option>
                       
                      
                      <optgroup label ="や　line"　></optgroup>
                          <option value="1">や</option>
                          <option value="2">ゆ</option>
                          <option value="3">よ</option>
                       
                      
                         <optgroup label ="ら　line"><a> </optgroup>
                          <option value="1">ら</option>
                          <option value="2">り</option>
                          <option value="3">る</option>
                          <option value="４">れ</option>
                          <option value="５">ろ</option>
                         
                      
                          <optgroup label ="ら　line"　></optgroup>
                          <option value="1">ら</option>
                          <option value="2">り</option>
                          <option value="3">る</option>
                          <option value="４">れ</option>
                          <option value="５">ろ</option>
                          </optgroup>
                      
                      
                          <optgroup label ="わ　line"　></optgroup>
                          <option value="1">わ</option>
                          <option value="2">を</option>
                          <option value="3">ん</option>
                      
                          </optgroup>
                      
                        </select>
                      <div class="navigationprevious"><a href="{{ URL::to( '/ashi') }}">Previous</a></div>
                        <div class="navigationnext"><a href="{{ URL::to( '/aame') }}">Next</a></div>
                      
                      </div>
                  
                    </body>

                    
            </div>
        </div>
    </div>
</div>
</div>
</main>


@endsection