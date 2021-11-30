<!DOCTYPE html>
<html>
 <head>
  <title>ぢPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function audioStop() {
      document.getElementById('audio0').pause();
      document.getElementById('audio0').currentTime = 0;
      document.getElementById('audio1').pause();
      document.getElementById('audio1').currentTime = 0;
    }

    function playSound0() {
      audioStop();
      document.getElementById('audio0').play();
    } 

    function playSound1() {
      audioStop();
      document.getElementById('audio1').play();
    } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">ぢ

	<audio id="audio0">
    <source src="hiragana/di/ぢ.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/di/sound-s.png" onclick="playSound0()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/di/di.gif" alt="ぢgif">
</div><br>  
<div class = "letter_start">    <img src="hiragana/di/ぢ.png" style="width: 80%;" alt="ぢpng">
  </div>
  <p class="font_word">ＸＸＸＸ　XXXX
      <audio id="audio1">
        <source src="hiragana/di/サンプル.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/da/sound-s.png" onclick="playSound1()">
      <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/da/sample.png" alt="">
  </p>
	</div>

	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/daAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/duAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
