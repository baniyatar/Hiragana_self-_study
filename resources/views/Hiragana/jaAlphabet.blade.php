<!DOCTYPE html>
<html>

<head>
  <title>じゃPAGE</title>
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

  function playSound0() {
    audioStop();
    document.getElementById('audio0').play();
  }
</script>

<body>
  <div class="box">
    <p style="font-size: 50px;"><span style="color: red;">じゃ</span>

      <audio id="audio0">
        <source src="hiragana/ja/じゃ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ja/sound-s.png" onclick="playSound0()">
    </p>
    <div class="letter_start">

      <img src="hiragana/ja/じゃ.png" alt="じゃpng">
    </div><br>

    <p style="font-size: 50px;">かん<span style="color: red;">じゃ</span> Patient

      <audio id="audio1">
        <source src="hiragana/ja/かんじゃ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ja/sound-s.png" onclick="playSound1()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ja/sample.png" alt="">
      <br>
    </p>
    <p style="font-size: 50px;"><span style="color: red;">じゃ</span>がいも Potato

      <audio id="audio2">
        <source src="hiragana/ja/じゃがいも.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ja/sound-s.png" onclick="playSound2()"> 
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ja/sample.png" alt="">
      <br>
    </p>

    <p style="font-size: 50px;">じん<span style="color: red;">じゃ</span> Shrine

      <audio id="audio3">
        <source src="hiragana/ja/じんじゃ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ja/sound-s.png" onclick="playSound3()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ja/sample.png" alt="">
      <br>
    </p>

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/shoAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/juAlphabet')}}'">NEXT&gt;</button>
</body>

</html>