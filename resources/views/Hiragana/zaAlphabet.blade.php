<!DOCTYPE html>
<html>
 <head>
  <title>ざPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundZa() { document.getElementById('audioZa').play(); } 
    function playSoundKouza() { document.getElementById('audio1').play(); } 
    function playSoundZasshi() { document.getElementById('audio2').play(); } 
    function playSoundHaizara() { document.getElementById('audio3').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">ざ

	<audio id="audioZa">
    <source src="hiragana/za/ざ.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/za/sound-s.png" onclick="playSoundZa()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/za/za.gif" alt="ざgif">
  <img src="hiragana/za/ざ.png" alt="ざpng">
</div><br>  

<p style="font-size:50px;">こう<span style="color:red;">ざ</span>

  <audio id="audio1">
    <source src="hiragana/za/こうざ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/za/sound-s.png" onclick="playSoundKouza()">

  <br><img src="hiragana/za/sample.png" alt="">
</p>
<p class = "font_word">ざっし
  <audio id="audio2">
    <source src="hiragana/za/ざっし.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/za/sound-s.png" onclick="playSoundZasshi()">

  <br><img src="hiragana/za/sample.png" alt="">
</p>

<p style="font-size:50px;">はい<span style="color:red;">ざ</span>ら
  <audio id="audio3">
    <source src="hiragana/za/はいざら.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/za/sound-s.png" onclick="playSoundHaizara()">

  <br><img src="hiragana/za/sample.png" alt="">
</p>

	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/goAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/jiAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
