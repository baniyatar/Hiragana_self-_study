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
                <div class="card-header" style="text-align: center;"><span style="font-family: serif;font-weight: bold; font-size: 30px;">ひらがな</span>　<span style="font-family: serif;font-weight: bold; font-size: 30px;">Hiragana</span></div>
               
                <div class="card-body">
                  
{{-- <div class="myIframe">
                    <iframe src="\hiragana\index.html" > <div class="col-md-6 offset-md-4">
                        
                            
                    </div> </iframe><button type="やります　Quit" class="btn btn-primary" onclick="window.location='{{ url("dashboard")}}'">Yes</button><span>
</div> --}}

                    
                    <a href = "{{ url('/return') }}" class="btn btn-Secondary btn-lg btn-block" style="font-family: sans-serif">ひらがなの <ruby>
                        勉強<rp></rp><rt>べんきょう</rt><rp></rp>
                        </ruby>を <br>  <ruby>
                            始<rp></rp><rt>はじ</rt><rp></rp>
                            </ruby>  めましょう。<br><span style="font-family: serif;">Let's study Hiragana.</span>  
                    </a>

                    <br>
                    <p><font size="1">注１．
                        <br>この<ruby>システム<rt>しすてむ</rt></ruby>は<ruby>当分<rt>とうぶん</rt></ruby>の<ruby>間<rt>あいだ</rt></ruby>、<ruby>無料<rt>むりょう</rt></ruby>
                        ですが、その<ruby>間<rt>あいだ</rt></ruby>、<ruby>語彙<rt>ごい</rt></ruby>の<ruby>イラスト<rt>いらすと</rt></ruby>はありません。
                        <br>NOTE1;
                        <br>There are no illustration while this system is free of chrge.
                    </font></p>                            
                    <br>
                    <p><font size="1">注２．
                        <br>ひらがなや<ruby>語彙<rt>ごい</rt></ruby>の<ruby>音声<rt>おんせい</rt></ruby>が「<ruby>音声<rt>おんせい</rt></ruby>
                        」<ruby>アイコン<rt>あいこん</rt></ruby>を<ruby>押<rt>お</rt></ruby>しても<ruby>出<rt>で</rt></ruby>ないときは「HOME」<ruby>ボタン<rt>ぼたん</rt></ruby>
                        を<ruby>押<rt>お</rt></ruby>して、<ruby>メイン<rt>めいん</rt></ruby><ruby>画面<rt>がめん</rt></ruby>に<ruby>戻<rt>もど</rt></ruby>
                        り、<ruby>勉強<rt>べんきょう</rt></ruby>したい「ひらがな」をもう<ruby>一度<rt>いちど</rt></ruby><ruby>選<rt>えら</rt></ruby>んでください。<ruby>音声<rt>おんせい</rt></ruby>
                        が<ruby>復活<rt>ふっかつ</rt></ruby>します。
                        <br>NOTE2;
                        <br>Push "HOME-button" when sound does not appear. And select "hiragana" you want to study again.
                    </font></p>                            
               
               <!--     <a class="nav-link" href="{{ url('/logout') }}">やめる <span style="font-family: serif;">Log out</span></a> </div>-->
            </div>
        </div>
    </div>
   
</div>
@endsection