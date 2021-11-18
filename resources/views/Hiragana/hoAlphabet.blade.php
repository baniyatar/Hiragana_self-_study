<!DOCTYPE html>
<html>
 <head>
  <title>ほPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundHosoi() { document.getElementById('audio1').play(); } 
    function playSoundHon() { document.getElementById('audio2').play(); } 
    function playSoundHondana() { document.getElementById('audio3').play(); } 
    function playSoundHonya() { document.getElementById('audio4').play(); } 
    function playSoundHo() { document.getElementById('audioKo').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">ほ

	<audio id="audioKo">
    <source src="hiragana/ho/ほ.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/ho/sound-s.png" onclick="playSoundHo()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/ho/ho.gif" alt="ほgif">
</div><br>  
<div class = "letter_start">   <img src="hiragana/ho/ほ.png" alt="ほpng">
   </div>

<p class = "font_word">ほそい

  <audio id="audio1">
    <source src="hiragana/ho/ほそい.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ho/sound-s.png" onclick="playSoundHosoi()">

  <br>
  <!--<img src="hiragana/a/red.png" alt="">-->
</p>
<p class = "font_word">ほん
  <audio id="audio2">
    <source src="hiragana/ho/ほん.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ho/sound-s.png" onclick="playSoundHon()">

  <br>
  <!--<img src="hiragana/a/foot.png" alt="">-->
</p>

<p class = "font_word">ほんだな
  <audio id="audio3">
    <source src="hiragana/ho/ほんだな.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ho/sound-s.png" onclick="playSoundHondana()">

  <br>
  <!--<img src="hiragana/a/head.png" alt="">-->
</p>

<p class = "font_word">ほんや
  <audio id="audio4">
    <source src="hiragana/ho/ほんや.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ho/sound-s.png" onclick="playSoundHonya()">

  <br>
  <!--<img src="hiragana/a/ame.jpg" alt="">-->
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/heAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/maAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
