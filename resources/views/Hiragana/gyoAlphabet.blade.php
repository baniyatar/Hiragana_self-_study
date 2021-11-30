<!DOCTYPE html>
<html>

<head>
  <title>ぎょPAGE</title>
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
    document.getElementById('audioGyo').pause();
    document.getElementById('audioGyo').currentTime = 0;
  }

  function playSoundGyo() {
    audioStop();
    document.getElementById('audioGyo').play();
  }

  function playSoundKingyo() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundGyouza() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundJugyou() {
    audioStop();
    document.getElementById('audio3').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ぎ<span style="color: red;">ょ</span>
      <audio id="audioGyo">
        <source src="hiragana/gyo/ぎょ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/yo/sound-s.png" onclick="playSoundGyo()">
    </p>
    <div class="letter_start">
      <img src="hiragana/gyo/ぎょ.png" alt="ぎょpng">
    </div><br>
    <p style="font-size: 50px;">きん<span style="color: red;">ぎょ</span>　Goldfish
      <audio id="audio1">
        <source src="hiragana/gyo/きんぎょ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/gyo/sound-s.png" onclick="playSoundKingyo()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/gyo/sample.png" alt="">
      <br>
    </p>
    <p style="font-size: 50px;"><span style="color: red;">ぎょ</span>うざ　Dumplings
      <audio id="audio2">
        <source src="hiragana/gyo/ぎょうざ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/gyo/sound-s.png" onclick="playSoundGyouza()"> 
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/gyo/sample.png" alt="">
      <br>
    </p>
    <p style="font-size: 50px;">じゅ<span style="color: red;">ぎょ</span>う　Lesson
      <audio id="audio3">
        <source src="hiragana/gyo/じゅぎょう.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/gyo/sound-s.png" onclick="playSoundJugyou()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/gyo/sample.png" alt="">
      <br>
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/gyuAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/shaAlphabet')}}'">NEXT&gt;</button>
</body>

</html>