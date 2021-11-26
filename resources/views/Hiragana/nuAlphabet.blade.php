<!DOCTYPE html>
<html>

<head>
  <title>ぬPAGE</title>
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
    document.getElementById('audioNu').pause();
    document.getElementById('audioNu').currentTime = 0;
  }

  function playSoundNu() {
    audioStop();
    document.getElementById('audioNu').play();
  }

  function playSoundInu() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundNusumi() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundNuno() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSoundNurui() {
    audioStop();
    document.getElementById('audio4').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ぬ

      <audio id="audioNu">
        <source src="hiragana/nu/ぬ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/nu/sound-s.png" onclick="playSoundNu()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/nu/nu.gif" alt="ぬgif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/nu/ぬ.png" style="width: 70%;" alt="ぬpng">
    </div>

    <p style="font-size: 50px;">い<span style="color: red;">ぬ</span>　Dog
      <audio id="audio1">
        <source src="hiragana/nu/いぬ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/nu/sound-s.png" onclick="playSoundInu()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/nu/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">ぬすみ　Thievery
      <audio id="audio2">
        <source src="hiragana/nu/ぬすみ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/nu/sound-s.png" onclick="playSoundNusumi()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/nu/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">ぬの　Cloth
      <audio id="audio3">
        <source src="hiragana/nu/ぬの.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/nu/sound-s.png" onclick="playSoundNuno()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/nu/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">ぬるい　Lukewarm
      <audio id="audio4">
        <source src="hiragana/nu/ぬるい.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/nu/sound-s.png" onclick="playSoundNurui()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/nu/sample.png" alt="">
    </p>
  </div>

  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/niAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/neAlphabet')}}'">NEXT&gt;</button>
</body>

</html>