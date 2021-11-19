<!DOCTYPE html>
<html>
 <head>
  <title>ひゃPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundhyaku() { document.getElementById('audio1').play(); } 
    function playSoundhyaukajiten() { document.getElementById('audio2').play(); } 
    function playSoundhyaukaten() { document.getElementById('audio3').play(); } 
    function playSoundHya() { document.getElementById('audioHya').play(); } 
  </script>
	<body>
	<div class="box">
    <p style="font-size: 50px;"><span style="color: red;">ひゃ</span>

      <audio id="audioHya">
      <source src="hiragana/hya/hya.mp3" type="audio/mp3">
    </audio>
      <img style="vertical-align:middle;" src="hiragana/hya/sound-s.png" onclick="playSoundHya()">
  </p>
    <div class = "letter_start">

  {{-- <img class = "testBorder" src="hiragana/hya/hya.gif" alt="まgif"> --}} 
  <img src="hiragana/hya/hya.png" alt="hyapng">
 </div><br>  


 <p style="font-size: 50px;"><span style="color: red;">ひゃ</span>く  

  <audio id="audio1">
    <source src="hiragana/hya/ひゃく.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/hya/sound-s.png" onclick="playSoundhyaku()">
  <p style="font-size:50;">Hundred</p>
  <br>
  <!-- <img src="hiragana/a/red.png" alt="">-->
</p>

<p style="font-size: 50px;"><span style="color: red;">ひゃ</span>っかじてん  

  <audio id="audio2">
    <source src="hiragana/hya/ひゃっかじてん.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/hya/sound-s.png" onclick="playSoundhyaukajiten()">
  <p style="font-size:50;">Encyclopedia</p>
  <br>
  <!-- <img src="hiragana/a/red.png" alt="">-->
</p>


<p style="font-size: 50px;"><span style="color: red;">ひゃ</span>っかてん     

  <audio id="audio3">
    <source src="hiragana/hya/ひゃっかてん.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/hya/sound-s.png" onclick="playSoundhyaukaten()">
  <p style="font-size:50;">Department store</p>
  <br>
  <!-- <img src="hiragana/a/red.png" alt="">-->
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/nyoAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/hyuAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
