<!DOCTYPE html>
<html>
 <head>
  <title>へPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundTaihen() { document.getElementById('audio1').play(); } 
    function playSoundHeya() { document.getElementById('audio2').play(); } 
    function playSoundHen() { document.getElementById('audio3').play(); } 
    function playSoundHenji() { document.getElementById('audio4').play(); } 
    function playSoundHe() { document.getElementById('audioKe').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">へ

	<audio id="audioKe">
    <source src="hiragana/he/へ.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/he/sound-s.png" onclick="playSoundHe()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/he/he.gif" alt="へgif">
  <img src="hiragana/he/へ.png" alt="へpng">
</div><br>  

<p class = "font_word">たいへん

  <audio id="audio1">
    <source src="hiragana/he/たいへん.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/a/sound-s.png" onclick="playSoundTaihen()">

  <br>
  <!--<img src="hiragana/a/red.png" alt="">-->
</p>
<p class = "font_word">へや
  <audio id="audio2">
    <source src="hiragana/he/へや.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/he/sound-s.png" onclick="playSoundHeya()">

  <br>
  <!--<img src="hiragana/a/foot.png" alt="">-->
</p>

<p class = "font_word">へん
  <audio id="audio3">
    <source src="hiragana/ke/へん.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ke/sound-s.png" onclick="playSoundKeshiki()">

  <br>
  <!--<img src="hiragana/a/head.png" alt="">-->
</p>

<p class = "font_word">へんじ
  <audio id="audio4">
    <source src="hiragana/ke/へんじ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ke/sound-s.png" onclick="playSoundKeshigomu()">

  <br>
  <!--<img src="hiragana/a/ame.jpg" alt="">-->
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/kuAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/koAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
