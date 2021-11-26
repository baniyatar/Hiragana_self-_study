<!DOCTYPE html>
<html>

<head>
  <title>けPAGE</title>
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
    document.getElementById('audioKe').pause();
    document.getElementById('audioKe').currentTime = 0;
  }

  function playSoundKeisatsu() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundKeitaidenwa() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundKeshiki() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSoundKeshigomu() {
    audioStop();
    document.getElementById('audio4').play();
  }

  function playSoundKe() {
    audioStop();
    document.getElementById('audioKe').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">け

      <audio id="audioKe">
        <source src="hiragana/ke/け.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ke/sound-s.png" onclick="playSoundKe()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/ke/ke.gif" alt="けgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/ke/け.png" style="width: 80%;" alt="けpng">
    </div>

    <p class="font_word">けいさつ　Police
      <audio id="audio1">
        <source src="hiragana/ke/けいさつ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/a/sound-s.png" onclick="playSoundKeisatsu()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ke/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">けいたいでんわ　Cellphone
      <audio id="audio2">
        <source src="hiragana/ke/けいたいでんわ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ke/sound-s.png" onclick="playSoundKeitaidenwa()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ke/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">けしき　Scenery
      <audio id="audio3">
        <source src="hiragana/ke/けしき.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ke/sound-s.png" onclick="playSoundKeshiki()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ke/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">けしごむ　Eraser
      <audio id="audio4">
        <source src="hiragana/ke/けしごむ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ke/sound-s.png" onclick="playSoundKeshigomu()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ke/sample.png" alt="">
    </p>
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/kuAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/koAlphabet')}}'">NEXT&gt;</button>
</body>

</html>