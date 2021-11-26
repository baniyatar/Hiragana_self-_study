<!DOCTYPE html>
<html>

<head>
  <title>えPAGE</title>
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
    document.getElementById('audioE').pause();
    document.getElementById('audioE').currentTime = 0;
  }

  function playSoundE() {
    audioStop();
    document.getElementById('audioE').play();
  }

  function playSoundEiga() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundEki() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundEnPitsu() {
    audioStop();
    document.getElementById('audio3').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">え

      <audio id="audioE">
        <source src="hiragana/e/え.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/e/sound-s.png" onclick="playSoundE()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/e/e.gif" alt="えgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/e/e.png" alt="えpng">
    </div>

    <p class="font_word">えいが　Movie
      <audio id="audio1">
        <source src="hiragana/e/えいが.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/e/sound-s.png" onclick="playSoundEiga()">
    <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/e/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">えき　Railway Station
      <audio id="audio2">
        <source src="hiragana/e/えき.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/e/sound-s.png" onclick="playSoundEki()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/e/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">えんぴつ　Pencil
      <audio id="audio3">
        <source src="hiragana/e/えんぴつ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/e/sound-s.png" onclick="playSoundEnPitsu()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/e/sample.png" alt="">
    </p>

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/uAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/oAlphabet')}}'">NEXT&gt;</button>
</body>

</html>