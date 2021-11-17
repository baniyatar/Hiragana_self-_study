<!DOCTYPE html>
<html>
 <head>
  <title>ぎゃPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundGya() { document.getElementById('audioYa').play(); } 
    function playSoundGyaku() { document.getElementById('audio1').play(); } 
    function playSoundGyakukouka() { document.getElementById('audio2').play(); } 
    function playSoundGyakuten() { document.getElementById('audio3').play(); } 
  </script>
	<body>
	<div class="box">
	<p class = "font_word">ぎ<span style="color: red;">ゃ</span>

	<audio id="audioYa">
    <source src="hiragana/gya/ぎゃ.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/ya/sound-s.png" onclick="playSoundGya()">
</p>
    <div class = "letter_start">

<!--  <img class = "testBorder" src="hiragana/ya/Ya.gif" alt="やgif">-->
  <img src="hiragana/gya/ぎゃ.png" alt="ぎゃpng">
</div><br>  

<p style="font-size: 50px;"><span style="color: red;">ぎゃ</span>く
  <audio id="audio1">
    <source src="hiragana/gya/ぎゃく.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/gya/sound-s.png" onclick="playSoundGyaku()">
  <br>
  <!--<img src="hiragana/ya/sample.png" alt="">-->
</p>
<p style="font-size: 50px;"><span style="color: red;">ぎゃ</span>くこうか
  <audio id="audio2">
    <source src="hiragana/gya/ぎゃくこうか.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/gya/sound-s.png" onclick="playSoundGyakukouka()">
  <br>
  <!--<img src="hiragana/ya/sample.png" alt="">-->
</p>
<p style="font-size: 50px;"><span style="color: red;">ぎゃ</span>くてん
  <audio id="audio3">
    <source src="hiragana/gya/ぎゃくてん.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/gya/sound-s.png" onclick="playSoundGyakuten()">
  <br>
  <!--<img src="hiragana/ya/sample.png" alt="">-->
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/kyoAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/gyuAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
