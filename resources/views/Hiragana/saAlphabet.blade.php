<!DOCTYPE html>
<html>

<head>
  <title>さPAGE</title>
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
    document.getElementById('audioSa').pause();
    document.getElementById('audioSa').currentTime = 0;
  }

  function playSoundSaifu() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundSakana() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundSakura() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSoundSatou() {
    audioStop();
    document.getElementById('audio4').play();
  }

  function playSoundSa() {
    audioStop();
    document.getElementById('audioSa').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">さ

      <audio id="audioSa">
        <source src="hiragana/sa/さ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/sa/sound-s.png" onclick="playSoundSa()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/gif/sa.gif" alt="さgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/sa/さ-bw.png" alt="さpng">
    </div>
    <p class="font_word">さいふ

      <audio id="audio1">
        <source src="hiragana/sa/さいふ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/sa/sound-s.png" onclick="playSoundSaifu()">
    <p style="font-size: 50;">Purce</p>
    {{-- <br><img src="hiragana/a/red.png" alt=""> --}}
    </p>
    <p class="font_word">さかな
      <audio id="audio2">
        <source src="hiragana/sa/さかな.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/sa/sound-s.png" onclick="playSoundSakana()">
    <p style="font-size: 50;">Fish</p>
    {{-- <br><img src="hiragana/a/foot.png" alt=""> --}}
    </p>

    <p class="font_word">さくら
      <audio id="audio3">
        <source src="hiragana/sa/さくら.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/sa/sound-s.png" onclick="playSoundSakura()">
    <p style="font-size: 50;">Cherry Blossom</p>
    {{-- <br><img src="hiragana/a/head.png" alt=""> --}}
    </p>

    <p class="font_word">さとう
      <audio id="audio4">
        <source src="hiragana/sa/さとう.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/sa/sound-s.png" onclick="playSoundSatou()">
    <p style="font-size: 50;">Suger</p>
    {{-- <br><img src="hiragana/a/ame.jpg" alt=""> --}}
    </p>
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/koAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/shiAlphabet')}}'">NEXT&gt;</button>
</body>

</html>