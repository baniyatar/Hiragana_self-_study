<!DOCTYPE html>
<html>

<head>
  <title>へPAGE</title>
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
    document.getElementById('audioKe').pause();
    document.getElementById('audioKe').currentTime = 0;
  }

  function playSoundTaihen() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundHeya() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundHen() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSoundHenji() {
    audioStop();
    document.getElementById('audio4').play();
  }

  function playSoundHe() {
    audioStop();
    document.getElementById('audioKe').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">へ

      <audio id="audioKe">
        <source src="hiragana/he/へ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/he/sound-s.png" onclick="playSoundHe()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/he/he.gif" alt="へgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/he/へ.png" style="width: 40%;" alt="へpng">
    </div>

    <p style="font-size: 50px;">たい<span style="color: red;">へ</span>ん

      <audio id="audio1">
        <source src="hiragana/he/たいへん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/a/sound-s.png" onclick="playSoundTaihen()">
    <p style="font-size: 50;">Tough</p>
    <br>
    <!--<img src="hiragana/a/red.png" alt="">-->
    </p>
    <p class="font_word">へや
      <audio id="audio2">
        <source src="hiragana/he/へや.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/he/sound-s.png" onclick="playSoundHeya()">
    <p style="font-size: 50;">Room</p>
    <br>
    <!--<img src="hiragana/a/foot.png" alt="">-->
    </p>

    <p class="font_word">へん
      <audio id="audio3">
        <source src="hiragana/he/へん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/he/sound-s.png" onclick="playSoundHen()">
    <p style="font-size: 50;">Strange</p>
    <br>
    <!--<img src="hiragana/a/head.png" alt="">-->
    </p>

    <p class="font_word">へんじ
      <audio id="audio4">
        <source src="hiragana/he/へんじ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/he/sound-s.png" onclick="playSoundHenji()">
    <p style="font-size: 50;">Answer</p>
    <br>
    <!--<img src="hiragana/a/ame.jpg" alt="">-->
    </p>
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/fuAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/hoAlphabet')}}'">NEXT&gt;</button>
</body>

</html>