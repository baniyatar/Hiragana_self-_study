<!DOCTYPE html>
<html>
 <head>
  <title>にゅPAGE</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
	<script language="JavaScript">
    function playSoundGyunyuu() { document.getElementById('audio1').play(); } 
    function playSoundNyuugaku() { document.getElementById('audio2').play(); }
    function playSoundNyu() { document.getElementById('audioNyu').play(); }
 
  </script>
	<body>
	<div class="box">
        <p style="font-size: 50px;"><span style="color: red;">にゃ</span>

            <audio id="audioNyu">
            <source src="hiragana/nyu/nyu.mp3" type="audio/mp3">
          </audio>
            <img style="vertical-align:middle;" src="hiragana/nyu/sound-s.png" onclick="playSoundNyu()">
        </p>
    <div class = "letter_start">

  {{-- <img class = "testBorder" src="hiragana/nyu/nyu.gif" alt="まgif"> --}}
  <img src="hiragana/nyu/nyu.png" alt="にゅpng">
 </div><br>  

 <p style="font-size: 50px;">ぎゅう<span style="color: red;">にゃ</span>う

  <audio id="audio1">
    <source src="hiragana/nyu/ぎゅうにゅう.mp3" type="audio/mp3">
  </audio>
  <img style="vertical-align:middle;" src="hiragana/nyu/sound-s.png" onclick="playSoundGyunyuu()">

  <br>
  <!-- <img src="hiragana/a/red.png" alt="">-->
</p>

<p style="font-size: 50px;"><span style="color: red;">にゃ</span>うがく

    <audio id="audio2">
      <source src="hiragana/nyu/にゅうがく.mp3" type="audio/mp3">
    </audio>
    <img style="vertical-align:middle;" src="hiragana/nyu/sound-s.png" onclick="playSoundNyuugaku()">
  
    <br>
    <!-- <img src="hiragana/a/red.png" alt="">-->
  </p>

	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/nyaAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/nyoAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
