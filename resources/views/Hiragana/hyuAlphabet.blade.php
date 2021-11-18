<!DOCTYPE html>
<html>
 <head>
  <title>ひゅPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
  
    function playSoundHyu() { document.getElementById('audioHyu').play(); } 
   
  </script>
	<body>
	<div class="box">
        <p style="font-size: 50px;"><span style="color: red;">ひゅ</span>

            <audio id="audioHyu">
            <source src="hiragana/hyu/hyu.mp3" type="audio/mp3">
          </audio>
            <img style="vertical-align:middle;" src="hiragana/hyu/sound-s.png" onclick="playSoundHyu()">
        </p>
    <div class = "letter_start">

  {{-- <img class = "testBorder" src="hiragana/hyu/hyu.gif" alt="まgif"> --}} 
  <img src="hiragana/hyu/hyu.png" alt="hyapng">
 </div><br>  



	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/hyaAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/hyoAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
