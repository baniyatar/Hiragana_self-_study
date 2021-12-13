<!DOCTYPE html>
<html>

<head>
  <title>だPAGE</title>
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

  // function playSound3() {
  //   audioStop();
  //   document.getElementById('audio3').play();
  // }

  function playSound0() {
    audioStop();
    document.getElementById('audio0').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">だ

      <audio id="audio0">
        <source src="hiragana/da/だ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/da/sound-s.png" onclick="playSound0()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/da/da.gif" alt="だgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/da/だ.png" style="width: 100%;" alt="だpng">
    </div>

    <p style="font-size: 50px;">ほん<span style="color: red;">だ</span>な　Bookshelf
      <audio id="audio1">
        <source src="hiragana/da/ほんだな.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/da/sound-s.png" onclick="playSound1()">
      <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/da/sample.png" alt="">
    </p>
    <br>
    <p style="font-size: 50px;">から<span style="color: red;">だ</span>　Body
      <audio id="audio2">
        <source src="hiragana/da/からだ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/da/sound-s.png" onclick="playSound2()">
      <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/da/sample.png" alt="">
    </p>
<!--
    <br>
    <p class="font_word">だれ　Who
      <audio id="audio3">
        <source src="hiragana/da/だれ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/da/sound-s.png" onclick="playSound3()">
      <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/da/sample.png" alt="">
    </p>
    <br>
-->
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/zoAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/diAlphabet')}}'">NEXT&gt;</button>
</body>

</html>