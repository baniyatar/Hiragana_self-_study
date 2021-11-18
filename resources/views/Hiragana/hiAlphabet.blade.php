<!DOCTYPE html>
<html>
 <head>
  <title>ひPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundHikouki() { document.getElementById('audio1').play(); } 
    function playSoundHiragana() { document.getElementById('audio2').play(); } 
    function playSoundHiru() { document.getElementById('audio3').play(); } 
    function playSoundHirugohan() { document.getElementById('audio4').play(); } 
    function playSoundHi() { document.getElementById('audioHi').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">ひ

	<audio id="audioHi">
    <source src="hiragana/hi/ひ.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/a/sound-s.png" onclick="playSoundHi()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/hi/hi.gif" alt="ひgif">
</div><br>  
<div class = "letter_start">     <img src="hiragana/hi/ひ.png" alt="ひpng">
 </div>

<p class = "font_word">ひこうき

  <audio id="audio1">
    <source src="hiragana/hi/ひこうき.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/hi/sound-s.png" onclick="playSoundHikouki()">
  <br>
  <!--<img src="hiragana/a/red.png" alt="">-->
</p>
<p class = "font_word">ひらがな
  <audio id="audio2">
    <source src="hiragana/hi/ひらがな.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/hi/sound-s.png" onclick="playSoundHiragana()">

  <br>
  <!--<img src="hiragana/a/foot.png" alt="">-->
</p>

<p class = "font_word">ひる
  <audio id="audio3">
    <source src="hiragana/hi/ひる.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/hi/sound-s.png" onclick="playSoundHiru()">

  <br>
  <!--<img src="hiragana/a/head.png" alt="">-->
</p>

<p class = "font_word">ひるごはん
  <audio id="audio4">
    <source src="hiragana/hi/ひるごはん.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/hi/sound-s.png" onclick="playSoundHirugohan()">

  <br>
  <!--<img src="hiragana/a/ame.jpg" alt="">-->
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/haAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/fuAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
