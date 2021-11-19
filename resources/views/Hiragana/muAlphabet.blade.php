<!DOCTYPE html>
<html>

<head>
  <title>むPAGE</title>
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
    document.getElementById('audioMu').pause();
    document.getElementById('audioMu').currentTime = 0;
  }

  function playSoundMuika() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundmukou() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundmuzukashii() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSoundMutsutsu() {
    audioStop();
    document.getElementById('audio4').play();
  }

  function playSoundMu() {
    audioStop();
    document.getElementById('audioMu').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">む

      <audio id="audioMu">
        <source src="hiragana/mu/む.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/mu/sound-s.png" onclick="playSoundMu()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/mu/mu.gif" alt="むgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/mu/む-bw.png" alt="むpng">
    </div>

    <p class="font_word">むいか

      <audio id="audio1">
        <source src="hiragana/mu/むいか.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/mu/sound-s.png" onclick="playSoundMuika()">
    <p style="font-size: 50;">6th of Month</p>
    <br>
    <!-- <img src="hiragana/a/red.png" alt="">-->
    </p>
    <p class="font_word">むこう
      <audio id="audio2">
        <source src="hiragana/mu/むこう.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/mu/sound-s.png" onclick="playSoundmukou()">
    <p style="font-size: 50;">Over There</p>
    <br>
    <!-- <img src="hiragana/a/foot.png" alt="">-->
    </p>

    <p class="font_word">むずかしい
      <audio id="audio3">
        <source src="hiragana/mu/むずかしい.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/mu/sound-s.png" onclick="playSoundmuzukashii()">
    <p style="font-size: 50;">Difficult</p>
    <br>
    <!--<img src="hiragana/a/head.png" alt="">-->
    </p>

    <p class="font_word">むっつ
      <audio id="audio4">
        <source src="hiragana/mu/むっつ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/mu/sound-s.png" onclick="playSoundMutsutsu()">
    <p style="font-size: 50;">Six / 6</p>
    <br>
    <!--<img src="hiragana/a/ame.jpg" alt="">-->
    </p>
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/miAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/meAlphabet')}}'">NEXT&gt;</button>
</body>

</html>