<!DOCTYPE html>
<html>

<head>
  <title>かPAGE</title>
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
    document.getElementById('audioKa').pause();
    document.getElementById('audioKa').currentTime = 0;
  }

  function playSoundKaidan() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundKagi() {
    audioStop();
    document.getElementById('audio2').play();
  }

  // function playSoundKaban() {
  //   audioStop();
  //   document.getElementById('audio3').play();
  // }

  // function playSoundKawa() {
  //   audioStop();
  //   document.getElementById('audio4').play();
  // }

  function playSoundKa() {
    audioStop();
    document.getElementById('audioKa').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">か

      <audio id="audioKa">
        <source src="hiragana/ka/か.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ka/sound-s.png" onclick="playSoundKa()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/ka/ka.gif" alt="かgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/ka/か.png" style="width: 80%;" alt="かpng">
    </div>

    <p class="font_word">かいだん　Stairs
      <audio id="audio1">
        <source src="hiragana/ka/かいだん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ka/sound-s.png" onclick="playSoundKaidan()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ka/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">かぎ　Key
      <audio id="audio2">
        <source src="hiragana/ka/かぎ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ka/sound-s.png" onclick="playSoundKagi()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ka/sample.png" alt="">
    </p>
    <!-- <br>
    <p class="font_word">かばん　Bag
      <audio id="audio3">
        <source src="hiragana/ka/かばん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ka/sound-s.png" onclick="playSoundKaban()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ka/sample.png" alt="">
    </p> -->
<!--
    <br>
    <p class="font_word">かわ　River
      <audio id="audio4">
        <source src="hiragana/ka/かわ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ka/sound-s.png" onclick="playSoundKawa()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ka/sample.png" alt="">
    </p>
-->
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/oAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/kiAlphabet')}}'">NEXT&gt;</button>
</body>

</html>