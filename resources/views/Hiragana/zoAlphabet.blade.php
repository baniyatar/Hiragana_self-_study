<!DOCTYPE html>
<html>
 <head>
  <title>ぞPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundZo() { document.getElementById('audioZo').play(); }
    function playSoundAozora() { document.getElementById('audio1').play(); }
    function playSoundKazoku() { document.getElementById('audio2').play(); }
    function playSoundReizouko() { document.getElementById('audio3').play(); }

  </script>
	<body>
	<div class="box">
	<p class = "font_word">ぞ

	<audio id="audioZo">
    <source src="hiragana/zo/ぞ.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/zo/sound-s.png" onclick="playSoundZo()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/zo/zo.gif" alt="ぞgif">
</div><br>  
<div class = "letter_start">     <img src="hiragana/zo/ぞ.png" alt="ぞpng">
   </div>

<p style="font-size:50px;">あお<span style="color:red;">ぞ</span>ら
  <audio id="audio1">
    <source src="hiragana/zo/あおぞら.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/zo/sound-s.png" onclick="playSoundAozora()">

  <br><img src="hiragana/zo/sample.png" alt="">
</p>

<p style="font-size:50px;">か<span style="color:red;">ぞ</span>く
  <audio id="audio2">
    <source src="hiragana/zo/かぞく.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/zo/sound-s.png" onclick="playSoundKazoku()">

  <br><img src="hiragana/zo/sample.png" alt="">
</p>

<p style="font-size:50px;">れい<span style="color:red;">ぞ</span>うこ
  <audio id="audio3">
    <source src="hiragana/zo/れいぞうこ.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/zo/sound-s.png" onclick="playSoundReizouko()">

  <br><img src="hiragana/zo/sample.png" alt="">
</p>

	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/zeAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/daAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
