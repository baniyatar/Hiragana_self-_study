<!DOCTYPE html>
<html>

<head>
  <title>めPAGE</title>
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
    // document.getElementById('audio2').pause();
    // document.getElementById('audio2').currentTime = 0;
    // document.getElementById('audio3').pause();
    // document.getElementById('audio3').currentTime = 0;
    // document.getElementById('audio4').pause();
    // document.getElementById('audio4').currentTime = 0;
    document.getElementById('audioMe').pause();
    document.getElementById('audioMe').currentTime = 0;
  }

  function playSoundAme() {
    audioStop();
    document.getElementById('audio1').play();
  }

  // function playSoundtsumetai() {
  //   audioStop();
  //   document.getElementById('audio2').play();
  // }

  // function playSoundMe() {
  //   audioStop();
  //   document.getElementById('audio3').play();
  // }

  // function playSoundtmegane() {
  //   audioStop();
  //   document.getElementById('audio4').play();
  // }

  function playSoundMe() {
    audioStop();
    document.getElementById('audioMe').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">め
      <audio id="audioMe">
        <source src="hiragana/me/め.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/me/sound-s.png" onclick="playSoundMe()">
    </p>
    <div class="letter_start">
      <img class="testBorder" src="hiragana/me/me.gif" alt="めgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/me/め-bw.png" style="width: 70%;" alt="png">
    </div>

    <p style="font-size: 50px;">あ<span style="color: red;">め</span>　Rain
      <audio id="audio1">
        <source src="hiragana/me/あめ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/me/sound-s.png" onclick="playSoundAme()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/me/sample.png" alt="">
    </p>
<!--
    <br>
    <p style="font-size: 50px;">つ<span style="color: red;">め</span>たい　Cold
      <audio id="audio2">
        <source src="hiragana/me/つめたい.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/me/sound-s.png" onclick="playSoundtsumetai()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/me/sample.png" alt="">
    </p>
-->
    <br>
    <p class="font_word">め　Eye
      <audio id="audioMe">
        <source src="hiragana/me/め.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/me/sound-s.png" onclick="playSoundMe()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/me/sample.png" alt="">
    </p>
    <!-- <br>
    <p class="font_word">めがね　Spectacles
      <audio id="audio4">
        <source src="hiragana/me/めがね.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/me/sound-s.png" onclick="playSoundtmegane()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/me/sample.png" alt="">
    </p> -->
  </div>

  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/muAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/moAlphabet')}}'">NEXT&gt;</button>
</body>

</html>