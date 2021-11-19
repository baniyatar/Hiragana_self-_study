<!DOCTYPE html>
<html>
 <head>
  <title>めPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundaame() { document.getElementById('audio1').play(); } 
    function playSoundtsumetai() { document.getElementById('audio2').play(); } playSoundtsumetai
    function playSoundMe() { document.getElementById('audio3').play(); } 
    function playSoundtmegane() { document.getElementById('audio4').play(); } 
    function playSoundMe() { document.getElementById('audioMe').play(); } 
  </script>
	<body>
	<div class="box">
	<p class = "font_word">め

	<audio id="audioMe">
    <source src="hiragana/me/め.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/me/sound-s.png" onclick="playSoundMe()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/me/me.gif" alt="めgif">
</div><br>  
<div class = "letter_start">    <img src="hiragana/me/め-bw.png" alt="png">
  </div>

<p style="font-size: 50px;">あ<span style="color: red;">め</span>

  <audio id="audio1">
    <source src="hiragana/me/あめ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/me/sound-s.png" onclick="playSoundaame()">
  <p style="font-size: 50;">Rain</p>
  <br>
  <!-- <img src="hiragana/a/red.png" alt="">-->
</p>
<p style="font-size: 50px;">つ<span style="color: red;">め</span>たい
  <audio id="audio2">
    <source src="hiragana/me/つめたい.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/me/sound-s.png" onclick="playSoundtsumetai()">
  <p style="font-size: 50;">Cold</p>
  <br>
  <!-- <img src="hiragana/a/foot.png" alt="">-->
</p>

<p class = "font_word">め
  <audio id="audio3">
    <source src="hiragana/me/め.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/me/sound-s.png" onclick="playSoundMe()">
  <p style="font-size: 50;">Eye</p>
  <br>
  <!--<img src="hiragana/a/head.png" alt="">-->
</p>

<p class = "font_word">めがね
  <audio id="audio4">
    <source src="hiragana/me/めがね.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/me/sound-s.png" onclick="playSoundtmegane()">
  <p style="font-size: 50;">Spectacles</p>
  <br>
  <!--<img src="hiragana/a/ame.jpg" alt="">-->
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/muAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/moAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
