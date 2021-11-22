<!DOCTYPE html>
<html>

<head>
  <title>れPAGE</title>
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
    <p class="font_word">れ

      <audio id="audio0">
        <source src="hiragana/re/れ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/re/sound-s.png" onclick="playSound0()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/re/re.gif" alt="れgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/re/れ.png" style="width: 60%;" alt="れpng">
    </div>

    <p style="font-size: 50px;">う<span style="color: red;">れ</span>しい

      <audio id="audio1">
        <source src="hiragana/re/うれしい.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/re/sound-s.png" onclick="playSound1()">
    <p style="font-size: 50;">Happy</p>
    <!-- <br><img src="hiragana/ta/red.png" alt=""> -->
    </p>

    <p style="font-size: 50px;">は<span style="color: red;">れ</span>

      <audio id="audio2">
        <source src="hiragana/re/はれ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/re/sound-s.png" onclick="playSound2()">
    <p style="font-size: 50;">Sunny</p>
    <!-- <br><img src="hiragana/ta/foot.png" alt=""> -->
    </p>

    <p class="font_word">れいぞうこ
      <audio id="audio3">
        <source src="hiragana/re/れいぞうこ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ta/sound-s.png" onclick="playSound3()">
    <p style="font-size: 50;">Refrigerator</p>
    <!-- <br><img src="hiragana/ta/head.png" alt=""> -->
    </p>

    <p class="font_word">れんしゅう
      <audio id="audio4">
        <source src="hiragana/re/れんしゅう.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ta/sound-s.png" onclick="playSound4()">
    <p style="font-size: 50;">Practice</p>
    <!-- <br><img src="hiragana/ta/ame.jpg" alt=""> -->
    </p>
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/ruAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/roAlphabet')}}'">NEXT&gt;</button>
</body>

</html>