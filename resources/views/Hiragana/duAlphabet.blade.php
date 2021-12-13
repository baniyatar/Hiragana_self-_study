<!DOCTYPE html>
<html>

<head>
  <title>づPAGE</title>
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
    document.getElementById('audio2').pause();
    document.getElementById('audio2').currentTime = 0;
    document.getElementById('audio0').pause();
    document.getElementById('audio0').currentTime = 0;
  }

  // function playSound1() {
  //   audioStop();
  //   document.getElementById('audio1').play();
  // }

  function playSound2() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSound0() {
    audioStop();
    document.getElementById('audio0').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">づ

      <audio id="audio0">
        <source src="hiragana/du/づ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/du/sound-s.png" onclick="playSound0()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/du/du.gif" alt="づgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/du/づ.png" style="width: 80%;" alt="づpng">
    </div>

    <!-- <p style="font-size: 50px;">おこ<span style="color: red;">づ</span>かい　Allowance

      <audio id="audio1">
        <source src="hiragana/du/おこづかい.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/du/sound-s.png" onclick="playSound1()">
      <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/du/sample.png" alt="">
    </p>
    <br> -->

    <p style="font-size: 50px;">かん<span style="color: red;">づ</span>め　Canning
      <audio id="audio2">
        <source src="hiragana/du/かんづめ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/du/sound-s.png" onclick="playSound2()">
      <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/du/sample.png" alt="">
    </p>
    <br>

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/diAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/deAlphabet')}}'">NEXT&gt;</button>
</body>

</html>