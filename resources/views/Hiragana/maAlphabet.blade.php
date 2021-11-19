<!DOCTYPE html>
<html>

<head>
  <title>まPAGE</title>
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
    document.getElementById('audioMa').pause();
    document.getElementById('audioMa').currentTime = 0;
  }

  function playSoundMainichi() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundmae() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundmakura() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSoundMachi() {
    audioStop();
    document.getElementById('audio4').play();
  }

  function playSoundMa() {
    audioStop();
    document.getElementById('audioMa').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ま

      <audio id="audioMa">
        <source src="hiragana/ma/ま.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ma/sound-s.png" onclick="playSoundMa()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/ma/ma.gif" alt="まgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/ma/ま.png" alt="まpng">
    </div>

    <p class="font_word">まいにち

      <audio id="audio1">
        <source src="hiragana/ma/まいにち.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ma/sound-s.png" onclick="playSoundMainichi()">
    <p style="font-size: 50;">Everyday</p>
    <br>
    <!-- <img src="hiragana/a/red.png" alt="">-->
    </p>
    <p class="font_word">まえ
      <audio id="audio2">
        <source src="hiragana/ma/まえ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ma/sound-s.png" onclick="playSoundmae()">
    <p style="font-size: 50;">Before / In Front of</p>
    <br>
    <!-- <img src="hiragana/a/foot.png" alt="">-->
    </p>

    <p class="font_word">まくら
      <audio id="audio3">
        <source src="hiragana/ma/まくら.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ma/sound-s.png" onclick="playSoundmakura()">
    <p style="font-size: 50;">Pillow</p>
    <br>
    <!--<img src="hiragana/a/head.png" alt="">-->
    </p>

    <p class="font_word">まち
      <audio id="audio4">
        <source src="hiragana/ma/まち.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ma/sound-s.png" onclick="playSoundMachi()">
    <p style="font-size: 50;">City / Town</p>
    <br>
    <!--<img src="hiragana/a/ame.jpg" alt="">-->
    </p>
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/hoAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/miAlphabet')}}'">NEXT&gt;</button>
</body>

</html>