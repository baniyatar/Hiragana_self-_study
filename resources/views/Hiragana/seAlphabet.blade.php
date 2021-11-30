<!DOCTYPE html>
<html>

<head>
  <title>せPAGE</title>
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
    // document.getElementById('audio4').pause();
    // document.getElementById('audio4').currentTime = 0;
    document.getElementById('audioSe').pause();
    document.getElementById('audioSe').currentTime = 0;
  }

  function playSoundSetsuken() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundSenaka() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundSensei() {
    audioStop();
    document.getElementById('audio3').play();
  }

  // function playSoundSentaku() {
  //   audioStop();
  //   document.getElementById('audio4').play();
  // }

  function playSoundSe() {
    audioStop();
    document.getElementById('audioSe').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">せ
      <audio id="audioSe">
        <source src="hiragana/se/せ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/se/sound-s.png" onclick="playSoundSe()">
    </p>
    <div class="letter_start">
      <img class="testBorder" src="hiragana/gif/se.gif" alt="せgif">
    </div><br>
    <div class="letter_start"> <img src="/hiragana/se/せ-bw.png" style="width: 80%;" alt="せpng">
    </div>

    <p class="font_word">せっけん　Soap
      <audio id="audio1">
        <source src="hiragana/se/せっけん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/se/sound-s.png" onclick="playSoundSetsuken()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/se/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">せなか　Back
      <audio id="audio2">
        <source src="hiragana/se/せなか.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/se/sound-s.png" onclick="playSoundSenaka()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/se/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">せんせい　Teacher
      <audio id="audio3">
        <source src="hiragana/se/せんせい.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/se/sound-s.png" onclick="playSoundSensei()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/se/sample.png" alt="">
    </p>
<!--
    <br>
    <p class="font_word">せんたく　Laundry
      <audio id="audio4">
        <source src="hiragana/se/せんたく.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/se/sound-s.png" onclick="playSoundSentaku()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/se/sample.png" alt="">
    </p>
-->
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/suAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/soAlphabet')}}'">NEXT&gt;</button>
</body>

</html>