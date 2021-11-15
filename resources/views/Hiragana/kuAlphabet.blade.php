<!DOCTYPE html>
<html>
 <head>
  <title>くPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundKudamono() { document.getElementById('audio1').play(); } 
    function playSoundKuchi() { document.getElementById('audio2').play(); } 
    function playSoundKutsu() { document.getElementById('audio3').play(); } 
    function playSoundKuruma() { document.getElementById('audio4').play(); } 
    function playSoundKu() { document.getElementById('audioKu').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">く

	<audio id="audioKu">
    <source src="hiragana/ku/く.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/ku/sound-s.png" onclick="playSoundKu()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/ku/ku.gif" alt="くgif">
  <img src="hiragana/ku/く.png" alt="くpng">
</div><br>  

<p class = "font_word">くだもの

  <audio id="audio1">
    <source src="hiragana/ku/くだもの.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ku/sound-s.png" onclick="playSoundKudamono()">

  <br>
  <!--<img src="hiragana/a/red.png" alt="">-->
</p>
<p class = "font_word">くち
  <audio id="audio2">
    <source src="hiragana/ku/くち.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ku/sound-s.png" onclick="playSoundKuchi()">

  <br>
  <!--<img src="hiragana/a/foot.png" alt="">-->
</p>

<p class = "font_word">くつ
  <audio id="audio3">
    <source src="hiragana/ku/くつ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ku/sound-s.png" onclick="playSoundKutsu()">

  <br>
  <!--<img src="hiragana/a/head.png" alt="">-->
</p>

<p class = "font_word">くるま
  <audio id="audio4">
    <source src="hiragana/ku/くるま.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ku/sound-s.png" onclick="playSoundKuruma()">

  <br>
  <!--<img src="hiragana/a/ame.jpg" alt="">-->
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/kiAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/keAlphabet')}}'">NEXT&gt;</button>
</body>
</html>