<!DOCTYPE html>
<html>
 <head>
  <title>うPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundUe() { document.getElementById('audio1').play(); } 
    function playSoundUshi() { document.getElementById('audio2').play(); } 
    function playSoundUta() { document.getElementById('audio3').play(); } 
    function playSoundUmi() { document.getElementById('audio4').play(); } 
    function playSoundU() { document.getElementById('audioU').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">う

	<audio id="audioU">
    <source src="hiragana/u/う.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/u/sound-s.png" onclick="playSoundU()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/u/u.gif" alt="うgif">
</div><br>  
<div class = "letter_start">    <img src="hiragana/u/u.png" alt="うpng">
  </div>

<p class = "font_word">うえ

  <audio id="audio1">
    <source src="hiragana/u/うえ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/u/sound-s.png" onclick="playSoundUe()">
  <p style="font-size: 50;">Above; Up</p>
  <!-- <br><img src="hiragana/a/red.png" alt=""> -->
</p>
<p class = "font_word">うし
  <audio id="audio2">
    <source src="hiragana/u/うし.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/u/sound-s.png" onclick="playSoundUshi()">
  <p style="font-size: 50;">Cow</p>
  <!-- <br><img src="hiragana/a/foot.png" alt=""> -->
</p>

<p class = "font_word">うた
  <audio id="audio3">
    <source src="hiragana/u/うた.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/u/sound-s.png" onclick="playSoundUta()">
  <p style="font-size: 50;">Song</p>
  <!-- <br><img src="hiragana/a/head.png" alt=""> -->
</p>

<p class = "font_word">うみ
  <audio id="audio4">
    <source src="hiragana/u/うみ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/u/sound-s.png" onclick="playSoundUmi()">
  <p style="font-size: 50;">Sea</p>
  <!-- <br><img src="hiragana/a/ame.jpg" alt=""> -->
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/iAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/eAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
