<!DOCTYPE html>
<html>

<head>
  <title>ずPAGE</title>
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
    document.getElementById('audioZu').pause();
    document.getElementById('audioZu').currentTime = 0;
  }

  function playSoundZu() {
    audioStop();
    document.getElementById('audioZu').play();
  }

  function playSoundKazu() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundChizu() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundMizu() {
    audioStop();
    document.getElementById('audio3').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ず

      <audio id="audioZu">
        <source src="hiragana/zu/ず.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/zu/sound-s.png" onclick="playSoundZu()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/zu/zu.gif" alt="ずgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/zu/ず.png" style="width: 80%; "alt="ずpng">
    </div>

    <p style="font-size:50px;">か<span style="color:red;">ず</span>

      <audio id="audio1">
        <source src="hiragana/zu/かず.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/zu/sound-s.png" onclick="playSoundKazu()">
    <p style="font-size: 50;">Number</p>
    <br><img src="hiragana/zu/sample.png" alt="">
    </p>

    <p style="font-size:50px;">ち<span style="color:red;">ず</span>
      <audio id="audio2">
        <source src="hiragana/zu/ちず.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/zu/sound-s.png" onclick="playSoundChizu()">
    <p style="font-size: 50;">Map</p>
    <br><img src="hiragana/zu/sample.png" alt="">
    </p>

    <p style="font-size:50px;">み<span style="color:red;">ず</span>
      <audio id="audio3">
        <source src="hiragana/zu/みず.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/zu/sound-s.png" onclick="playSoundMizu()">
    <p style="font-size: 50;">Water</p>
    <br><img src="hiragana/zu/sample.png" alt="">
    </p>

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/jiAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/zeAlphabet')}}'">NEXT&gt;</button>
</body>

</html>