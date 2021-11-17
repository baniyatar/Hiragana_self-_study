<!DOCTYPE html>
<html>
 <head>
  <title>ぷPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundkitsupu() { document.getElementById('audio1').play(); } 
    function playSoundsenpuuki() { document.getElementById('audio2').play(); } 
    function playSoundtenpura() { document.getElementById('audio3').play(); } playSoundtenpura
     function playSoundpu() { document.getElementById('audioPu').play(); } 
  </script>
	<body>
	<div class="box">
	<p class = "font_word">ぷ

	<audio id="audioPu">
    <source src="hiragana/pu/pu.mp3" type="audio/mp3">
  </audio>
	<img style="vertical-align:middle;" src="hiragana/pu/sound-s.png" onclick="playSoundpu()">
</p>
    <div class = "letter_start">

  <img class = "testBorder" src="hiragana/pu/pu.gif" alt="pugif">
  <img src="hiragana/pu/pu.png" alt="gapng">
</div><br>  



<p style="font-size: 50px;">きっ<span style="color: red;">ぷ</span>

    <audio id="audio1">
      <source src="hiragana/pu/きっぷ.mp3" type="audio/mp3">
    </audio>
    <img style="vertical-align:middle;" src="hiragana/pu/sound-s.png" onclick="playSoundkitsupu()">
  
    <br>
    <!-- <img src="hiragana/pu/red.png" alt="">-->
  </p>

    </audio>
<p style="font-size: 50px;">せん<span style="color: red;">ぷ</span>うき
    <audio id="audio2">
      <source src="hiragana/pu/せんぷうき.mp3" type="audio/mp3">
    </audio>
    <img style="vertical-align:middle;" src="hiragana/pu/sound-s.png" onclick="playSoundsenpuuki()">
  
    <br>
    <!-- <img src="hiragana/pu/red.png" alt="">-->
  </p>

 <p style="font-size: 50px;">てん<span style="color: red;">ぷ</span>ら
  <audio id="audio3">
    <source src="hiragana/pu/てんぷら.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/pu/sound-s.png" onclick="playSoundtenpura()">

  <br>
  <!-- <img src="hiragana/a/foot.png" alt="">-->
</p>



	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/piAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/peAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
