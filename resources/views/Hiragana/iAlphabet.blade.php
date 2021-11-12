<!DOCTYPE html>
<html>
 <head>
  <title>いPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundI() { document.getElementById('audioI').play(); } 
    function playSoundIsha() { document.getElementById('audio1').play(); } 
    function playSoundIsu() { document.getElementById('audio2').play(); } 
    function playSoundInu() { document.getElementById('audio3').play(); } 
    function playSoundIriguchi() { document.getElementById('audio4').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">い

	<audio id="audioI">
    <source src="hiragana/i/い.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/i/sound-s.png" onclick="playSoundI()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/i/i.gif" alt="いgif">
  <img src="hiragana/i/i.png" alt="いpng">
</div><br>  

<p class = "font_word">いしゃ

  <audio id="audio1">
    <source src="hiragana/i/いしゃ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/i/sound-s.png" onclick="playSoundIsha()">

  <!-- <br><img src="hiragana/a/red.png" alt=""> -->
</p>
<p class = "font_word">いす
  <audio id="audio2">
    <source src="hiragana/i/いす.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/i/sound-s.png" onclick="playSoundIsu()">

  <!-- <br><img src="hiragana/a/foot.png" alt=""> -->
</p>

<p class = "font_word">いぬ
  <audio id="audio3">
    <source src="hiragana/i/いぬ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/i/sound-s.png" onclick="playSoundInu()">

  <!-- <br><img src="hiragana/a/head.png" alt=""> -->
</p>

<p class = "font_word">いりぐち
  <audio id="audio4">
    <source src="hiragana/i/いりぐち.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/i/sound-s.png" onclick="playSoundIriguchi()">

  <!-- <br><img src="hiragana/a/ame.jpg" alt=""> -->
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/aAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/uAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
