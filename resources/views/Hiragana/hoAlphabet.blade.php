<!DOCTYPE html>
<html>

<head>
  <title>ほPAGE</title>
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
    document.getElementById('audioKo').pause();
    document.getElementById('audioKo').currentTime = 0;
  }

  function playSoundHosoi() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundHon() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundHondana() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSoundHonya() {
    audioStop();
    document.getElementById('audio4').play();
  }

  function playSoundHo() {
    audioStop();
    document.getElementById('audioKo').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ほ

      <audio id="audioKo">
        <source src="hiragana/ho/ほ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ho/sound-s.png" onclick="playSoundHo()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/ho/ho.gif" alt="ほgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/ho/ほ.png" alt="ほpng">
    </div>

    <p class="font_word">ほそい

      <audio id="audio1">
        <source src="hiragana/ho/ほそい.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ho/sound-s.png" onclick="playSoundHosoi()">
    <p style="font-size: 50;">Narrow</p>
    <br>
    <!--<img src="hiragana/a/red.png" alt="">-->
    </p>
    <p class="font_word">ほん
      <audio id="audio2">
        <source src="hiragana/ho/ほん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ho/sound-s.png" onclick="playSoundHon()">
    <p style="font-size: 50;">Book</p>
    <br>
    <!--<img src="hiragana/a/foot.png" alt="">-->
    </p>

    <p class="font_word">ほんだな
      <audio id="audio3">
        <source src="hiragana/ho/ほんだな.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ho/sound-s.png" onclick="playSoundHondana()">
    <p style="font-size: 50;">Book Shelf</p>
    <br>
    <!--<img src="hiragana/a/head.png" alt="">-->
    </p>

    <p class="font_word">ほんや
      <audio id="audio4">
        <source src="hiragana/ho/ほんや.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ho/sound-s.png" onclick="playSoundHonya()">
    <p style="font-size: 50;">Book Store</p>
    <br>
    <!--<img src="hiragana/a/ame.jpg" alt="">-->
    </p>
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/heAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/maAlphabet')}}'">NEXT&gt;</button>
</body>

</html>