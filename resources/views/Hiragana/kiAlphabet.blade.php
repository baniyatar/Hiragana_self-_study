<!DOCTYPE html>
<html>

<head>
  <title>きPAGE</title>
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
    // document.getElementById('audio2').pause();
    // document.getElementById('audio2').currentTime = 0;
    // document.getElementById('audio3').pause();
    // document.getElementById('audio3').currentTime = 0;
    document.getElementById('audio4').pause();
    document.getElementById('audio4').currentTime = 0;
    document.getElementById('audioKi').pause();
    document.getElementById('audioKi').currentTime = 0;
  }

  // function playSoundKiiro() {
  //   audioStop();
  //   document.getElementById('audio1').play();
  // }

  // function playSoundKita() {
  //   audioStop();
  //   document.getElementById('audio2').play();
  // }

  // function playSoundKitte() {
  //   audioStop();
  //   document.getElementById('audio3').play();
  // }

  function playSoundKippu() {
    audioStop();
    document.getElementById('audio4').play();
  }

  function playSoundKi() {
    audioStop();
    document.getElementById('audioKi').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">き
      <audio id="audioKi">
        <source src="hiragana/ki/き.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ki/sound-s.png" onclick="playSoundKi()">
    </p>
    <div class="letter_start">
      <img class="testBorder" src="hiragana/ki/ki.gif" alt="きgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/ki/き.png" style="width: 80%;" alt="きpng">
    </div>

    <p class="font_word">き　Tree
      <audio id="audioKi">
        <source src="hiragana/ki/き.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ki/sound-s.png" onclick="playSoundKi()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ki/sample.png" alt="">
    </p>
<!--
    <br>
    <p class="font_word">きた　North
      <audio id="audio2">
        <source src="hiragana/ki/きた.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ki/sound-s.png" onclick="playSoundKita()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ki/sample.png" alt="">
    </p>
-->
    <!-- <br>
    <p class="font_word">きって　Mail Stamp
      <audio id="audio3">
        <source src="hiragana/ki/きって.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ki/sound-s.png" onclick="playSoundKitte()">
    <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ki/sample.png" alt="">
    </p> -->
    <br>
    <p class="font_word">きっぷ　Ticket
      <audio id="audio4">
        <source src="hiragana/ki/きっぷ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ki/sound-s.png" onclick="playSoundKippu()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ki/sample.png" alt="">
    </p>
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/kaAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/kuAlphabet')}}'">NEXT&gt;</button>
</body>

</html>