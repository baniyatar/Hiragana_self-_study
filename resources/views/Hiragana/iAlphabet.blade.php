<!DOCTYPE html>
<html>

<head>
  <title>いPAGE</title>
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
    // document.getElementById('audio4').pause();
    // document.getElementById('audio4').currentTime = 0;
    document.getElementById('audioI').pause();
    document.getElementById('audioI').currentTime = 0;
  }

  function playSoundI() {
    audioStop();
    document.getElementById('audioI').play();
  }

  function playSoundIsha() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundIsu() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundInu() {
    audioStop();
    document.getElementById('audio3').play();
  }

  // function playSoundIriguchi() {
  //   audioStop();
  //   document.getElementById('audio4').play();
  // }
</script>

<body>
  <div class="box">
    <p class="font_word">い
      <audio id="audioI">
        <source src="hiragana/i/い.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/i/sound-s.png" onclick="playSoundI()">
    </p>
    <div class="letter_start">
      <img class="testBorder" src="hiragana/i/i.gif" alt="いgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/i/i.png" alt="いpng">
    </div>

    <p class="font_word">いしゃ　Medical Doctor
      <audio id="audio1">
        <source src="hiragana/i/いしゃ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/i/sound-s.png" onclick="playSoundIsha()">
    <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/i/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">いす　Chair
      <audio id="audio2">
        <source src="hiragana/i/いす.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/i/sound-s.png" onclick="playSoundIsu()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/i/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">いぬ　Dog
      <audio id="audio3">
        <source src="hiragana/i/いぬ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/i/sound-s.png" onclick="playSoundInu()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/i/sample.png" alt="">
    </p>
<!--
    <br>
    <p class="font_word">いりぐち　Entrance
      <audio id="audio4">
        <source src="hiragana/i/いりぐち.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/i/sound-s.png" onclick="playSoundIriguchi()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/i/sample.png" alt="">
    </p>
-->
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/aAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/uAlphabet')}}'">NEXT&gt;</button>
</body>

</html>