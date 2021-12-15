<!DOCTYPE html>
<html>

<head>
  <title>ぎPAGE</title>
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
    document.getElementById('audioGi').pause();
    document.getElementById('audioGi').currentTime = 0;
  }
  function playSoundkagi() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundginkou() {
    audioStop();
    document.getElementById('audio2').play();
  }

  // function playSoundtsugi() {
  //   audioStop();
  //   document.getElementById('audio3').play();
  // }

  function playSoundgi() {
    audioStop();
    document.getElementById('audioGi').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ぎ

      <audio id="audioGi">
        <source src="hiragana/gi/ぎ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/gi/sound-s.png" onclick="playSoundgi()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/gi/gi.gif" alt="gagif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/gi/gi.png" style="width: 100%;" alt="gapng">
    </div>




    <p style="font-size: 50px;">か<span style="color: red;">ぎ</span>　Key

      <audio id="audio1">
        <source src="hiragana/gi/かぎ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/gi/sound-s.png" onclick="playSoundkagi()">
      <br>
    <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/gi/sample.png" alt="">
    </p>
    <br>

    <p class="font_word">ぎんこう　Bank
      <audio id="audio2">
        <source src="hiragana/gi/ぎんこう.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/gi/sound-s.png" onclick="playSoundginkou()">
      <br>
    <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/gi/sample.png" alt="">
    </p>
    <br>

    <!-- <p style="font-size: 50px;">つ<span style="color: red;">ぎ</span>　Next
      <audio id="audio3">
        <source src="hiragana/gi/つぎ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/gi/sound-s.png" onclick="playSoundtsugi()">
      <br>
    <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/gi/sample.png" alt="">
    </p>
    <br> -->

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/gaAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/guAlphabet')}}'">NEXT&gt;</button>
</body>

</html>