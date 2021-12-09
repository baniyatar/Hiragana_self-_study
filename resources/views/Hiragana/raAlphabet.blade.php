<!DOCTYPE html>
<html>

<head>
  <title>らPAGE</title>
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
    document.getElementById('audio3').pause();
    document.getElementById('audio3').currentTime = 0;
    document.getElementById('audio4').pause();
    document.getElementById('audio4').currentTime = 0;
    document.getElementById('audio0').pause();
    document.getElementById('audio0').currentTime = 0;
  }

  // function playSound1() {
  //   audioStop();
  //   document.getElementById('audio1').play();
  // }

  // function playSound2() {
  //   audioStop();
  //   document.getElementById('audio2').play();
  // }

  function playSoundOsara() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSoundKarada() {
    audioStop();
    document.getElementById('audio4').play();
  }

  function playSound0() {
    audioStop();
    document.getElementById('audio0').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ら
      <audio id="audio0">
        <source src="hiragana/ra/ら.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ra/sound-s.png" onclick="playSound0()">
    </p>
    <div class="letter_start">
      <img class="testBorder" src="hiragana/ra/ra.gif" alt="らgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/ra/ら.png" style="width: 60%;" alt="らpng">
    </div>

    <!-- <p style="font-size: 50px;">さく<span style="color: red;">ら</span>　Cherry blossom
      <audio id="audio1">
        <source src="hiragana/ra/さくら.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ra/sound-s.png" onclick="playSound1()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ra/sample.png" alt="">
    </p> -->
<!--
    <br>
    <p class="font_word">らいげつ　Next Month
      <audio id="audio2">
        <source src="hiragana/ra/らいげつ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ra/sound-s.png" onclick="playSound2()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ra/sample.png" alt="">
    </p>
-->
    <br>
    <p style="font-size: 50px;">おさ<span style="color: red;">ら</span>　Plate
      <audio id="audio3">
        <source src="hiragana/ra/おさら.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ra/sound-s.png" onclick="playSoundOsara()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ra/sample.png" alt="">
    </p>
    <br>
    <p style="font-size: 50px;">か<span style="color: red;">ら</span>だ　Body
      <audio id="audio4">
        <source src="hiragana/ra/からだ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ra/sound-s.png" onclick="playSoundKarada()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ra/sample.png" alt="">
    </p>
  </div>

  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/yoAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/riAlphabet')}}'">NEXT&gt;</button>
</body>

</html>