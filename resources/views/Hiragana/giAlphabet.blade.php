<!DOCTYPE html>
<html>
 <head>
  <title>ぎPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundgaigoku() { document.getElementById('audio1').play(); } 
    function playSoundgakosei() { document.getElementById('audio2').play(); } 
    function playSoundgatsukou() { document.getElementById('audio3').play(); } 
     function playSoundga() { document.getElementById('audioGa').play(); } 
  </script>
	<body>
	<div class="box">
	<p class = "font_word">ぎ

	<audio id="audioGa">
    <source src="hiragana/gi/ま.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/gi/sound-s.png" onclick="playSoundga()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/gi/gi.gif" alt="gagif">
  <img src="hiragana/gi/gi.png" alt="gapng">
</div><br>  

<p class = "font_word">がいこく

  <audio id="audio1">
    <source src="hiragana/gi/がいこく.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/gi/sound-s.png" onclick="playSoundgaigoku()">

  <br>
  <!-- <img src="hiragana/a/red.png" alt="">-->
</p>
<p class = "font_word">がくせい
  <audio id="audio2">
    <source src="hiragana/gi/がくせい.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/gi/sound-s.png" onclick="playSoundgakosei()">

  <br>
  <!-- <img src="hiragana/a/foot.png" alt="">-->
</p>

<p class = "font_word">がっこう
  <audio id="audio3">
    <source src="hiragana/gi/がっこう.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/gi/sound-s.png" onclick="playSoundgatsukou()">
  <br>
  <!--<img src="hiragana/a/head.png" alt="">-->
</p>

	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/hoAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/miAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
