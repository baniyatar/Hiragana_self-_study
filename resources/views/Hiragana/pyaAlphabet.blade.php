<!DOCTYPE html>
<html>
 <head>
  <title>ぴゃPAGE</title>
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
      document.getElementById('audioPya').pause();
      document.getElementById('audioPya').currentTime = 0;
      // document.getElementById('audio1').pause();
      // document.getElementById('audio1').currentTime = 0;
    }
    function playSoundPya() {
      audioStop();
      document.getElementById('audioPya').play();
    } 
    // function playSound1() {
    //   audioStop();
    //   document.getElementById('audio1').play();
    // }
  </script>
	<body>
	<div class="box">
	<p class = "font_word">ぴ<span style="color: red;">ゃ</span>

	<audio id="audioPya">
    <source src="hiragana/pya/ぴゃ.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/pya/sound-s.png" onclick="playSoundPya()">
</p>
    <div class = "letter_start">

  <img src="hiragana/pya/ぴゃ.png" alt="ぴゃpng">
</div><br>  
<!-- </p>
  <p class="font_word">ＸＸＸＸ　XXXX
      <audio id="audio1">
        <source src="hiragana/di/サンプル.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/da/sound-s.png" onclick="playSound1()">
      <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/da/sample.png" alt="">
  </p> -->
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/byoAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/pyuAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
