<!DOCTYPE html>
<html>

<head>
  <title>にょPAGE</title>
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
    document.getElementById('audioNyo').pause();
    document.getElementById('audioNyo').currentTime = 0;
  }

  function playSoundnyou() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundnyoubau() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundNyo() {
    audioStop();
    document.getElementById('audioNyo').play();
  }
</script>

<body>
  <div class="box">
    <p style="font-size: 50px;"><span style="color: red;">にょ</span>

      <audio id="audioNyo">
        <source src="hiragana/nyo/nyo.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/nyo/sound-s.png" onclick="playSoundNyo()">
    </p>
    <div class="letter_start">

      {{-- <img class = "testBorder" src="hiragana/nyo/nyo.gif" alt="まgif"> --}}
      <img src="hiragana/nyo/nyo.png" alt="にゅpng">
    </div><br>

    <p style="font-size: 50px;"><span style="color: red;">にょ</span>う

      <audio id="audio1">
        <source src="hiragana/nyo/にょう.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/nyo/sound-s.png" onclick="playSoundnyou()">
    <p style="font-size:50;">Urine</p>
    <br>
    <!-- <img src="hiragana/a/red.png" alt="">-->
    </p>

    <p style="font-size: 50px;"><span style="color: red;">にょ</span>うぼう

      <audio id="audio2">
        <source src="hiragana/nyo/にょうばう.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/nyo/sound-s.png" onclick="playSoundnyoubau()">
    <p style="font-size:50;">Wife</p>
    <br>
    <!-- <img src="hiragana/a/red.png" alt="">-->
    </p>

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/nyuAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/hyaAlphabet')}}'">NEXT&gt;</button>
</body>

</html>