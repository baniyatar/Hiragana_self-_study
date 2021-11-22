<!DOCTYPE html>
<html>

<head>
  <title>ごPAGE</title>
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
    document.getElementById('audioGo').pause();
    document.getElementById('audioGo').currentTime = 0;
  }

  function playSoundgogo() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundgozen() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundtgohan() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSoundgo() {
    audioStop();
    document.getElementById('audioGo').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ご

      <audio id="audioGo">
        <source src="hiragana/go/go.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/go/sound-s.png" onclick="playSoundgo()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/go/go.gif" alt="gagif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/go/go.png" style="width: 80%;" alt="gapng">
    </div>

    <p class="font_word">ご<span style="color: red;">ご</span>



      <audio id="audio1">
        <source src="hiragana/go/ごご.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/go/sound-s.png" onclick="playSoundgogo()">
    <p style="font-size: 50;">Afternoon</p>
    <br>
    <!-- <img src="hiragana/a/red.png" alt="">-->
    </p>
    <p class="font_word">ごぜん
      <audio id="audio2">
        <source src="hiragana/go/ごぜん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/go/sound-s.png" onclick="playSoundgozen()">
    <p style="font-size: 50;">Morning</p>
    <br>
    <!-- <img src="hiragana/a/foot.png" alt="">-->
    </p>

    <p class="font_word">ごはん
      <audio id="audio3">
        <source src="hiragana/go/ごはん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/go/sound-s.png" onclick="playSoundtgohan()">
    <p style="font-size: 50;">Rice</p>
    <br>
    <!--<img src="hiragana/a/head.png" alt="">-->
    </p>

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/geAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/zaAlphabet')}}'">NEXT&gt;</button>
</body>

</html>