<!DOCTYPE html>
<html>
 <head>
  <title>しPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundShio() { document.getElementById('audio1').play(); } 
    function playSoundShokuji() { document.getElementById('audio2').play(); } 
    function playSoundShingou() { document.getElementById('audio3').play(); } 
    function playSoundshinbun() { document.getElementById('audio4').play(); } 
    function playSoundShi() { document.getElementById('audioShi').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">し

	<audio id="audioShi">
    <source src="hiragana/shi/し.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/shi/sound-s.png" onclick="playSoundShi()">
</p>
    <div class = "letter_start">

  <img class="testBorder" src="hiragana/gif/shi.gif" alt="しgif">
</div><br>  
<div class = "letter_start">  <img src="/hiragana/shi/し-bw.png" alt="しpng">
   </div>

<p class = "font_word">しお

  <audio id="audio1">
    <source src="hiragana/shi/しお.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/shi/sound-s.png" onclick="playSoundShio()">

  {{-- <br><img src="hiragana/a/red.png" alt=""> --}}
</p>
<p class = "font_word">しょくじ
    <audio id="audio2">
      <source src="hiragana/shi/しょくじ.mp3" type="audio/mp3"> 
    </audio>
    <img style="vertical-align:middle;" src="hiragana/shi/sound-s.png" onclick="playSoundShokuji()">
  
    {{-- <br><img src="hiragana/a/ame.jpg" alt=""> --}}
  </p>

<p class = "font_word">しんごう
  <audio id="audio3">
    <source src="hiragana/shi/しんごう.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/shi/sound-s.png" onclick="playSoundShingou()">

  {{-- <br><img src="hiragana/a/foot.png" alt=""> --}}
</p>

<p class = "font_word">しんぶん
  <audio id="audio4">
    <source src="hiragana/shi/しんぶん.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/shi/sound-s.png" onclick="playSoundshinbun()">

  {{-- <br><img src="hiragana/a/head.png" alt=""> --}}
</p>


	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/saAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/suAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
