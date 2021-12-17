<!DOCTYPE html>
<html>

<head>
  <title>ぞPAGE</title>
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
    document.getElementById('audio3').pause();
    document.getElementById('audio3').currentTime = 0;
    document.getElementById('audioZo').pause();
    document.getElementById('audioZo').currentTime = 0;
  }

  function playSoundZo() {
    audioStop();
    document.getElementById('audioZo').play();
  }

  function playSoundZou() {
    audioStop();
    document.getElementById('audio1').play();
  }

  // function playSoundKazoku() {
  //   audioStop();
  //   document.getElementById('audio2').play();
  // }

  function playSoundReizouko() {
    audioStop();
    document.getElementById('audio3').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ぞ

      <audio id="audioZo">
        <source src="hiragana/zo/ぞ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/zo/sound-s.png" onclick="playSoundZo()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/zo/zo.gif" alt="ぞgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/zo/ぞ.png" style="width: 80%;" alt="ぞpng">
    </div>

    <p class="font_word">ぞう　Elephant
      <audio id="audio1">
        <source src="hiragana/zo/ぞう.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/zo/sound-s.png" onclick="playSoundZou()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/zo/sample.png" alt="">
    </p>
    <br>

    <!-- <p style="font-size:50px;">か<span style="color:red;">ぞ</span>く　Family
      <audio id="audio2">
        <source src="hiragana/zo/かぞく.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/zo/sound-s.png" onclick="playSoundKazoku()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/zo/sample.png" alt="">
    </p>
    <br> -->

    <p style="font-size:50px;">れい<span style="color:red;">ぞ</span>うこ　Refrigerator
      <audio id="audio3">
        <source src="hiragana/zo/れいぞうこ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/zo/sound-s.png" onclick="playSoundReizouko()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/zo/sample.png" alt="">
    </p>

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/zeAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/daAlphabet')}}'">NEXT&gt;</button>
</body>

</html>