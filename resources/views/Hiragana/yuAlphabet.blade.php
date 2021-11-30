<!DOCTYPE html>
<html>

<head>
  <title>ゆPAGE</title>
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
    document.getElementById('audio5').pause();
    document.getElementById('audio5').currentTime = 0;
    document.getElementById('audio6').pause();
    document.getElementById('audio6').currentTime = 0;
    document.getElementById('audioYu').pause();
    document.getElementById('audioYu').currentTime = 0;
  }

  function playSoundYu() {
    audioStop();
    document.getElementById('audioYu').play();
  }

  function playSoundYugata() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundYubinkyoku() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundYumei() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSoundYuki() {
    audioStop();
    document.getElementById('audio4').play();
  }

  function playSoundYuugure() {
    audioStop();
    document.getElementById('audio5').play();
  }

  function playSoundYukata() {
    audioStop();
    document.getElementById('audio6').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ゆ
      <audio id="audioYu">
        <source src="hiragana/yu/ゆ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/yu/sound-s.png" onclick="playSoundYu()">
    </p>
    <div class="letter_start">
      <img class="testBorder" src="hiragana/yu/yu.gif" alt="ゆgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/yu/ゆ.png" style="width: 60%;" alt="ゆpng">
    </div>

    <p class="font_word">ゆうがた　Evening
      <audio id="audio1">
        <source src="hiragana/yu/ゆうがた.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/yu/sound-s.png" onclick="playSoundYugata()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/yu/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">ゆうびんきょく　Post Office
      <audio id="audio2">
        <source src="hiragana/yu/ゆうびんきょく.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/yu/sound-s.png" onclick="playSoundYubinkyoku()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/yu/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">ゆうめい　Famous
      <audio id="audio3">
        <source src="hiragana/yu/ゆうめい.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/yu/sound-s.png" onclick="playSoundYumei()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/yu/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">ゆき　Snow
      <audio id="audio4">
        <source src="hiragana/yu/ゆき.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/yu/sound-s.png" onclick="playSoundYuki()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/yu/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">ゆうぐれ　Sunset
      <audio id="audio5">
        <source src="hiragana/yu/ゆうぐれ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/yu/sound-s.png" onclick="playSoundYuugure()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/yu/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">ゆかた　Yukata(Japanese Kimono)
      <audio id="audio6">
        <source src="hiragana/yu/ゆかた.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/yu/sound-s.png" onclick="playSoundYukata()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/yu/sample.png" alt="">
    </p>
  </div>

  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/yaAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/yoAlphabet')}}'">NEXT&gt;</button>
</body>

</html>