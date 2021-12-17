<!DOCTYPE html>
<html>

<head>
  <title>こPAGE</title>
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
    // document.getElementById('audio3').pause();
    // document.getElementById('audio3').currentTime = 0;
    document.getElementById('audio4').pause();
    document.getElementById('audio4').currentTime = 0;
    document.getElementById('audioKo').pause();
    document.getElementById('audioKo').currentTime = 0;
  }

  // function playSoundKouen() {
  //   audioStop();
  //   document.getElementById('audio1').play();
  // }

  function playSoundKouban() {
    audioStop();
    document.getElementById('audio2').play();
  }

  // function playSoundKoe() {
  //   audioStop();
  //   document.getElementById('audio3').play();
  // }

  function playSoundKodomo() {
    audioStop();
    document.getElementById('audio4').play();
  }

  function playSoundKo() {
    audioStop();
    document.getElementById('audioKo').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">こ
      <audio id="audioKo">
        <source src="hiragana/ko/こ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ko/sound-s.png" onclick="playSoundKo()">
    </p>
    <div class="letter_start">
      <img class="testBorder" src="hiragana/ko/ko.gif" alt="こgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/ko/こ.png" style="width: 70%;" alt="こpng">
    </div>

    <!-- <p class="font_word">こうえん　Park
      <audio id="audio1">
        <source src="hiragana/ko/こうえん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ko/sound-s.png" onclick="playSoundKouen()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ko/sample.png" alt="">
    </p>
    <br> -->
    <p class="font_word">こうばん　Police Box
      <audio id="audio2">
        <source src="hiragana/ko/こうばん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ko/sound-s.png" onclick="playSoundKouban()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ko/sample.png" alt="">
    </p>
<!--
    <br>
    <p class="font_word">こえ　Sound
      <audio id="audio3">
        <source src="hiragana/ko/こえ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/a/sound-s.png" onclick="playSoundKoe()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ko/sample.png" alt="">
    </p>
-->
    <br>
    <p class="font_word">こども　Child
      <audio id="audio4">
        <source src="hiragana/ko/こども.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ko/sound-s.png" onclick="playSoundKodomo()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ko/sample.png" alt="">
    </p>
  </div>

  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/keAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/saAlphabet')}}'">NEXT&gt;</button>
</body>

</html>