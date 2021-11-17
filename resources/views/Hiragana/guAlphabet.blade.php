<!DOCTYPE html>
<html>
 <head>
  <title>ぐPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundiriguchi() { document.getElementById('audio1').play(); } 
    function playSounddeguchi() { document.getElementById('audio2').play(); } 
    function playSoundmatsusugu() { document.getElementById('audio3').play(); } 
     function playSoundgu() { document.getElementById('audioGu').play(); } 
  </script>
	<body>
	<div class="box">
	<p class = "font_word">ぐ

	<audio id="audioGu">
    <source src="hiragana/gu/gu.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/gu/sound-s.png" onclick="playSoundgu()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/gu/gu.gif" alt="gagif">
  <img src="hiragana/gu/gu.png" alt="gapng">
</div><br>  

<p style="font-size: 50px;">いり<span style="color: red;">ぐ</span>ち

  <audio id="audio1">
    <source src="hiragana/gu/いりぐち.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/gu/sound-s.png" onclick="playSoundiriguchi()">

  <br>
  <!-- <img src="hiragana/a/red.png" alt="">-->
</p>

<p style="font-size: 50px;">で<span style="color: red;">ぐ</span>ち
  <audio id="audio2">
    <source src="hiragana/gu/でぐち.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/gu/sound-s.png" onclick="playSounddeguchi()">

  <br>
  <!-- <img src="hiragana/a/foot.png" alt="">-->
</p>


<p style="font-size: 50px;">まっす<span style="color: red;">ぐ</span>
  <audio id="audio3">
    <source src="hiragana/gu/まっすぐ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/gu/sound-s.png" onclick="playSoundmatsusugu()">
  <br>
  <!--<img src="hiragana/a/head.png" alt="">-->
</p>

	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/giAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/geAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
