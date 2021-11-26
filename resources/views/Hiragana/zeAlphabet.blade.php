<!DOCTYPE html>
<html>

<head>
  <title>ぜPAGE</title>
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
    document.getElementById('audioZe').pause();
    document.getElementById('audioZe').currentTime = 0;
  }

  function playSoundZe() {
    audioStop();
    document.getElementById('audioZe').play();
  }

  function playSoundAnzen() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundKaze() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundZenbu() {
    audioStop();
    document.getElementById('audio3').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ぜ

      <audio id="audioZe">
        <source src="hiragana/ze/ぜ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ze/sound-s.png" onclick="playSoundZe()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/ze/ze.gif" alt="ぜgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/ze/ぜ.png" alt="ぜpng">
    </div>

    <p style="font-size:50px;">あん<span style="color:red;">ぜ</span>ん　Safety
      <audio id="audio1">
        <source src="hiragana/ze/あんぜん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ze/sound-s.png" onclick="playSoundAnzen()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ze/sample.png" alt="">
    </p>
    <br>

    <p style="font-size:50px;">か<span style="color:red;">ぜ</span>　Wind
      <audio id="audio2">
        <source src="hiragana/ze/かぜ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ze/sound-s.png" onclick="playSoundKaze()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ze/sample.png" alt="">
    </p>
    <br>

    <p class="font_word">ぜんぶ　All
      <audio id="audio3">
        <source src="hiragana/ze/ぜんぶ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ze/sound-s.png" onclick="playSoundZenbu()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ze/sample.png" alt="">
    </p>
    <br>

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/zuAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/zoAlphabet')}}'">NEXT&gt;</button>
</body>

</html>