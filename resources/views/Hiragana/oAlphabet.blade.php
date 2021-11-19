<!DOCTYPE html>
<html>
 <head>
  <title>おPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundOsara() { document.getElementById('audio1').play(); } 
    function playSoundOtoko() { document.getElementById('audio2').play(); } 
    function playSoundOnaka() { document.getElementById('audio3').play(); } 
    function playSoundOnna() { document.getElementById('audio4').play(); } 
    function playSoundO() { document.getElementById('audioO').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">お

	<audio id="audioO">
    <source src="hiragana/o/お.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/o/sound-s.png" onclick="playSoundO()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/o/o.gif" alt="おgif">
</div><br>  
<div class = "letter_start">   <img src="hiragana/o/o.png" alt="おpng">
   </div>

<p class = "font_word">おさら

  <audio id="audio1">
    <source src="hiragana/o/おさら.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/o/sound-s.png" onclick="playSoundOsara()">
  <p style="font-size: 50;">Plate; Dish</p>
  <!-- <br><img src="hiragana/o/red.png" alt=""> -->
</p>
<p class = "font_word">おとこ
  <audio id="audio2">
    <source src="hiragana/o/おとこ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/o/sound-s.png" onclick="playSoundOtoko()">
  <p style="font-size: 50;">Man</p>
  <!-- <br><img src="hiragana/a/foot.png" alt=""> -->
</p>

<p class = "font_word">おなか
  <audio id="audio3">
    <source src="hiragana/o/おなか.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/o/sound-s.png" onclick="playSoundOnaka()">
  <p style="font-size: 50;">Stomach</p>
  <!-- <br><img src="hiragana/a/head.png" alt=""> -->
</p>

<p class = "font_word">おんな
  <audio id="audio4">
    <source src="hiragana/o/おんな.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/o/sound-s.png" onclick="playSoundOnna()">
  <p style="font-size: 50;">Women</p>
  <!-- <br><img src="hiragana/a/ame.jpg" alt=""> -->
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/eAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/kaAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
