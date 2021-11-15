<!DOCTYPE html>
<html>
 <head>
  <title>かPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundKaidan() { document.getElementById('audio1').play(); } 
    function playSoundKasa() { document.getElementById('audio2').play(); } 
    function playSoundKaban() { document.getElementById('audio3').play(); } 
    function playSoundKawa() { document.getElementById('audio4').play(); } 
    function playSoundKa() { document.getElementById('audioKa').play(); } 
  </script>
	<body>
	<div class="box">
	<p class = "font_word">か

	<audio id="audioKa">
    <source src="hiragana/ka/か.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/ka/sound-s.png" onclick="playSoundKa()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/ka/ka.gif" alt="かgif">
  <img src="hiragana/ka/か.png" alt="かpng">
</div><br>  

<p class = "font_word">かいだん

  <audio id="audio1">
    <source src="hiragana/ka/かいだん.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ka/sound-s.png" onclick="playSoundKaidan()">

  <br>
  <!-- <img src="hiragana/a/red.png" alt="">-->
</p>
<p class = "font_word">かさ
  <audio id="audio2">
    <source src="hiragana/ka/かさ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ka/sound-s.png" onclick="playSoundKasa()">

  <br>
  <!-- <img src="hiragana/a/foot.png" alt="">-->
</p>

<p class = "font_word">かばん
  <audio id="audio3">
    <source src="hiragana/ka/かばん.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ka/sound-s.png" onclick="playSoundKaban()">
  <br>
  <!--<img src="hiragana/a/head.png" alt="">-->
</p>

<p class = "font_word">かわ
  <audio id="audio4">
    <source src="hiragana/ka/かわ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ka/sound-s.png" onclick="playSoundKawa()">
  <br>
  <!--<img src="hiragana/a/ame.jpg" alt="">-->
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/oAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/kiAlphabet')}}'">NEXT&gt;</button>
</body>
</html>