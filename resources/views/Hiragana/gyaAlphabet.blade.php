<!DOCTYPE html>
<html>

<head>
  <title>ぎゃPAGE</title>
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
    document.getElementById('audioYa').pause();
    document.getElementById('audioYa').currentTime = 0;
  }

  function playSoundGya() {
    audioStop();
    document.getElementById('audioYa').play();
  }

  function playSoundGyaku() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundGyakukouka() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundGyakuten() {
    audioStop();
    document.getElementById('audio3').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ぎ<span style="color: red;">ゃ</span>

      <audio id="audioYa">
        <source src="hiragana/gya/ぎゃ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ya/sound-s.png" onclick="playSoundGya()">
    </p>
    <div class="letter_start">

      <!--  <img class = "testBorder" src="hiragana/ya/Ya.gif" alt="やgif">-->
      <img src="hiragana/gya/ぎゃ.png" alt="ぎゃpng">
    </div><br>

    <p style="font-size: 50px;"><span style="color: red;">ぎゃ</span>く Opposite
      <audio id="audio1">
        <source src="hiragana/gya/ぎゃく.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/gya/sound-s.png" onclick="playSoundGyaku()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/gya/sample.png" alt="">
      <br>
    
    </p>
    <p style="font-size: 50px;"><span style="color: red;">ぎゃ</span>くこうか Opposite effect
      <audio id="audio2">
        <source src="hiragana/gya/ぎゃくこうか.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/gya/sound-s.png" onclick="playSoundGyakukouka()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/gya/sample.png" alt="">
      <br>
    </p>
    <p style="font-size: 50px;"><span style="color: red;">ぎゃ</span>くてん Reversal
      <audio id="audio3">
        <source src="hiragana/gya/ぎゃくてん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/gya/sound-s.png" onclick="playSoundGyakuten()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/gya/sample.png" alt="">
      <br>
    </p>
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/kyoAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/gyuAlphabet')}}'">NEXT&gt;</button>
</body>

</html>