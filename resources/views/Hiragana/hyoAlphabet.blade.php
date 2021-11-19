<!DOCTYPE html>
<html>
 <head>
  <title>ひょPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundjikokuhyou() { document.getElementById('audio1').play(); } 
    function playhyoijan() { document.getElementById('audio2').play(); } 
    function playSoundhyoijiu() { document.getElementById('audio3').play(); } 
    function playSoundHyo() { document.getElementById('audioHyo').play(); } 
  </script>
	<body>
	<div class="box">
        <p style="font-size: 50px;"><span style="color: red;">ひょ</span>

            <audio id="audioHyo">
            <source src="hiragana/hyo/hyo.mp3" type="audio/mp3">
          </audio>
            <img style="vertical-align:middle;" src="hiragana/hyo/sound-s.png" onclick="playSoundHyo()">
        </p>
    <div class = "letter_start">

  {{-- <img class = "testBorder" src="hiragana/hyo/hyo.gif" alt="まgif"> --}} 
  <img src="hiragana/hyo/hyo.png" alt="hyapng">
 </div><br>  

<p style="font-size: 50px;">じこく<span style="color: red;">ひょ</span>う

  <audio id="audio1">
    <source src="hiragana/hyo/じこくひょう.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/hyo/sound-s.png" onclick="playSoundjikokuhyou()">
  <p style="font-size:50;">Timetable</p>
  <br>
  <!-- <img src="hiragana/a/red.png" alt="">-->
</p>


<p style="font-size: 50px;"><span style="color: red;">ひょ</span>うざん

  <audio id="audio2">
    <source src="hiragana/hyo/ひょうざん.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/hyo/sound-s.png" onclick="playhyoijan()">
  <p style="font-size:50;">Iceberg</p>
  <br>
  <!-- <img src="hiragana/a/red.png" alt="">-->
</p>


<p style="font-size: 50px;"><span style="color: red;">ひょ</span>うじょう   

  <audio id="audio3">
    <source src="hiragana/hyo/ひょうじょう.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/hyo/sound-s.png" onclick="playSoundhyoijiu()">
  <p style="font-size:50;">Facial expression</p>
  <br>
  <!-- <img src="hiragana/a/red.png" alt="">-->
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/hyuAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/byaAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
