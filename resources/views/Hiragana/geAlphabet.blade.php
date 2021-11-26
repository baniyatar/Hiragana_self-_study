<!DOCTYPE html>
<html>

<head>
  <title>げPAGE</title>
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
    document.getElementById('audioGi').pause();
    document.getElementById('audioGi').currentTime = 0;
  }

  function playSoundomiyage() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundgenkan() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundgenki() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSoundge() {
    audioStop();
    document.getElementById('audioGi').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">げ

      <audio id="audioGi">
        <source src="hiragana/ge/ge.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ge/sound-s.png" onclick="playSoundge()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/ge/ge.gif" alt="gagif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/ge/ge.png" alt="gapng">
    </div>

    <p style="font-size: 50px;">おみや<span style="color: red;">げ</span>　Souvenir

      <audio id="audio1">
        <source src="hiragana/ge/おみやげ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ge/sound-s.png" onclick="playSoundomiyage()">
      <br>
    <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ge/sample.png" alt="">
    </p>
    <br>

    <p class="font_word">げんかん　Entrance
      <audio id="audio2">
        <source src="hiragana/ge/げんかん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ge/sound-s.png" onclick="playSoundgenkan()">
      <br>
    <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ge/sample.png" alt="">
    </p>
    <br>

    <p class="font_word">げんき　Health
      <audio id="audio3">
        <source src="hiragana/ge/げんき.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ge/sound-s.png" onclick="playSoundgenki()">
      <br>
    <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ge/sample.png" alt="">
    </p>
    <br>

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/guAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/goAlphabet')}}'">NEXT&gt;</button>
</body>

</html>