<!DOCTYPE html>
<html>

<head>
  <title>おPAGE</title>
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
    // document.getElementById('audio1').pause();
    // document.getElementById('audio1').currentTime = 0;
    document.getElementById('audio2').pause();
    document.getElementById('audio2').currentTime = 0;
    document.getElementById('audio3').pause();
    document.getElementById('audio3').currentTime = 0;
    // document.getElementById('audio4').pause();
    // document.getElementById('audio4').currentTime = 0;
    document.getElementById('audioO').pause();
    document.getElementById('audioO').currentTime = 0;
  }

  // function playSoundOnaka() {
  //   audioStop();
  //   document.getElementById('audio1').play();
  // }

  function playSoundOkane() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundKao() {
    audioStop();
    document.getElementById('audio3').play();
  }

  // function playSoundOnna() {
  //   audioStop();
  //   document.getElementById('audio4').play();
  // }

  function playSoundO() {
    audioStop();
    document.getElementById('audioO').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">お
      <audio id="audioO">
        <source src="hiragana/o/お.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/o/sound-s.png" onclick="playSoundO()">
    </p>
    <div class="letter_start">
      <img class="testBorder" src="hiragana/o/o.gif" alt="おgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/o/o.png" alt="おpng">
    </div>

<!--
    <p class="font_word">おさら　Plate / Dish
      <audio id="audio1">
        <source src="hiragana/o/おさら.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/o/sound-s.png" onclick="playSoundOsara()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/o/sample.png" alt="">
    </p>
    <br>
-->
    <p class="font_word">おかね　Money
      <audio id="audio2">
        <source src="hiragana/o/おかね.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/o/sound-s.png" onclick="playSoundOkane()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/o/sample.png" alt="">
    </p>
    <br>
    <p style="font-size: 50px;">か<span style="color: red;">お</span>　Face
      <audio id="audio3">
        <source src="hiragana/o/かお.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/o/sound-s.png" onclick="playSoundKao()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/o/sample.png" alt="">
    </p>
    <!-- <br>
    <p class="font_word">おんな　Women
      <audio id="audio4">
        <source src="hiragana/o/おんな.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/o/sound-s.png" onclick="playSoundOnna()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/o/sample.png" alt="">
    </p> -->
  </div>

  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/eAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/kaAlphabet')}}'">NEXT&gt;</button>
</body>

</html>