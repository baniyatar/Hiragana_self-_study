<!DOCTYPE html>
<html>

<head>
  <title>りゅPAGE</title>
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
    document.getElementById('audioRyu').pause();
    document.getElementById('audioRyu').currentTime = 0;
  }

  function playSoundRyu() {
    audioStop();
    document.getElementById('audioRyu').play();
  }

  function playSoundKairyuu() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundKouryuu() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundRyuugakusei() {
    audioStop();
    document.getElementById('audio3').play();
  }
</script>

<body>
  <div class="box">
    <p style="font-size:50px;"><span style="color:red;">りゅ
        <audio id="audioRyu">
          <source src="hiragana/ryu/りゅ.mp3" type="audio/mp3">
        </audio>
        <img style="vertical-align:middle;" src="hiragana/ryu/sound-s.png" onclick="playSoundRyu()">
    </p>

    <div class="letter_start">
      <img src="hiragana/ryu/ryu.png" alt="りゅpng">
    </div><br>

    <p style="font-size:50px;">かい<span style="color:red;">りゅ</span>う
      <audio id="audio1">
        <source src="hiragana/ryu/かいりゅう.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ryu/sound-s.png" onclick="playSoundKairyuu()">
    <p style="font-size:50;">Ocean Current</p>
    <br><img src="hiragana/ryu/sample.png" alt="">
    </p>

    <p style="font-size:50px;">こう<span style="color:red;">りゅ</span>う
      <audio id="audio2">
        <source src="hiragana/ryu/こうりゅう.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ryu/sound-s.png" onclick="playSoundKouryuu()">
    <p style="font-size:50;">Exchange</p>
    <br><img src="hiragana/ryu/sample.png" alt="">
    </p>

    <p style="font-size:50px;"><span style="color:red;">りゅ</span>うがくせい
      <audio id="audio3">
        <source src="hiragana/ryu/りゅうがくせい.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ryu/sound-s.png" onclick="playSoundRyuugakusei()">
    <p style="font-size:50;">Exchange student</p>
    <br><img src="hiragana/ryu/sample.png" alt="">
    </p>

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/ryaAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/ryoAlphabet')}}'">NEXT&gt;</button>
</body>

</html>