<!DOCTYPE html>
<html>

<head>
  <title>じPAGE</title>
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
    document.getElementById('audioJi').pause();
    document.getElementById('audioJi').currentTime = 0;
  }
  function playSoundJi() {
    audioStop();
    document.getElementById('audioJi').play();
  }

  function playSoundJikan() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundJishin() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundSouji() {
    audioStop();
    document.getElementById('audio3').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">じ

      <audio id="audioJi">
        <source src="hiragana/ji/じ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ji/sound-s.png" onclick="playSoundJi()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/ji/ji.gif" alt="じgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/ji/じ.png" alt="じpng">
    </div>

    <p class="font_word">じかん

      <audio id="audio1">
        <source src="hiragana/ji/じかん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ji/sound-s.png" onclick="playSoundJikan()">
    <p style="font-size: 50;">Time</p>
    <br><img src="hiragana/ji/sample.png" alt="">
    </p>
    <p class="font_word">じしん
      <audio id="audio2">
        <source src="hiragana/ji/じしん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ji/sound-s.png" onclick="playSoundJishin()">
    <p style="font-size: 50;">Earthquake</p>
    <br><img src="hiragana/ji/sample.png" alt="">
    </p>

    <p style="font-size:50px;">そう<span style="color:red;">じ</span>
      <audio id="audio3">
        <source src="hiragana/ji/そうじ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ji/sound-s.png" onclick="playSoundSouji()">
    <p style="font-size: 50;">Cleaning</p>
    <br><img src="hiragana/ji/sample.png" alt="">
    </p>

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/zaAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/zuAlphabet')}}'">NEXT&gt;</button>
</body>

</html>