<!DOCTYPE html>
<html>

<head>
  <title>なPAGE</title>
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
    document.getElementById('audioNa').pause();
    document.getElementById('audioNa').currentTime = 0;
  }

  function playSoundNa() {
    audioStop();
    document.getElementById('audioNa').play();
  }

  function playSoundSakana() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundHana() {
    audioStop();
    document.getElementById('audio2').play();
  }

  // function playSoundNatsuyasumi() {
  //   audioStop();
  //   document.getElementById('audio3').play();
  // }

  // function playSoundNamae() {
  //   audioStop();
  //   document.getElementById('audio4').play();
  // }
</script>

<body>
  <div class="box">
    <p class="font_word">な

      <audio id="audioNa">
        <source src="hiragana/na/な.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/na/sound-s.png" onclick="playSoundNa()">
    </p>
    <div class="letter_start">
      <img class="testBorder" src="hiragana/na/na.gif" alt="なgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/na/な.png" style="width: 80%;" alt="なpng">
    </div>

    <p style="font-size: 50px;">さか<span style="color: red;">な</span>　Fish
      <audio id="audio1">
        <source src="hiragana/na/さかな.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/na/sound-s.png" onclick="playSoundSakana()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/na/sample.png" alt="">
    </p>
    <br>
    <p style="font-size: 50px;">は<span style="color: red;">な</span>　Flower
      <audio id="audio2">
        <source src="hiragana/na/はな.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/na/sound-s.png" onclick="playSoundHana()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/na/sample.png" alt="">
    </p>
<!--
    <br>
    <p class="font_word">なつやすみ　Summer Vacation
      <audio id="audio3">
        <source src="hiragana/na/なつやすみ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/na/sound-s.png" onclick="playSoundNatsuyasumi()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/na/sample.png" alt="">
    </p>
-->
    <!-- <br>
    <p class="font_word">なまえ　Name
      <audio id="audio4">
        <source src="hiragana/na/なまえ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/na/sound-s.png" onclick="playSoundNamae()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/na/sample.png" alt="">
    </p> -->
  </div>

  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/toAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/niAlphabet')}}'">NEXT&gt;</button>
</body>

</html>