<!DOCTYPE html>
<html>
 <head>
  <title>ぽPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundkanpouyaku() { document.getElementById('audio1').play(); } 
    function playSoundsinpo() { document.getElementById('audio2').play(); } 
    function playSoundpokapoka() { document.getElementById('audio3').play(); } 
    function playSoundpo() { document.getElementById('audioPo').play(); } 
  </script>
	<body>
	<div class="box">
	<p class = "font_word">ぽ

	<audio id="audioPo">
    <source src="hiragana/po/po.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/po/sound-s.png" onclick="playSoundpo()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/po/po.gif" alt="pogif">
  <img src="hiragana/po/po.png" alt="gapng">
</div><br>  


　
<p style="font-size: 50px;">かん<span style="color: red;">ぽ</span>うやく

    <audio id="audio1">
      <source src="hiragana/po/かんぽうやく.mp3" type="audio/mp3">
    </audio>
    <img style="vertical-align:middle;" src="hiragana/po/sound-s.png" onclick="playSoundkanpouyaku()">
  
    <br>
    <!-- <img src="hiragana/po/red.png" alt="">-->
  </p>


    <p style="font-size: 50px;">しん<span style="color: red;">ぽ</span>

    <audio id="audio2">
      <source src="hiragana/po/しんぽ　.mp3" type="audio/mp3">
    </audio>
    <img style="vertical-align:middle;" src="hiragana/po/sound-s.png" onclick="playSoundsinpo()">
  
    <br>
    <!-- <img src="hiragana/po/red.png" alt="">-->
  </p>

  <p class = "font_word">ぽかぽか

    <audio id="audio3">
      <source src="hiragana/po/ぽかぽか.mp3" type="audio/mp3">
    </audio>
    <img style="vertical-align:middle;" src="hiragana/po/sound-s.png" onclick="playSoundpokapoka()">
  
    <br>
    <!-- <img src="hiragana/po/red.png" alt="">-->
  </p>




	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/peAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/contractedIntro')}}'">NEXT&gt;</button>
</body>
</html>
