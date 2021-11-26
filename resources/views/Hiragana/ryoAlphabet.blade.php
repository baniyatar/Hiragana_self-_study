<!DOCTYPE html>
<html>

<head>
  <title>りょPAGE</title>
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
    document.getElementById('audioRyo').pause();
    document.getElementById('audioRyo').currentTime = 0;
  }

  function playSoundRyo() {
    audioStop();
    document.getElementById('audioRyo').play();
  }

  function playSoundRyoushin() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundRyouri() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundRyokou() {
    audioStop();
    document.getElementById('audio3').play();
  }
</script>

<body>
  <div class="box">
    <p style="font-size:50px;"><span style="color:red;">りょ
        <audio id="audioRyo">
          <source src="hiragana/ryo/りょ.mp3" type="audio/mp3">
        </audio>
        <img style="vertical-align:middle;" src="hiragana/ryo/sound-s.png" onclick="playSoundRyo()">
    </p>

    <div class="letter_start">
      <img src="hiragana/ryo/ryo.png" alt="りょpng">
    </div><br>

    <p style="font-size:50px;"><span style="color:red;">りょ</span>うしん Parents
      <audio id="audio1">
        <source src="hiragana/ryo/りょうしん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ryo/sound-s.png" onclick="playSoundRyoushin()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ryo/sample.png" alt="">
      <br>
    </p>

    <p style="font-size:50px;"><span style="color:red;">りょ</span>うり Cooking
      <audio id="audio2">
        <source src="hiragana/ryo/りょうり.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ryo/sound-s.png" onclick="playSoundRyouri()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ryo/sample.png" alt="">
      <br>
    </p>

    <p style="font-size:50px;"><span style="color:red;">りょ</span>こう Trip
      <audio id="audio3">
        <source src="hiragana/ryo/りょこう.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ryo/sound-s.png" onclick="playSoundRyokou()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ryo/sample.png" alt="">
      <br>
    </p>

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/ryuAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/end')}}'">NEXT&gt;</button>
</body>

</html>