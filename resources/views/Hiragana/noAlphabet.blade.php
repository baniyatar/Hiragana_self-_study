<!DOCTYPE html>
<html>

<head>
  <title>のPAGE</title>
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
    document.getElementById('audioNo').pause();
    document.getElementById('audioNo').currentTime = 0;
  }

  function playSoundNo() {
    audioStop();
    document.getElementById('audioNo').play();
  }

  function playSoundKinou() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundTatemono() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundTanoshii() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSoundNomimono() {
    audioStop();
    document.getElementById('audio4').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">の

      <audio id="audioNo">
        <source src="hiragana/no/の.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/no/sound-s.png" onclick="playSoundNo()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/no/no.gif" alt="のgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/no/の.png" alt="のpng">
    </div>

    <p style="font-size: 50px;">き<span style="color: red;">の</span>う

      <audio id="audio1">
        <source src="hiragana/no/きのう.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/no/sound-s.png" onclick="playSoundKinou()">
    <p style="font-size: 50;">Yesterday</p>
    <br><img src="hiragana/no/sample.png" alt="">
    </p>
    <p style="font-size: 50px;">たても<span style="color: red;">の</span>
      <audio id="audio2">
        <source src="hiragana/no/たてもの.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/no/sound-s.png" onclick="playSoundTatemono()">
    <p style="font-size: 50;">Building</p>
    <br><img src="hiragana/no/sample.png" alt="">
    </p>

    <p style="font-size: 50px;">た<span style="color: red;">の</span>しい
      <audio id="audio3">
        <source src="hiragana/no/たのしい.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/no/sound-s.png" onclick="playSoundTanoshii()">
    <p style="font-size: 50;">Pleasant</p>
    <br><img src="hiragana/no/sample.png" alt="">
    </p>

    <p class="font_word">のみも<span style="color: red;">の</span>
      <audio id="audio4">
        <source src="hiragana/no/のみもの.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/no/sound-s.png" onclick="playSoundNomimono()">
    <p style="font-size: 50;">Beverage</p>
    <br><img src="hiragana/no/sample.png" alt="">
    </p>
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/neAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/haAlphabet')}}'">NEXT&gt;</button>
</body>

</html>