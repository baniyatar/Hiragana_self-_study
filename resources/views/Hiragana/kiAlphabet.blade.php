<!DOCTYPE html>
<html>
 <head>
  <title>きPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundKiiro() { document.getElementById('audio1').play(); } 
    function playSoundKita() { document.getElementById('audio2').play(); } 
    function playSoundKitte() { document.getElementById('audio3').play(); } 
    function playSoundKippu() { document.getElementById('audio4').play(); } 
    function playSoundKi() { document.getElementById('audioKi').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">き

	<audio id="audioKi">
    <source src="hiragana/ki/き.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/a/sound-s.png" onclick="playSoundKi()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/ki/ki.gif" alt="きgif">
  <img src="hiragana/ki/き.png" alt="きpng">
</div><br>  

<p class = "font_word">きいろ

  <audio id="audio1">
    <source src="hiragana/ki/きいろ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ki/sound-s.png" onclick="playSoundKiiro()">
  <br>
  <!--<img src="hiragana/a/red.png" alt="">-->
</p>
<p class = "font_word">きた
  <audio id="audio2">
    <source src="hiragana/ki/きた.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ki/sound-s.png" onclick="playSoundKita()">

  <br>
  <!--<img src="hiragana/a/foot.png" alt="">-->
</p>

<p class = "font_word">きって
  <audio id="audio3">
    <source src="hiragana/ki/きって.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ki/sound-s.png" onclick="playSoundKitte()">

  <br>
  <!--<img src="hiragana/a/head.png" alt="">-->
</p>

<p class = "font_word">きっぷ
  <audio id="audio4">
    <source src="hiragana/ki/きっぷ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ki/sound-s.png" onclick="playSoundKippu()">

  <br>
  <!--<img src="hiragana/a/ame.jpg" alt="">-->
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/kaAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/kuAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
