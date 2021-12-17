<!DOCTYPE html>
<html>

<head>
  <title>んPAGE</title>
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

  // function playSound4() {
  //   audioStop();
  //   document.getElementById('audio4').play();
  // }

  function playSound0() {
    audioStop();
    document.getElementById('audio0').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ん
      <audio id="audio0">
        <source src="hiragana/n/ん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/n/sound-s.png" onclick="playSound0()">
    </p>
    <div class="letter_start">
      <img class="testBorder" src="hiragana/n/n.gif" alt="んgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/n/ん.png" style="width: 40%;" alt="んpng">
    </div>

    <p style="font-size: 50px;">かば<span style="color: red;">ん</span>　Bag
      <audio id="audio1">
        <source src="hiragana/n/かばん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/n/sound-s.png" onclick="playSound1()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/n/sample.png" alt="">
    </p>
    <br>
    <p style="font-size: 50px;">で<span style="color: red;">ん</span>き　Electricity
      <audio id="audio2">
        <source src="hiragana/n/でんき.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/n/sound-s.png" onclick="playSound2()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/n/sample.png" alt="">
    </p>
    <!-- <br>
    <p style="font-size: 50px;">で<span style="color: red;">ん</span>わ　Telephone
      <audio id="audio3">
        <source src="hiragana/n/でんわ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/n/sound-s.png" onclick="playSound3()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/n/sample.png" alt="">
    </p> -->
<!--
    <br>
    <p style="font-size: 50px;">べ<span style="color: red;">ん</span>きょう　Study
      <audio id="audio4">
        <source src="hiragana/n/べんきょう.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/n/sound-s.png" onclick="playSound4()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/n/sample.png" alt="">
    </p>
-->
  </div>

  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/woAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/voicedIntro')}}'">NEXT&gt;</button>
</body>

</html>