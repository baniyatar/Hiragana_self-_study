<!DOCTYPE html>
<html>
 <head>
  <title>えPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundE() { document.getElementById('audioE').play(); } 
    function playSoundEiga() { document.getElementById('audio1').play(); } 
    function playSoundEki() { document.getElementById('audio2').play(); } 
    function playSoundEnPitsu() { document.getElementById('audio3').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">え

	<audio id="audioE">
    <source src="hiragana/e/え.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/e/sound-s.png" onclick="playSoundE()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/e/e.gif" alt="えgif">
</div><br>  
<div class = "letter_start">    <img src="hiragana/e/e.png" alt="えpng">
  </div>

<p class = "font_word">えいが

  <audio id="audio1">
    <source src="hiragana/e/えいが.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/e/sound-s.png" onclick="playSoundEiga()">
  <p style="font-size: 50;">Movie</p>
  <!-- <br><img src="hiragana/e/red.png" alt=""> -->
</p>
<p class = "font_word">えき
  <audio id="audio2">
    <source src="hiragana/e/えき.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/e/sound-s.png" onclick="playSoundEki()">
  <p style="font-size: 50;">Railway Station</p>
  <!-- <br><img src="hiragana/e/foot.png" alt=""> -->
</p>

<p class = "font_word">えんぴつ
  <audio id="audio3">
    <source src="hiragana/e/えんぴつ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/e/sound-s.png" onclick="playSoundEnPitsu()">
  <p style="font-size: 50;">Pencil</p>
  <!-- <br><img src="hiragana/e/head.png" alt=""> -->
</p>


	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/uAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/oAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
