<!DOCTYPE html>
<html>

<head>
  <title>ぱPAGE</title>
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
    document.getElementById('audioPa').pause();
    document.getElementById('audioPa').currentTime = 0;
  }

  function playSoundkanpai() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundshinpai() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundsupai() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSoundpa() {
    audioStop();
    document.getElementById('audioPa').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ぱ

      <audio id="audioPa">
        <source src="hiragana/pa/pa.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/pa/sound-s.png" onclick="playSoundpa()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/pa/pa.gif" alt="pagif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/pa/pa.png" style="width: 80%;" alt="gapng">
    </div>

    <p style="font-size: 50px;">かん<span style="color: red;">ぱ</span>い　Toast
      <audio id="audio1">
        <source src="hiragana/pa/かんぱい.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/pa/sound-s.png" onclick="playSoundkanpai()">
      <br>
      <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/pa/sample.png" alt="">
    </p>
    <br>

    <p style="font-size: 50px;">しん<span style="color: red;">ぱ</span>い　Worry
      <audio id="audio2">
        <source src="hiragana/pa/しんぱい.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/pa/sound-s.png" onclick="playSoundshinpai()">
      <br>
      <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/pa/sample.png" alt="">
    </p>
    <br>

    <p style="font-size: 50px;">すっ<span style="color: red;">ぱ</span>い　Sour
      <audio id="audio3">
        <source src="hiragana/pa/すっぱい.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/pa/sound-s.png" onclick="playSoundsupai()">
      <br>
      <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/pa/sample.png" alt="">
    </p>
    <br>

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/boAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/piAlphabet')}}'">NEXT&gt;</button>
</body>

</html>