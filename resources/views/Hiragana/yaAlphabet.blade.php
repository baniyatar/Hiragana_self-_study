<!DOCTYPE html>
<html>

<head>
  <title>やPAGE</title>
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
    document.getElementById('audioYa').pause();
    document.getElementById('audioYa').currentTime = 0;
  }

  function playSoundYa() {
    audioStop();
    document.getElementById('audioYa').play();
  }

  function playSoundYaoya() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundYasai() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundYasumi() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSoundYama() {
    audioStop();
    document.getElementById('audio4').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">や
      <audio id="audioYa">
        <source src="hiragana/ya/や.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ya/sound-s.png" onclick="playSoundYa()">
    </p>
    <div class="letter_start">
      <img class="testBorder" src="hiragana/ya/Ya.gif" alt="やgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/ya/や.png" style="width: 80%;" alt="やpng">
    </div>

    <p class="font_word">やお<span style="color: red;">や</span>　Vegetable Store
      <audio id="audio1">
        <source src="hiragana/ya/やおや.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ya/sound-s.png" onclick="playSoundYaoya()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ya/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">やさい　Vegetable
      <audio id="audio2">
        <source src="hiragana/ya/やさい.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ya/sound-s.png" onclick="playSoundYasai()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ya/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">やすみ　Rest
      <audio id="audio3">
        <source src="hiragana/ya/やすみ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ya/sound-s.png" onclick="playSoundYasumi()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ya/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">やま　Mountain
      <audio id="audio4">
        <source src="hiragana/ya/やま.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ya/sound-s.png" onclick="playSoundYama()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ya/sample.png" alt="">
    </p>
  </div>

  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/moAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/yuAlphabet')}}'">NEXT&gt;</button>
</body>

</html>