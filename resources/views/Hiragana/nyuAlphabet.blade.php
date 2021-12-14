<!DOCTYPE html>
<html>

<head>
  <title>にゅPAGE</title>
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
    document.getElementById('audioNyu').pause();
    document.getElementById('audioNyu').currentTime = 0;
  }

  function playSoundGyunyuu() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundNyuuin() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundNyu() {
    audioStop();
    document.getElementById('audioNyu').play();
  }
</script>

<body>
  <div class="box">
    <p style="font-size: 50px;"><span style="color: red;">にゅ</span>
      <audio id="audioNyu">
        <source src="hiragana/nyu/nyu.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/nyu/sound-s.png" onclick="playSoundNyu()">
    </p>
    <div class="letter_start">
      <img src="hiragana/nyu/nyu.png" alt="にゅpng">
    </div><br>

    <p style="font-size: 50px;">ぎゅう<span style="color: red;">にゅ</span>う　Milk
      <audio id="audio1">
        <source src="hiragana/nyu/ぎゅうにゅう.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/nyu/sound-s.png" onclick="playSoundGyunyuu()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/nyu/sample.png" alt="">
      <br>
    </p>
    <p style="font-size: 50px;"><span style="color: red;">にゅ</span>ういん　Hospitalization
      <audio id="audio2">
        <source src="hiragana/nyu/にゅういん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/nyu/sound-s.png" onclick="playSoundNyuuin()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/nyu/sample.png" alt="">
      <br>
    </p>
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/nyaAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/nyoAlphabet')}}'">NEXT&gt;</button>
</body>

</html>