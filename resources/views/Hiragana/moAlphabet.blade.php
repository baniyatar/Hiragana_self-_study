<!DOCTYPE html>
<html>
 <head>
  <title>むPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundkudamono() { document.getElementById('audio1').play(); } 
    function playSoundkodomo() { document.getElementById('audio2').play(); } 
    function playSoundmoshimoshi() { document.getElementById('audio3').play(); } 
    function playSoundMomo() { document.getElementById('audio4').play(); } 
    function playSoundMo() { document.getElementById('audioMo').play(); } 
  </script>
	<body>
	<div class="box">
	<p class = "font_word">も

	<audio id="audioMo">
    <source src="hiragana/mo/も.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/mo/sound-s.png" onclick="playSoundMo()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/mo/mo.gif" alt="mogif">
  <img src="hiragana/mo/も-bw.png" alt="もpng">
</div><br>  

<p class = "font_word">くだもの

  <audio id="audio1">
    <source src="hiragana/mo/くだもの.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/mo/sound-s.png" onclick="playSoundkudamono()">

  <br>
  <!-- <img src="hiragana/a/red.png" alt="">-->
</p>
<p class = "font_word">こども
  <audio id="audio2">
    <source src="hiragana/mo/こども.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/mo/sound-s.png" onclick="playSoundkodomo()">

  <br>
  <!-- <img src="hiragana/a/foot.png" alt="">-->
</p>

<p class = "font_word">もしもし
  <audio id="audio3">
    <source src="hiragana/mo/もしもし.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/mo/sound-s.png" onclick="playSoundmoshimoshi()">
  <br>
  <!--<img src="hiragana/a/head.png" alt="">-->
</p>

<p class = "font_word">もも
  <audio id="audio4">
    <source src="hiragana/mo/もも.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/mo/sound-s.png" onclick="playSoundMomo()">
  <br>
  <!--<img src="hiragana/a/ame.jpg" alt="">-->
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/meAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/yaAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
