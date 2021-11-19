<!DOCTYPE html>
<html>
 <head>
  <title>こPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundKouen() { document.getElementById('audio1').play(); } 
    function playSoundKouban() { document.getElementById('audio2').play(); } 
    function playSoundKoe() { document.getElementById('audio3').play(); } 
    function playSoundKodomo() { document.getElementById('audio4').play(); } 
    function playSoundKo() { document.getElementById('audioKo').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">こ

	<audio id="audioKo">
    <source src="hiragana/ko/こ.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/ko/sound-s.png" onclick="playSoundKo()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/ko/ko.gif" alt="こgif">
</div><br>  
<div class = "letter_start">    <img src="hiragana/ko/こ.png" alt="こpng">
  </div>

<p class = "font_word">こうえん

  <audio id="audio1">
    <source src="hiragana/ko/こうえん.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ko/sound-s.png" onclick="playSoundKouen()">
  <p style="font-size: 50;">Park</p>
  <br>
  <!--<img src="hiragana/a/red.png" alt="">-->
</p>
<p class = "font_word">こうばん
  <audio id="audio2">
    <source src="hiragana/ko/こうばん.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ko/sound-s.png" onclick="playSoundKouban()">
  <p style="font-size: 50;">Police Box</p>
  <br>
  <!--<img src="hiragana/a/foot.png" alt="">-->
</p>

<p class = "font_word">こえ
  <audio id="audio3">
    <source src="hiragana/ko/こえ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/a/sound-s.png" onclick="playSoundKoe()">
  <p style="font-size: 50;">Sound</p>
  <br>
  <!--<img src="hiragana/a/head.png" alt="">-->
</p>

<p class = "font_word">こども
  <audio id="audio4">
    <source src="hiragana/ko/こども.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ko/sound-s.png" onclick="playSoundKodomo()">
  <p style="font-size: 50;">Child</p>
  <br>
  <!--<img src="hiragana/a/ame.jpg" alt="">-->
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/keAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/saAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
