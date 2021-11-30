<!DOCTYPE html>
<html>

<head>
  <title>よPAGE</title>
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
    document.getElementById('audio1').pause();
    document.getElementById('audio1').currentTime = 0;
    // document.getElementById('audio2').pause();
    // document.getElementById('audio2').currentTime = 0;
    document.getElementById('audio3').pause();
    document.getElementById('audio3').currentTime = 0;
    document.getElementById('audio4').pause();
    document.getElementById('audio4').currentTime = 0;
    document.getElementById('audioYo').pause();
    document.getElementById('audioYo').currentTime = 0;
  }

  function playSoundYo() {
    audioStop();
    document.getElementById('audioYo').play();
  }

  function playSoundTsuyoi() {
    audioStop();
    document.getElementById('audio1').play();
  }

  // function playSoundYoi() {
  //   audioStop();
  //   document.getElementById('audio2').play();
  // }

  function playSoundYoufuku() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSoundYoru() {
    audioStop();
    document.getElementById('audio4').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">よ
      <audio id="audioYo">
        <source src="hiragana/yo/よ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/yo/sound-s.png" onclick="playSoundYo()">
    </p>
    <div class="letter_start">
      <img class="testBorder" src="hiragana/yo/yo.gif" alt="よgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/yo/よ.png" style="width: 60%;" alt="よpng">
    </div>
    <br>
    <p style="font-size: 50px;">つ<span style="color: red;">よ</span>い　Strong
      <audio id="audio1">
        <source src="hiragana/yo/つよい.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/yo/sound-s.png" onclick="playSoundTsuyoi()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/yo/sample.png" alt="">
    </p>
<!--
    <br>
    <p class="font_word">よい　Good
      <audio id="audio2">
        <source src="hiragana/yo/よい.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/yo/sound-s.png" onclick="playSoundYoi()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/yo/sample.png" alt="">
    </p>
-->
    <br>
    <p class="font_word">ようふく　Clothes
      <audio id="audio3">
        <source src="hiragana/yo/ようふく.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/yo/sound-s.png" onclick="playSoundYoufuku()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/yo/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">よる　Night
      <audio id="audio4">
        <source src="hiragana/yo/よる.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/yo/sound-s.png" onclick="playSoundYoru()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/yo/sample.png" alt="">
    </p>
  </div>

  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/yuAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/raAlphabet')}}'">NEXT&gt;</button>
</body>

</html>