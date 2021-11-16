<!DOCTYPE html>
<html>
 <head>
  <title>わPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSound1() { document.getElementById('audio1').play(); } 
    function playSound2() { document.getElementById('audio2').play(); } 
    function playSound3() { document.getElementById('audio3').play(); } 
    function playSound4() { document.getElementById('audio4').play(); } 
    function playSound0() { document.getElementById('audio0').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">わ

	<audio id="audio0">
    <source src="hiragana/wa/わ.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/wa/sound-s.png" onclick="playSound0()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/wa/wa.gif" alt="わgif">
  <img src="hiragana/wa/わ.png" alt="わpng">
</div><br>  

<p class = "font_word">かわ

  <audio id="audio1">
    <source src="hiragana/wa/かわ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/wa/sound-s.png" onclick="playSound1()">

  <!-- <br><img src="hiragana/ta/red.png" alt=""> -->
</p>
<p class = "font_word">かわいい
  <audio id="audio2">
    <source src="hiragana/wa/かわいい.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/wa/sound-s.png" onclick="playSound2()">

  <!-- <br><img src="hiragana/ta/foot.png" alt=""> -->
</p>

<p class = "font_word">にわ
  <audio id="audio3">
    <source src="hiragana/wa/にわ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/wa/sound-s.png" onclick="playSound3()">

  <!-- <br><img src="hiragana/ta/head.png" alt=""> -->
</p>

<p class = "font_word">わたし
  <audio id="audio4">
    <source src="hiragana/wa/わたし.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/wa/sound-s.png" onclick="playSound4()">

  <!-- <br><img src="hiragana/ta/ame.jpg" alt=""> -->
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/roAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/woAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
