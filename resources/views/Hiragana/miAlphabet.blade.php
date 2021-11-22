<!DOCTYPE html>
<html>

<head>
  <title>みPAGE</title>
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
    document.getElementById('audioMi').pause();
    document.getElementById('audioMi').currentTime = 0;
  }

  function playSoundMikan() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundmise() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundmichi() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSoundMimi() {
    audioStop();
    document.getElementById('audio4').play();
  }

  function playSoundMi() {
    audioStop();
    document.getElementById('audioMi').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">み

      <audio id="audioMi">
        <source src="hiragana/mi/み.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/mi/sound-s.png" onclick="playSoundMi()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/mi/mi.gif" alt="みgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/mi/み-bw.png" style="width: 70%;" alt="みpng">
    </div>

    <p class="font_word">みかん

      <audio id="audio1">
        <source src="hiragana/mi/みかん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/mi/sound-s.png" onclick="playSoundMikan()">
    <p style="font-size: 50;">Orange</p>
    <br>
    <!-- <img src="hiragana/a/red.png" alt="">-->
    </p>
    <p class="font_word">みせ
      <audio id="audio2">
        <source src="hiragana/mi/みせ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/mi/sound-s.png" onclick="playSoundmise()">
    <p style="font-size: 50;">Shop</p>
    <br>
    <!-- <img src="hiragana/a/foot.png" alt="">-->
    </p>

    <p class="font_word">みち
      <audio id="audio3">
        <source src="hiragana/mi/みち.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/mi/sound-s.png" onclick="playSoundmichi()">
    <p style="font-size: 50;">Street</p>
    <br>
    <!--<img src="hiragana/a/head.png" alt="">-->
    </p>

    <p class="font_word">みみ
      <audio id="audio4">
        <source src="hiragana/mi/みみ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/mi/sound-s.png" onclick="playSoundMimi()">
    <p style="font-size: 50;">Ear</p>
    <br>
    <!--<img src="hiragana/a/ame.jpg" alt="">-->
    </p>
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/maAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/muAlphabet')}}'">NEXT&gt;</button>
</body>

</html>