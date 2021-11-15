<!DOCTYPE html>
<html>
 <head>
  <title>ぬPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundNu() { document.getElementById('audioNu').play(); } 
    function playSoundInu() { document.getElementById('audio1').play(); } 
    function playSoundNusumi() { document.getElementById('audio2').play(); } 
    function playSoundNuno() { document.getElementById('audio3').play(); } 
    function playSoundNurui() { document.getElementById('audio4').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">ぬ

	<audio id="audioNu">
    <source src="hiragana/nu/ぬ.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/nu/sound-s.png" onclick="playSoundNu()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/nu/nu.gif" alt="ぬgif">
  <img src="hiragana/nu/ぬ.png" alt="ぬpng">
</div><br>  

<p class = "font_word">いぬ

  <audio id="audio1">
    <source src="hiragana/nu/いぬ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/nu/sound-s.png" onclick="playSoundInu()">

  <br><img src="hiragana/nu/sample.png" alt="">
</p>
<p class = "font_word">ぬすみ
  <audio id="audio2">
    <source src="hiragana/nu/ぬすみ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/nu/sound-s.png" onclick="playSoundNusumi()">

  <br><img src="hiragana/nu/sample.png" alt="">
</p>

<p class = "font_word">ぬの
  <audio id="audio3">
    <source src="hiragana/nu/ぬの.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/nu/sound-s.png" onclick="playSoundNuno()">

  <br><img src="hiragana/nu/sample.png" alt="">
</p>

<p class = "font_word">ぬるい
  <audio id="audio4">
    <source src="hiragana/nu/ぬるい.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/nu/sound-s.png" onclick="playSoundNurui()">

  <br><img src="hiragana/nu/sample.png" alt="">
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/niAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/neAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
