<!DOCTYPE html>
<html>
 <head>
  <title>ぺPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundpekopeko() { document.getElementById('audio1').play(); } 
    function playSoundperapera() { document.getElementById('audio2').play(); } 
     function playSoundpe() { document.getElementById('audioPe').play(); } 
  </script>
	<body>
	<div class="box">
	<p class = "font_word">ぺ

	<audio id="audioPe">
    <source src="hiragana/pe/pe.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/pe/sound-s.png" onclick="playSoundpe()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/pe/pe.gif" alt="gagif">
  <img src="hiragana/pe/pe.png" alt="gapng">
</div><br>  



<p class = "font_word">ぺこ<span style="color: red;">ぺ</span>こ
  

    <audio id="audio1">
      <source src="hiragana/pe/ぺこぺこ.mp3" type="audio/mp3">
    </audio>
    <img style="vertical-align:middle;" src="hiragana/pe/sound-s.png" onclick="playSoundpekopeko()">
  
    <br>
    <!-- <img src="hiragana/pe/red.png" alt="">-->
  </p>
<p class = "font_word">ぺら<span style="color: red;">ぺ</span>ら

    <audio id="audio2">
      <source src="hiragana/pe/ぺらぺら.mp3" type="audio/mp3">
    </audio>
    <img style="vertical-align:middle;" src="hiragana/pe/sound-s.png" onclick="playSoundperapera()">
  
    <br>
    <!-- <img src="hiragana/pe/red.png" alt="">-->
  </p>




	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/puAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/poAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
