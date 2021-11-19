<!DOCTYPE html>
<html>

<head>
  <title>どPAGE</title>
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
    document.getElementById('audio0').pause();
    document.getElementById('audio0').currentTime = 0;
  }

  function playSound1() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSound2() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSound3() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSound0() {
    audioStop();
    document.getElementById('audio0').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ど

      <audio id="audio0">
        <source src="hiragana/do/ど.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/do/sound-s.png" onclick="playSound0()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/do/do.gif" alt="どgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/do/ど.png" alt="どpng">
    </div>

    <p class="font_word">どうぶつ

      <audio id="audio1">
        <source src="hiragana/do/どうぶつ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/do/sound-s.png" onclick="playSound1()">
    <p style="font-size: 50;">Animal</p>
    <!-- <br><img src="hiragana/ta/red.png" alt=""> -->
    </p>
    <p class="font_word">どこ
      <audio id="audio2">
        <source src="hiragana/do/どこ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/do/sound-s.png" onclick="playSound2()">
    <p style="font-size: 50;">Where</p>
    <!-- <br><img src="hiragana/ta/foot.png" alt=""> -->
    </p>

    <p class="font_word">どようび
      <audio id="audio3">
        <source src="hiragana/do/どようび.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/do/sound-s.png" onclick="playSound3()">
    <p style="font-size: 50;">Saturday</p>
    <!-- <br><img src="hiragana/ta/head.png" alt=""> -->
    </p>

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/deAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/baAlphabet')}}'">NEXT&gt;</button>
</body>

</html>