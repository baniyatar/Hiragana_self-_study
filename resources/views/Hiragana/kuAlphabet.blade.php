<!DOCTYPE html>
<html>

<head>
  <title>くPAGE</title>
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
    // document.getElementById('audio3').pause();
    // document.getElementById('audio3').currentTime = 0;
    // document.getElementById('audio4').pause();
    // document.getElementById('audio4').currentTime = 0;
    document.getElementById('audioKu').pause();
    document.getElementById('audioKu').currentTime = 0;
  }

  function playSoundKutsu() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundKusuri() {
    audioStop();
    document.getElementById('audio2').play();
  }

  // function playSoundKutsu() {
  //   audioStop();
  //   document.getElementById('audio3').play();
  // }

  // function playSoundKuruma() {
  //   audioStop();
  //   document.getElementById('audio4').play();
  // }

  function playSoundKu() {
    audioStop();
    document.getElementById('audioKu').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">く

      <audio id="audioKu">
        <source src="hiragana/ku/く.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ku/sound-s.png" onclick="playSoundKu()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/ku/ku.gif" alt="くgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/ku/く.png" style="width: 40%;" alt="くpng">
    </div>

    <p class="font_word">くつ　Shoes
      <audio id="audio1">
        <source src="hiragana/ku/くつ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ku/sound-s.png" onclick="playSoundKutsu()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ku/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">くすり　Medicine
      <audio id="audio2">
        <source src="hiragana/ku/くすり.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ku/sound-s.png" onclick="playSoundKusuri()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ku/sample.png" alt="">
    </p>
    <!-- <br>
    <p class="font_word">くるま　Car
      <audio id="audio4">
        <source src="hiragana/ku/くるま.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ku/sound-s.png" onclick="playSoundKuruma()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ku/sample.png" alt="">
    </p> -->
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/kiAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/keAlphabet')}}'">NEXT&gt;</button>
</body>

</html>