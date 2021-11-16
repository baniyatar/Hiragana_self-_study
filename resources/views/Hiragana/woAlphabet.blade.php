<!DOCTYPE html>
<html>
 <head>
  <title>をPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSound0() { document.getElementById('audio0').play(); } 

  </script>
	<body>
	<div class="box">
	<p class = "font_word">を

	<audio id="audio0">
    <source src="hiragana/wo/を.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/wo/sound-s.png" onclick="playSound0()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/wo/wo.gif" alt="をgif">
  <img src="hiragana/wo/を.png" alt="をpng">
</div><br>  

<p>「を」は語彙のなかで使われることはありません。つぎのように使います。
  <!-- <br><img src="hiragana/ta/red.png" alt=""> -->
</p>
<p>本を買いました。
</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/waAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/nAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
