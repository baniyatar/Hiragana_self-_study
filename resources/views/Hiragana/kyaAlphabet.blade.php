<!DOCTYPE html>
<html>

<head>
  <title>きゃPAGE</title>
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
    document.getElementById('audioKya').pause();
    document.getElementById('audioKya').currentTime = 0;
  }
  function playSoundKya() {
    audioStop();
    document.getElementById('audioKya').play();
  }

  function playSoundOkyakusan() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundKyakushitsu() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundHenkyaku() {
    audioStop();
    document.getElementById('audio3').play();
  }
</script>

<body>
  <div class="box">
    <p style="font-size:50px;"><span style="color:red;">きゃ

        <audio id="audioKya">
          <source src="hiragana/kya/きゃ.mp3" type="audio/mp3">
        </audio>
        <img style="vertical-align:middle;" src="hiragana/kya/sound-s.png" onclick="playSoundKya()">
    </p>
    <div class="letter_start">

      <img src="hiragana/kya/kya.png" alt="きゃpng">
    </div><br>

    <p style="font-size:50px;">お<span style="color:red;">きゃ</span>くさん

      <audio id="audio1">
        <source src="hiragana/kya/おきゃくさん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/kya/sound-s.png" onclick="playSoundOkyakusan()">
    <p style="font-size:50;">Guest / Customer</p>
    <br><img src="hiragana/kya/sample.png" alt="">
    </p>

    <p style="font-size:50px;"><span style="color:red;">きゃ</span>くしつ
      <audio id="audio2">
        <source src="hiragana/kya/きゃくしつ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/kya/sound-s.png" onclick="playSoundKyakushitsu()">
    <p style="font-size:50;">Guest Room / Passenger Cabin
      <br><img src="hiragana/kya/sample.png" alt="">
    </p>

    <p style="font-size:50px;">へん<span style="color:red;">きゃ</span>く
      <audio id="audio3">
        <source src="hiragana/kya/へんきゃく.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/kya/sound-s.png" onclick="playSoundHenkyaku()">
    <p style="font-size:50;">Return
      <br><img src="hiragana/kya/sample.png" alt="">
    </p>

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/contractedConstruct')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/kyuAlphabet')}}'">NEXT&gt;</button>
</body>

</html>