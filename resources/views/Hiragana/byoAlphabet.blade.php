<!DOCTYPE html>
<html>
 <head>
  <title>びょ</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundbyou() { document.getElementById('audio1').play(); } 
    function playSoundbyouin() { document.getElementById('audio2').play(); } 
    function playSoundbyouki() { document.getElementById('audio3').play(); } 
    function playSoundByo() { document.getElementById('audioByo').play(); } 
  </script>
	<body>
	<div class="box">
        
        <p style="font-size: 50px;"><span style="color: red;">びょ</span>

            <audio id="audioByo">
            <source src="hiragana/byo/byo.mp3" type="audio/mp3">
          </audio>
            <img style="vertical-align:middle;" src="hiragana/byo/sound-s.png" onclick="playSoundByo()">
        </p>
    <div class = "letter_start">


  <img src="hiragana/byo/byo.png" alt="gapng">
</div><br>  
<p style="font-size: 50px;"><span style="color: red;">びょ</span>う

	<audio id="audio1">
    <source src="hiragana/byo/びょう.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/byo/sound-s.png" onclick="playSoundbyou()">
  <p style="font-size:50;">Seconds Time</p>
  <br>
</p>

<p style="font-size: 50px;"><span style="color: red;">びょ</span>ういん
  <audio id="audio2">
    <source src="hiragana/byo/びょういん.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/byo/sound-s.png" onclick="playSoundbyouin()">
  <p style="font-size:50;">Hospital</p>
  <br>
  <!-- <img src="hiragana/byo/red.png" alt="">-->
</p>


<p style="font-size: 50px;"><span style="color: red;">びょ</span>うき
  <audio id="audio3">
    <source src="hiragana/byo/びょうき.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/byo/sound-s.png" onclick="playSoundbyouki()">
  <p style="font-size:50;">Sick</p>
  <br>
  <!-- <img src="hiragana/a/foot.png" alt="">-->
</p>


	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/byuAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/pyaAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
