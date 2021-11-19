<!DOCTYPE html>
<html>
 <head>
  <title>なPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundNa() { document.getElementById('audioNa').play(); } 
    function playSoundNagai() { document.getElementById('audio1').play(); } 
    function playSoundNatsu() { document.getElementById('audio2').play(); } 
    function playSoundNatsuyasumi() { document.getElementById('audio3').play(); } 
    function playSoundNamae() { document.getElementById('audio4').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">な

	<audio id="audioNa">
    <source src="hiragana/na/な.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/na/sound-s.png" onclick="playSoundNa()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/na/na.gif" alt="なgif">
</div><br>  
<div class = "letter_start">     <img src="hiragana/na/な.png" alt="なpng">
 </div>

<p class = "font_word">ながい

  <audio id="audio1">
    <source src="hiragana/na/ながい.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/na/sound-s.png" onclick="playSoundNagai()">

  <br><img src="hiragana/na/sample.png" alt="">
</p>
<p class = "font_word">なつ
  <audio id="audio2">
    <source src="hiragana/na/なつ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/na/sound-s.png" onclick="playSoundNatsu()">

  <br><img src="hiragana/na/sample.png" alt="">
</p>

<p class = "font_word">なつやすみ
  <audio id="audio3">
    <source src="hiragana/na/なつやすみ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/na/sound-s.png" onclick="playSoundNatsuyasumi()">

  <br><img src="hiragana/na/sample.png" alt="">
</p>

<p class = "font_word">なまえ
  <audio id="audio4">
    <source src="hiragana/na/なまえ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/na/sound-s.png" onclick="playSoundNamae()">

  <br><img src="hiragana/na/sample.png" alt="">
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/toAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/niAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
