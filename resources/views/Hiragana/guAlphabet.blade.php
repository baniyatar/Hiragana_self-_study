<!DOCTYPE html>
<html>

<head>
  <title>ぐPAGE</title>
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
    document.getElementById('audioGu').pause();
    document.getElementById('audioGu').currentTime = 0;
  }

  function playSoundKaisatsuguchi() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundMegusuri() {
    audioStop();
    document.getElementById('audio2').play();
  }

  // function playSoundmatsusugu() {
  //   audioStop();
  //   document.getElementById('audio3').play();
  // }

  function playSoundGu() {
    audioStop();
    document.getElementById('audioGu').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ぐ

      <audio id="audioGu">
        <source src="hiragana/gu/ぐ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/gu/sound-s.png" onclick="playSoundGu()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/gu/gu.gif" alt="gagif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/gu/gu.png" style="width: 80%;" alt="gapng">
    </div>

    <p style="font-size: 50px;">かいさつ<span style="color: red;">ぐ</span>ち　Ticket gate

      <audio id="audio1">
        <source src="hiragana/gu/かいさつぐち.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/gu/sound-s.png" onclick="playSoundKaisatsuguchi()">
      <br>
    <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/gu/sample.png" alt="">
    </p>
    <br>

    <p style="font-size: 50px;">め<span style="color: red;">ぐ</span>すり　Eye drops
      <audio id="audio2">
        <source src="hiragana/gu/めぐすり.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/gu/sound-s.png" onclick="playSoundMegusuri()">
      <br>
    <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/gu/sample.png" alt="">
    </p>
    <!-- <br>

    <p style="font-size: 50px;">まっす<span style="color: red;">ぐ</span>　Straight
      <audio id="audio3">
        <source src="hiragana/gu/まっすぐ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/gu/sound-s.png" onclick="playSoundmatsusugu()">
      <br>
    <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/gu/sample.png" alt="">
    </p>
    <br> -->

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/giAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/geAlphabet')}}'">NEXT&gt;</button>
</body>

</html>