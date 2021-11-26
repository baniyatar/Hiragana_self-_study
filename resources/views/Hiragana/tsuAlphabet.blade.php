<!DOCTYPE html>
<html>

<head>
  <title>つPAGE</title>
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
    document.getElementById('audio0').pause();
    document.getElementById('audio0').currentTime = 0;
  }

  function playSound1() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSound2() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSound3() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSound4() {
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
    <p class="font_word">つ

      <audio id="audio0">
        <source src="hiragana/tsu/つ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/tsu/sound-s.png" onclick="playSound0()">
    </p>
    <div class="letter_start">
      <img class="testBorder" src="hiragana/tsu/tsu.gif" alt="つgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/tsu/つ.png" style="width: 50%;" alt="つpng">
    </div>

    <p class="font_word">つかれた　Tired
      <audio id="audio1">
        <source src="hiragana/tsu/つかれた.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/tsu/sound-s.png" onclick="playSound1()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/tsu/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">つくる　To make
      <audio id="audio2">
        <source src="hiragana/tsu/つくる.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/tsu/sound-s.png" onclick="playSound2()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/tsu/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">つめたい　Cold
      <audio id="audio3">
        <source src="hiragana/tsu/つめたい.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/tsu/sound-s.png" onclick="playSound3()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/tsu/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">つよい　Strong
      <audio id="audio4">
        <source src="hiragana/tsu/つよい.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/tsu/sound-s.png" onclick="playSound4()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/tsu/sample.png" alt="">
    </p>
  </div>

  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/chiAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/teAlphabet')}}'">NEXT&gt;</button>
</body>

</html>