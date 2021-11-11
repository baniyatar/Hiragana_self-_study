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

  <img src="hiragana/a/あ（Midium）.gif" alt="あgif">
  <img src="hiragana/a/あ.png" alt="あpng">
</div><br>  

<p class = "font_word">あか

  <audio id="audio1">
    <source src="hiragana/a/あか.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/a/sound-s.png" onclick="playSoundAka()">

  <br><img src="hiragana/a/red.png" alt="red">
</p>
<p class = "font_word">あし
  <audio id="audio2">
    <source src="hiragana/a/あし.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/a/sound-s.png" onclick="playSoundAshi()">

  <br><img src="hiragana/a/foot.png" alt="red">
</p>

<p class = "font_word">あたま
  <audio id="audio3">
    <source src="hiragana/a/あたま.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/a/sound-s.png" onclick="playSoundAtama()">

  <br><img src="hiragana/a/head.png" alt="red">
</p>
	</div>
	<button class="home_btn" onClick="location.href='/test/home.html'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/construct')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='/test/a.html'">NEXT&gt;</button>
</body>
</html>
