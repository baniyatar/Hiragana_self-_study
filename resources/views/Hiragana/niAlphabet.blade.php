<!DOCTYPE html>
<html>

<head>
  <title>にPAGE</title>
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
    document.getElementById('audio3').pause();
    document.getElementById('audio3').currentTime = 0;
    document.getElementById('audio4').pause();
    document.getElementById('audio4').currentTime = 0;
    document.getElementById('audioNi').pause();
    document.getElementById('audioNi').currentTime = 0;
  }

  function playSoundNi() {
    audioStop();
    document.getElementById('audioNi').play();
  }

  function playSoundNiku() {
    audioStop();
    document.getElementById('audio1').play();
  }

  // function playSoundNishi() {
  //   audioStop();
  //   document.getElementById('audio2').play();
  // }

  function playSoundNihon() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSoundNiwa() {
    audioStop();
    document.getElementById('audio4').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">に

      <audio id="audioNi">
        <source src="hiragana/ni/に.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ni/sound-s.png" onclick="playSoundNi()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/ni/ni.gif" alt="にgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/ni/に.png" style="width: 80%;" alt="にpng">
    </div>

    <p class="font_word">にく　Meat
      <audio id="audio1">
        <source src="hiragana/ni/にく.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ni/sound-s.png" onclick="playSoundNiku()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ni/sample.png" alt="">
    </p>
<!--
    <br>
    <p class="font_word">にし　West
      <audio id="audio2">
        <source src="hiragana/ni/にし.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ni/sound-s.png" onclick="playSoundNishi()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ni/sample.png" alt="">
    </p>
-->
    <br>
    <p class="font_word">にほん／にっぽん　Japan
      <audio id="audio3">
        <source src="hiragana/ni/にほん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ni/sound-s.png" onclick="playSoundNihon()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ni/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">にわ　Yard
      <audio id="audio4">
        <source src="hiragana/ni/にわ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ni/sound-s.png" onclick="playSoundNiwa()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ni/sample.png" alt="">
    </p>
  </div>

  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/naAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/nuAlphabet')}}'">NEXT&gt;</button>
</body>

</html>