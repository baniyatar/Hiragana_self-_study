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
    function audioStop() {
      document.getElementById('audioPyu').pause();
      document.getElementById('audioPyu').currentTime = 0;
      document.getElementById('audio1').pause();
      document.getElementById('audio1').currentTime = 0;
    }
    function playSoundPyu() {
      audioStop();
      document.getElementById('audioPyu').play();
    } 
    function playSound1() {
      audioStop();
      document.getElementById('audio1').play();
    } 
  </script>
	<body>
	<div class="box">
	<p class = "font_word">ぴ<span style="color: red;">ゅ</span>

	<audio id="audioPyu">
    <source src="hiragana/pyu/ぴゅ.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/pyu/sound-s.png" onclick="playSoundPyu()">
</p>
    <div class = "letter_start">

  <img src="hiragana/pyu/ぴゅ.png" alt="ぴゅpng">
</div><br>  
<p class="font_word">ＸＸＸＸ　XXXX
      <audio id="audio1">
        <source src="hiragana/di/サンプル.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/da/sound-s.png" onclick="playSound1()">
      <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/da/sample.png" alt="">
</p>
</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/pyaAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/pyoAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
