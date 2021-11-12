<!DOCTYPE html>
<html>
 <head>
  <title>そPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundSouji() { document.getElementById('audio1').play(); } 
    function playSoundSoto() { document.getElementById('audio2').play(); } 
    function playSoundSofu() { document.getElementById('audio3').play(); } 
    function playSoundSora() { document.getElementById('audio4').play(); } 
    function playSoundSo() { document.getElementById('audioSo').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">そ

	<audio id="audioSo">
    <source src="hiragana/so/そ.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/so/sound-s.png" onclick="playSoundSo()">
</p>
    <div class = "letter_start">

  <img src="hiragana/gif/so.gif" alt="そgif">
 <img src="/hiragana/so/そ-bw.png" alt="そpng">
</div><br>  

<p class = "font_word">そうじ

  <audio id="audio1">
    <source src="hiragana/so/そうじ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/so/sound-s.png" onclick="playSoundSouji()">

  {{-- <br><img src="hiragana/a/red.png" alt=""> --}}
</p>
<p class = "font_word">そと
    <audio id="audio2">
      <source src="hiragana/so/そと.mp3" type="audio/mp3"> 
    </audio>
    <img style="vertical-align:middle;" src="hiragana/so/sound-s.png" onclick="playSoundSoto()">
  
    {{-- <br><img src="hiragana/a/ame.jpg" alt=""> --}}
  </p>

<p class = "font_word">そふ
  <audio id="audio3">
    <source src="hiragana/so/そふ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/so/sound-s.png" onclick="playSoundSofu()">

  {{-- <br><img src="hiragana/a/foot.png" alt=""> --}}
</p>

<p class = "font_word">そら
  <audio id="audio4">
    <source src="hiragana/so/そら.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/so/sound-s.png" onclick="playSoundSora()">

  {{-- <br><img src="hiragana/a/head.png" alt=""> --}}
</p>


	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/seAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/taAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
