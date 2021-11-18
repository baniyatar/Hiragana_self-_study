<!DOCTYPE html>
<html>
 <head>
  <title>ぴょPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundPyu() { document.getElementById('audioPyu').play(); } 
    //function playSoundGyuuGyuu() { document.getElementById('audio1').play(); } 
    //function playSoundGyuuniku() { document.getElementById('audio2').play(); } 
    //function playSoundGyuunyuu() { document.getElementById('audio3').play(); } 
  </script>
	<body>
	<div class="box">
	<p class = "font_word">ぴ<span style="color: red;">ゅ</span>

	<audio id="audioPyu">
    <source src="hiragana/pyu/ぴゅ.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/pyu/sound-s.png" onclick="playSoundPyu()">
</p>
    <div class = "letter_start">

  <img src="hiragana/pyu/ぴゅ.png" alt="ぴゅpng">
</div><br>  

<p>「ぴゅ」は<ruby><rb>語</rb><rt>ご</rt><rb>彙</rb><rt>い</rt></ruby>のなかで<ruby><rb>使</rb><rt>つか</rt></ruby>われることはありません。

</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/pyaAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/pyoAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
