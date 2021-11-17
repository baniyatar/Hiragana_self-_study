<!DOCTYPE html>
<html>
 <head>
  <title>ぜPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundZe() { document.getElementById('audioZe').play(); }
    function playSoundAnzen() { document.getElementById('audio1').play(); }
    function playSoundKaze() { document.getElementById('audio2').play(); }
    function playSoundZenbu() { document.getElementById('audio3').play(); }

  </script>
	<body>
	<div class="box">
	<p class = "font_word">ぜ

	<audio id="audioZe">
    <source src="hiragana/ze/ぜ.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/ze/sound-s.png" onclick="playSoundZe()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/ze/ze.gif" alt="ぜgif">
  <img src="hiragana/ze/ぜ.png" alt="ぜpng">
</div><br>  

<p style="font-size:50px;">あん<span style="color:red;">ぜ</span>ん
  <audio id="audio1">
    <source src="hiragana/ze/あんぜん.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ze/sound-s.png" onclick="playSoundAnzen()">

  <br><img src="hiragana/ze/sample.png" alt="">
</p>

<p style="font-size:50px;">か<span style="color:red;">ぜ</span>
  <audio id="audio2">
    <source src="hiragana/ze/かぜ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ze/sound-s.png" onclick="playSoundKaze()">

  <br><img src="hiragana/ze/sample.png" alt="">
</p>

<p class = "font_word">ぜんぶ
  <audio id="audio3">
    <source src="hiragana/ze/ぜんぶ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/ze/sound-s.png" onclick="playSoundZenbu()">

  <br><img src="hiragana/ze/sample.png" alt="">
</p>

	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/zuAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/zoAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
