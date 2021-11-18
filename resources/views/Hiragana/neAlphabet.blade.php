<!DOCTYPE html>
<html>
 <head>
  <title>ねPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundNe() { document.getElementById('audioNe').play(); } 
    function playSoundAne() { document.getElementById('audio1').play(); } 
    function playSoundNeko() { document.getElementById('audio2').play(); } 
    function playSoundNemui() { document.getElementById('audio3').play(); } 
    function playSoundMegane() { document.getElementById('audio4').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">ね

	<audio id="audioNe">
    <source src="hiragana/ne/ね.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/ne/sound-s.png" onclick="playSoundNe()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/ne/ne.gif" alt="ねgif">
</div><br>  
<div class = "letter_start">   <img src="hiragana/ne/ね.png" alt="ねpng">
   </div>

<p style="font-size: 50px;">あ<span style="color: red;">ね</span>

  <audio id="audio1">
    <source src="hiragana/ne/あね.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ne/sound-s.png" onclick="playSoundAne()">

  <br><img src="hiragana/ne/sample.png" alt="">
</p>
<p class = "font_word">ねこ
  <audio id="audio2">
    <source src="hiragana/ne/ねこ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ne/sound-s.png" onclick="playSoundNeko()">

  <br><img src="hiragana/ne/sample.png" alt="">
</p>

<p class = "font_word">ねむい
  <audio id="audio3">
    <source src="hiragana/ne/ねむい.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ne/sound-s.png" onclick="playSoundNemui()">

  <br><img src="hiragana/ne/sample.png" alt="">
</p>

<p class = "font_word">めがね
  <audio id="audio4">
    <source src="hiragana/ne/めがね.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ne/sound-s.png" onclick="playSoundMegane()">

  <br><img src="hiragana/ne/sample.png" alt="">
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/nuAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/noAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
