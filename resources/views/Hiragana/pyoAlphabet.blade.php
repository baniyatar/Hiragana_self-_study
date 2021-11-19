<!DOCTYPE html>
<html>
 <head>
  <title>ぴょPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundPyo() { document.getElementById('audioPyo').play(); } 
    function playSoundHappyou() { document.getElementById('audio1').play(); } 
    function playSoundPyonpyon() { document.getElementById('audio2').play(); } 
    //function playSoundJugyou() { document.getElementById('audio3').play(); } 
  </script>
	<body>
	<div class="box">
	<p class = "font_word">ぴ<span style="color: red;">ょ</span>

	<audio id="audioPyo">
    <source src="hiragana/pyo/ぴょ.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/pyo/sound-s.png" onclick="playSoundPyo()">
</p>
    <div class = "letter_start">
  <img src="hiragana/pyo/ぴょ.png" alt="ぴょpng">
</div><br>  

<p style="font-size: 50px;">はっ<span style="color: red;">ぴょ</span>う
  <audio id="audio1">
    <source src="hiragana/pyo/はっぴょう.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/pyo/sound-s.png" onclick="playSoundHappyou()">
  <p style="font-size:50;">Announcement</p>
  <br>
  <!--<img src="hiragana/yo/sample.png" alt="">-->
</p>
<p style="font-size: 50px;"><span style="color: red;">ぴょ</span>ん<span style="color: red;">ぴょ</span>ん
  <audio id="audio2">
    <source src="hiragana/pyo/ぴょんぴょん.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/pyo/sound-s.png" onclick="playSoundPyonpyon()">
  <p style="font-size:50;">Jump</p>
  <br>
  <!--<img src="hiragana/yo/sample.png" alt="">-->
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/pyuAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/ryaAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
