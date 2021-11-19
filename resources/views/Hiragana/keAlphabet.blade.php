<!DOCTYPE html>
<html>
 <head>
  <title>けPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundKeisatsu() { document.getElementById('audio1').play(); } 
    function playSoundKeitaidenwa() { document.getElementById('audio2').play(); } 
    function playSoundKeshiki() { document.getElementById('audio3').play(); } 
    function playSoundKeshigomu() { document.getElementById('audio4').play(); } 
    function playSoundKe() { document.getElementById('audioKe').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">け

	<audio id="audioKe">
    <source src="hiragana/ke/け.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/ke/sound-s.png" onclick="playSoundKe()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/ke/ke.gif" alt="けgif">
</div><br>  
<div class = "letter_start">    <img src="hiragana/ke/け.png" alt="けpng">
  </div>

<p class = "font_word">けいさつ

  <audio id="audio1">
    <source src="hiragana/ke/けいさつ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/a/sound-s.png" onclick="playSoundKeisatsu()">
  <p style="font-size: 50;">Police</p>
  <br>
  <!--<img src="hiragana/a/red.png" alt="">-->
</p>
<p class = "font_word">けいたいでんわ
  <audio id="audio2">
    <source src="hiragana/ke/けいたいでんわ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ke/sound-s.png" onclick="playSoundKeitaidenwa()">
  <p style="font-size: 50;">Cellphone</p>
  <br>
  <!--<img src="hiragana/a/foot.png" alt="">-->
</p>

<p class = "font_word">けしき
  <audio id="audio3">
    <source src="hiragana/ke/けしき.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ke/sound-s.png" onclick="playSoundKeshiki()">
  <p style="font-size: 50;">Scenery</p>
  <br>
  <!--<img src="hiragana/a/head.png" alt="">-->
</p>

<p class = "font_word">けしごむ
  <audio id="audio4">
    <source src="hiragana/ke/けしごむ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ke/sound-s.png" onclick="playSoundKeshigomu()">
  <p style="font-size: 50;">Eraser</p>
  <br>
  <!--<img src="hiragana/a/ame.jpg" alt="">-->
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/kuAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/koAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
