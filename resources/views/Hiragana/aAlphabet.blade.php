<!DOCTYPE html>
<html>
 <head>
  <title>あPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function audioStop() {
      document.getElementById('audio1').pause();
      document.getElementById('audio1').currentTime = 0;      
      document.getElementById('audio2').pause();
      document.getElementById('audio2').currentTime = 0;
      document.getElementById('audio3').pause();
      document.getElementById('audio3').currentTime = 0;
      // document.getElementById('audio4').pause();
      // document.getElementById('audio4').currentTime = 0;
      document.getElementById('audioA').pause();
      document.getElementById('audioA').currentTime = 0;
    }
    function playSoundAka() {
      audioStop();
      document.getElementById('audio1').play();
    } 
    function playSoundAshi() {
      audioStop();
      document.getElementById('audio2').play();
    } 
    function playSoundAtama() {
      audioStop();
      document.getElementById('audio3').play();
    } 
    // function playSoundAme() {
    //   audioStop();
    //   document.getElementById('audio4').play();
    // } 
    function playSoundA() {
      audioStop();
      document.getElementById('audioA').play();
    } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">あ

	<audio id="audioA">
    <source src="hiragana/a/あ.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/a/sound-s.png" onclick="playSoundA()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/a/a.gif" alt="あgif">
</div><br>  
<div class = "letter_start">    <img src="hiragana/a/あ.png" alt="あpng"></div>
<p class = "font_word">あか　Red
  <audio id="audio1">
    <source src="hiragana/a/あか.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/a/sound-s.png" onclick="playSoundAka()">
  <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/a/red.png" alt="">
</p>
<br>
<p class = "font_word">あし　Foot
  <audio id="audio2">
    <source src="hiragana/a/あし.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/a/sound-s.png" onclick="playSoundAshi()">
  <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/a/sample.png" alt="">
</p>
<br>
<p class = "font_word">あたま　Head
  <audio id="audio3">
    <source src="hiragana/a/あたま.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/a/sound-s.png" onclick="playSoundAtama()">
  <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/a/sample.png" alt="">
</p>
<!--
<br>
<p class = "font_word">あめ　Rain
  <audio id="audio4">
    <source src="hiragana/a/あめ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/a/sound-s.png" onclick="playSoundAme()">
  <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/a/sample.png" alt="">
</p>
-->
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/home')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/iAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
