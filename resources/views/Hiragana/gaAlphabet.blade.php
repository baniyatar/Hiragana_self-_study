<!DOCTYPE html>
<html>

<head>
  <title>がPAGE</title>
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
    document.getElementById('audioGa').pause();
    document.getElementById('audioGa').currentTime = 0;
  }

  function playSoundgaigoku() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundgakosei() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundgatsukou() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSoundga() {
    audioStop();
    document.getElementById('audioGa').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">が

      <audio id="audioGa">
        <source src="hiragana/ga/ga.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ga/sound-s.png" onclick="playSoundga()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/ga/ga.gif" alt="gagif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/ga/ga.png" alt="gapng">
    </div>

    <p class="font_word">がいこく

      <audio id="audio1">
        <source src="hiragana/ga/がいこく.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ga/sound-s.png" onclick="playSoundgaigoku()">
    <p style="font-size: 50;">Foreign Countries</p>
    <br>
    <!-- <img src="hiragana/a/red.png" alt="">-->
    </p>
    <p class="font_word">がくせい
      <audio id="audio2">
        <source src="hiragana/ga/がくせい.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ga/sound-s.png" onclick="playSoundgakosei()">
    <p style="font-size: 50;">Student</p>
    <br>
    <!-- <img src="hiragana/a/foot.png" alt="">-->
    </p>

    <p class="font_word">がっこう
      <audio id="audio3">
        <source src="hiragana/ga/がっこう.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ga/sound-s.png" onclick="playSoundgatsukou()">
    <p style="font-size: 50;">School</p>
    <br>
    <!--<img src="hiragana/a/head.png" alt="">-->
    </p>

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/voicedConstruct')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/giAlphabet')}}'">NEXT&gt;</button>
</body>

</html>