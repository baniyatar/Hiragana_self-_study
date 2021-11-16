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
    function playSoundkagi() { document.getElementById('audio1').play(); } 
    function playSoundginkou() { document.getElementById('audio2').play(); } 
    function playSoundtsugi() { document.getElementById('audio3').play(); } 
     function playSoundgi() { document.getElementById('audioGi').play(); } 
  </script>
	<body>
	<div class="box">
	<p class = "font_word">ぎ

	<audio id="audioGi">
    <source src="hiragana/gi/gi.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/gi/sound-s.png" onclick="playSoundgi()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/gi/gi.gif" alt="gagif">
  <img src="hiragana/gi/gi.png" alt="gapng">
</div><br>  

<p class = "font_word">かぎ

  <audio id="audio1">
    <source src="hiragana/gi/かぎ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/gi/sound-s.png" onclick="playSoundkagi()">

  <br>
  <!-- <img src="hiragana/a/red.png" alt="">-->
</p>
<p class = "font_word">ぎんこう
  <audio id="audio2">
    <source src="hiragana/gi/ぎんこう.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/gi/sound-s.png" onclick="playSoundginkou()">

  <br>
  <!-- <img src="hiragana/a/foot.png" alt="">-->
</p>

<p class = "font_word">つぎ
  <audio id="audio3">
    <source src="hiragana/gi/つぎ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/gi/sound-s.png" onclick="playSoundtsugi()">
  <br>
  <!--<img src="hiragana/a/head.png" alt="">-->
</p>

	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/gaAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/guAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
