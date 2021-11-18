<!DOCTYPE html>
<html>
 <head>
  <title>りゃPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundRya() { document.getElementById('audioRya').play(); } 
    function playSoundGairyaku() { document.getElementById('audio1').play(); } 
    function playSoundShouryaku() { document.getElementById('audio2').play(); } 

  </script>
	<body>
	<div class="box">
	<p style="font-size:50px;"><span style="color:red;">りゃ
	  <audio id="audioRya">
      <source src="hiragana/rya/りゃ.mp3" type="audio/mp3">
    </audio>
	    <img style="vertical-align:middle;" src="hiragana/rya/sound-s.png" onclick="playSoundRya()">
  </p>
  
  <div class = "letter_start">
    <img src="hiragana/rya/rya.png" alt="りゃpng">
  </div><br>  

  <p style="font-size:50px;">がい<span style="color:red;">りゃ</span>く
    <audio id="audio1">
      <source src="hiragana/rya/がいりゃく.mp3" type="audio/mp3">
    </audio>
    <img style="vertical-align:middle;" src="hiragana/rya/sound-s.png" onclick="playSoundGairyaku()">
    <br><img src="hiragana/rya/sample.png" alt="">
  </p>

  <p style="font-size:50px;">しょう<span style="color:red;">りゃ</span>く
    <audio id="audio2">
      <source src="hiragana/rya/しょうりゃく.mp3" type="audio/mp3">
    </audio>
    <img style="vertical-align:middle;" src="hiragana/rya/sound-s.png" onclick="playSoundShouryaku()">
    <br><img src="hiragana/rya/sample.png" alt="">
  </p>

	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/myoAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/ryuAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
