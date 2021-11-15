<!DOCTYPE html>
<html>
 <head>
  <title>すPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundSuiei() { document.getElementById('audio1').play(); } 
    function playSoundSuki() { document.getElementById('audio2').play(); } 
    function playSoundSukunai() { document.getElementById('audio3').play(); } 
    function playSoundSuzushii() { document.getElementById('audio4').play(); } 
    function playSoundSu() { document.getElementById('audioSu').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">す

	<audio id="audioSu">
    <source src="hiragana/su/す.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/su/sound-s.png" onclick="playSoundSu()">
</p>
    <div class = "letter_start">

  <img src="hiragana/gif/su.gif" alt="すgif">
 <img src="/hiragana/su/す-bw.png" alt="すpng">
</div><br>  

<p class = "font_word">すいえい

  <audio id="audio1">
    <source src="hiragana/su/すいえい.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/su/sound-s.png" onclick="playSoundSuiei()">

  {{-- <br><img src="hiragana/a/red.png" alt=""> --}}
</p>
<p class = "font_word">すき
    <audio id="audio2">
      <source src="hiragana/su/すき.mp3" type="audio/mp3"> 
    </audio>
    <img style="vertical-align:middle;" src="hiragana/su/sound-s.png" onclick="playSoundSuki()">
  
    {{-- <br><img src="hiragana/a/ame.jpg" alt=""> --}}
  </p>

<p class = "font_word">すくない
  <audio id="audio3">
    <source src="hiragana/su/すくない.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/su/sound-s.png" onclick="playSoundSukunai()">

  {{-- <br><img src="hiragana/a/foot.png" alt=""> --}}
</p>

<p class = "font_word">すずしい
  <audio id="audio4">
    <source src="hiragana/su/すずしい.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/su/sound-s.png" onclick="playSoundSuzushii()">

  {{-- <br><img src="hiragana/a/head.png" alt=""> --}}
</p>


	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/shiAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/seAlphabet')}}'">NEXT&gt;</button>
</body>
</html>