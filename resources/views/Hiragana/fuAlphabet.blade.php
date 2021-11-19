<!DOCTYPE html>
<html>

<head>
  <title>ふPAGE</title>
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
    document.getElementById('audio2').pause();
    document.getElementById('audio2').currentTime = 0;
    document.getElementById('audio3').pause();
    document.getElementById('audio3').currentTime = 0;
    document.getElementById('audio4').pause();
    document.getElementById('audio4').currentTime = 0;
    document.getElementById('audioKu').pause();
    document.getElementById('audioKu').currentTime = 0;
  }

  function playSoundFuku() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundFutoi() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundFuyu() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSoundFuyuyasumi() {
    audioStop();
    document.getElementById('audio4').play();
  }

  function playSoundFu() {
    audioStop();
    document.getElementById('audioKu').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ふ

      <audio id="audioKu">
        <source src="hiragana/fu/ふ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/fu/sound-s.png" onclick="playSoundFu()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/fu/fu.gif" alt="くgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/fu/ふ.png" alt="ふpng">
    </div>

    <p class="font_word">ふく

      <audio id="audio1">
        <source src="hiragana/fu/ふく.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/fu/sound-s.png" onclick="playSoundFuku()">
    <p style="font-size: 50;">Clothes</p>
    <br>
    <!--<img src="hiragana/a/red.png" alt="">-->
    </p>
    <p class="font_word">ふとい
      <audio id="audio2">
        <source src="hiragana/fu/ふとい.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/fu/sound-s.png" onclick="playSoundFutoi()">
    <p style="font-size: 50;">Fat / Thick</p>
    <br>
    <!--<img src="hiragana/a/foot.png" alt="">-->
    </p>

    <p class="font_word">ふゆ
      <audio id="audio3">
        <source src="hiragana/fu/ふゆ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ku/sound-s.png" onclick="playSoundFuyu()">
    <p style="font-size: 50;">Winter</p>
    <br>
    <!--<img src="hiragana/a/head.png" alt="">-->
    </p>

    <p class="font_word">ふゆやすみ
      <audio id="audio4">
        <source src="hiragana/fu/ふゆやすみ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/fu/sound-s.png" onclick="playSoundFuyuyasumi()">
    <p style="font-size: 50;">Winter Vacation</p>
    <br>
    <!--<img src="hiragana/a/ame.jpg" alt="">-->
    </p>
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/hiAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/heAlphabet')}}'">NEXT&gt;</button>
</body>

</html>