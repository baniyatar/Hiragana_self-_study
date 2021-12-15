<!DOCTYPE html>
<html>

<head>
  <title>ぴPAGE</title>
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
    // document.getElementById('audio3').pause();
    // document.getElementById('audio3').currentTime = 0;
    document.getElementById('audioPi').pause();
    document.getElementById('audioPi').currentTime = 0;
  }

  function playSoundEnpitsu() {
    audioStop();
    document.getElementById('audio1').play();
  }

  // function playSoundseinengappi() {
  //   audioStop();
  //   document.getElementById('audio2').play();
  // }

  // function playSoundpikapika() {
  //   audioStop();
  //   document.getElementById('audio3').play();
  // }

  function playSoundPi() {
    audioStop();
    document.getElementById('audioPi').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ぴ

      <audio id="audioPi">
        <source src="hiragana/pi/ぴ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/pi/sound-s.png" onclick="playSoundPi()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/pi/pi.gif" alt="pigif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/pi/pi.png" style="width: 70%;" alt="pipng">
    </div>

    <p style="font-size: 50px;">えん<span style="color: red;">ぴ</span>つ　Pencil
      <audio id="audio1">
        <source src="hiragana/pi/えんぴつ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/pi/sound-s.png" onclick="playSoundEnpitsu()">
      <br>
      <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/pi/sample.png" alt="">
    </p>
    <br>

    <!-- <p style="font-size: 50px;">せいねんがっ<span style="color: red;">ぴ</span>　Birthday
      <audio id="audio2">
        <source src="hiragana/pi/せいねんがっぴ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/pi/sound-s.png" onclick="playSoundseinengappi()">
      <br>
      <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/pi/sample.png" alt="">
    </p>
    <br>

    <p class="font_word">ぴか<span style="color: red;">ぴ</span>か　Shiny
      <audio id="audio3">
        <source src="hiragana/pi/ぴかぴか.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/pi/sound-s.png" onclick="playSoundpikapika()">
      <br>
      <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/pi/sample.png" alt="">
    </p>
    <br> -->

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/paAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/puAlphabet')}}'">NEXT&gt;</button>
</body>

</html>