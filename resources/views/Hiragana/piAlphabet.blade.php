<!DOCTYPE html>
<html>
 <head>
  <title>ぴPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundenpitsu() { document.getElementById('audio1').play(); } 
    function playSoundseinengatsupi() { document.getElementById('audio2').play(); } 
    function playSoundpikapika() { document.getElementById('audio3').play(); } 
     function playSoundpi() { document.getElementById('audioPi').play(); } 
  </script>
	<body>
	<div class="box">
	<p class = "font_word">ぴ

	<audio id="audioPi">
    <source src="hiragana/pi/pi.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/pi/sound-s.png" onclick="playSoundpi()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/pi/pi.gif" alt="pigif">
  <img src="hiragana/pi/pi.png" alt="gapng">
</div><br>  

<p style="font-size: 50px;">えん<span style="color: red;">ぴ</span>つ
<audio id="audio1">
    <source src="hiragana/pi/えんぴつ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/pi/sound-s.png" onclick="playSoundenpitsu()">

  <br>
  <!-- <img src="hiragana/pi/red.png" alt="">-->
</p>
<p style="font-size: 50px;">せいねんがっ<span style="color: red;">ぴ</span>
  <audio id="audio2">
    <source src="hiragana/pi/せいねんがっぴ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/pi/sound-s.png" onclick="playSoundseinengatsupi()">

  <br>
  <!-- <img src="hiragana/a/foot.png" alt="">-->
</p>

<p class = "font_word">ぴか<span style="color: red;">ぴ</span>か
  <audio id="audio3">
    <source src="hiragana/pi/ぴかぴか.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/pi/sound-s.png" onclick="playSoundpikapika()">
  <br>
  <!--<img src="hiragana/a/head.png" alt="">-->
</p>

	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/paAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/puAlphabet')}}'">NEXT&gt;</button>
</body>
</html>