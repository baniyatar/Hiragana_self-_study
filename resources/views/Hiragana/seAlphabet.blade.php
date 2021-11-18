<!DOCTYPE html>
<html>
 <head>
  <title>せPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundSetsuken() { document.getElementById('audio1').play(); } 
    function playSoundSenaka() { document.getElementById('audio2').play(); } 
    function playSoundSensei() { document.getElementById('audio3').play(); } 
    function playSoundSentaku() { document.getElementById('audio4').play(); } 
    function playSoundSe() { document.getElementById('audioSe').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">せ

	<audio id="audioSe">
    <source src="hiragana/se/せ.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/se/sound-s.png" onclick="playSoundSe()">
</p>
    <div class = "letter_start">

  <img src="hiragana/gif/se.gif" alt="せgif">
</div><br>  
<div class = "letter_start">  <img src="/hiragana/se/せ-bw.png" alt="せpng">
   </div>

<p class = "font_word">せっけん

  <audio id="audio1">
    <source src="hiragana/se/せっけん.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/se/sound-s.png" onclick="playSoundSetsuken()">

  {{-- <br><img src="hiragana/a/red.png" alt=""> --}}
</p>
<p class = "font_word">せなか
    <audio id="audio2">
      <source src="hiragana/se/せなか.mp3" type="audio/mp3"> 
    </audio>
    <img style="vertical-align:middle;" src="hiragana/se/sound-s.png" onclick="playSoundSenaka()">
  
    {{-- <br><img src="hiragana/a/ame.jpg" alt=""> --}}
  </p>

<p class = "font_word">せんせい
  <audio id="audio3">
    <source src="hiragana/se/せんせい.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/se/sound-s.png" onclick="playSoundSensei()">

  {{-- <br><img src="hiragana/a/foot.png" alt=""> --}}
</p>

<p class = "font_word">せんたく
  <audio id="audio4">
    <source src="hiragana/se/せんたく.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/se/sound-s.png" onclick="playSoundSentaku()">

  {{-- <br><img src="hiragana/a/head.png" alt=""> --}}
</p>


	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/suAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/soAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
