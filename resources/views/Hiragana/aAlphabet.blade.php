<!DOCTYPE html>
<html>
 <head>
  <title>あPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundAka() { document.getElementById('audio1').play(); } 
    function playSoundAshi() { document.getElementById('audio2').play(); } 
    function playSoundAtama() { document.getElementById('audio3').play(); } 
    function playSoundAme() { document.getElementById('audio4').play(); } 
    function playSoundA() { document.getElementById('audioA').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">あ

	<audio id="audioA">
    <source src="hiragana/a/あ.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/a/sound-s.png" onclick="playSoundA()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/a/a.gif" alt="あgif">
</div><br>  
<div class = "letter_start">    <img src="hiragana/a/あ.png" alt="あpng"></div>
<p class = "font_word">あか
  <audio id="audio1">
    <source src="hiragana/a/あか.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/a/sound-s.png" onclick="playSoundAka()">
  <p style="font-size: 50;">Red</p>
  <br><img src="hiragana/a/red.png" alt="">
</p>
<p class = "font_word">あし
  <audio id="audio2">
    <source src="hiragana/a/あし.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/a/sound-s.png" onclick="playSoundAshi()">
  <p style="font-size: 50;">Foot</p>
  <br><img src="hiragana/a/foot.png" alt="">
</p>

<p class = "font_word">あたま
  <audio id="audio3">
    <source src="hiragana/a/あたま.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/a/sound-s.png" onclick="playSoundAtama()">
  <p style="font-size: 50;">Head</p>
  <br><img src="hiragana/a/head.png" alt="">
</p>

<p class = "font_word">あめ
  <audio id="audio4">
    <source src="hiragana/a/あめ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/a/sound-s.png" onclick="playSoundAme()">
  <p style="font-size: 50;">Rain</p>
  <br><img src="hiragana/a/ame.jpg" alt="">
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/home')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/iAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
