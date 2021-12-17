<!DOCTYPE html>
<html>

<head>
  <title>ろPAGE</title>
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
    document.getElementById('audio0').pause();
    document.getElementById('audio0').currentTime = 0;
  }

  function playSoundOfuro() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundDaidokoro() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundRo() {
    audioStop();
    document.getElementById('audio0').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ろ
      <audio id="audio0">
        <source src="hiragana/ro/ろ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ro/sound-s.png" onclick="playSoundRo()">
    </p>
    <div class="letter_start">
      <img class="testBorder" src="hiragana/ro/ro.gif" alt="ろgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/ro/ろ.png" style="width: 35%;" alt="ろpng">
    </div>

    <p style="font-size: 50px;">おふ<span style="color: red;">ろ</span>　Bath
      <audio id="audio1">
        <source src="hiragana/ro/おふろ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ta/sound-s.png" onclick="playSoundOfuro()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ro/sample.png" alt="">
    </p>
    <br>
    <p style="font-size: 50px;">だいどこ<span style="color: red;">ろ</span>　Kitchen
      <audio id="audio2">
        <source src="hiragana/ro/だいどころ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ta/sound-s.png" onclick="playSoundDaidokoro()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ro/sample.png" alt="">
    </p>
    <!-- <br>
    <p style="font-size: 50px;">く<span style="color: red;">ろ</span>　Black
      <audio id="audio3">
        <source src="hiragana/ro/くろ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ta/sound-s.png" onclick="playSound3()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ro/sample.png" alt="">
    </p> -->
<!--
    <br>
    <p class="font_word">ろく　Six
      <audio id="audio4">
        <source src="hiragana/ro/ろく.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ta/sound-s.png" onclick="playSound4()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ro/sample.png" alt="">
    </p>
-->
  </div>

  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/reAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/waAlphabet')}}'">NEXT&gt;</button>
</body>

</html>