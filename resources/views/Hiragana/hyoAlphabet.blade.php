<!DOCTYPE html>
<html>

<head>
  <title>ひょPAGE</title>
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
    document.getElementById('audioHyo').pause();
    document.getElementById('audioHyo').currentTime = 0;
  }

  function playSoundjikokuhyou() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playhyoijan() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundhyoijiu() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSoundHyo() {
    audioStop();
    document.getElementById('audioHyo').play();
  }
</script>

<body>
  <div class="box">
    <p style="font-size: 50px;"><span style="color: red;">ひょ</span>
      <audio id="audioHyo">
        <source src="hiragana/hyo/hyo.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/hyo/sound-s.png" onclick="playSoundHyo()">
    </p>
    <div class="letter_start">
      {{-- <img class = "testBorder" src="hiragana/hyo/hyo.gif" alt="まgif"> --}}
      <img src="hiragana/hyo/hyo.png" alt="hyapng">
    </div><br>

    <p style="font-size: 50px;">じこく<span style="color: red;">ひょ</span>う　Timetable
      <audio id="audio1">
        <source src="hiragana/hyo/じこくひょう.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/hyo/sound-s.png" onclick="playSoundjikokuhyou()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/hyo/sample.png" alt="">
      <br>
    </p>
    <p style="font-size: 50px;"><span style="color: red;">ひょ</span>うざん　Iceberg
      <audio id="audio2">
        <source src="hiragana/hyo/ひょうざん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/hyo/sound-s.png" onclick="playhyoijan()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/hyo/sample.png" alt="">
      <br>
    </p>
    <p style="font-size: 50px;"><span style="color: red;">ひょ</span>うじょう　Facial expression
      <audio id="audio3">
        <source src="hiragana/hyo/ひょうじょう.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/hyo/sound-s.png" onclick="playSoundhyoijiu()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/hyo/sample.png" alt="">
      <br>
    </p>
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/hyuAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/byaAlphabet')}}'">NEXT&gt;</button>
</body>

</html>