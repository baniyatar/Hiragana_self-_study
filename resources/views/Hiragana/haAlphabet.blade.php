<!DOCTYPE html>
<html>

<head>
  <title>はPAGE</title>
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
    // document.getElementById('audio1').pause();
    // document.getElementById('audio1').currentTime = 0;
    document.getElementById('audio2').pause();
    document.getElementById('audio2').currentTime = 0;
    document.getElementById('audio3').pause();
    document.getElementById('audio3').currentTime = 0;
    // document.getElementById('audio4').pause();
    // document.getElementById('audio4').currentTime = 0;
    document.getElementById('audioHa').pause();
    document.getElementById('audioHa').currentTime = 0;
  }

  // function playSoundHa2() {
  //   audioStop();
  //   document.getElementById('audio1').play();
  // }

  function playSoundHako() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundHasami() {
    audioStop();
    document.getElementById('audio3').play();
  }

  // function playSoundHachi() {
  //   audioStop();
  //   document.getElementById('audio4').play();
  // }

  function playSoundHa() {
    audioStop();
    document.getElementById('audioHa').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">は
      <audio id="audioHa">
        <source src="hiragana/ha/は.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ha/sound-s.png" onclick="playSoundHa()">
    </p>
    <div class="letter_start">
      <img class="testBorder" src="hiragana/ha/ha.gif" alt="はgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/ha/は.png" style="width: 80%;" alt="はpng">
    </div>

    <!-- <p class="font_word">は　Teeth
      <audio id="audio1">
        <source src="hiragana/ha/は.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ha/sound-s.png" onclick="playSoundHa2()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ha/sample.png" alt="">
    </p>
    <br> -->
    <p class="font_word">はこ　Box
      <audio id="audio2">
        <source src="hiragana/ha/はこ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ha/sound-s.png" onclick="playSoundHako()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ha/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">はさみ　Scissors
      <audio id="audio3">
        <source src="hiragana/ha/はさみ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ha/sound-s.png" onclick="playSoundHasami()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ha/sample.png" alt="">
    </p>
<!--
    <br>
    <p class="font_word">はち　Bee
      <audio id="audio4">
        <source src="hiragana/ha/はち.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ha/sound-s.png" onclick="playSoundHachi()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ha/sample.png" alt="">
    </p>
-->
  </div>

  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/noAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/hiAlphabet')}}'">NEXT&gt;</button>
</body>

</html>