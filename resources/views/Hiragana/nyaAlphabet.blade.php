<!DOCTYPE html>
<html>

<head>
  <title>にゃPAGE</title>
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
    // document.getElementById('audio1').pause();
    // document.getElementById('audio1').currentTime = 0;
    document.getElementById('audioNya').pause();
    document.getElementById('audioNya').currentTime = 0;
  }
  // function playSoundNyanya() {
  //   audioStop();
  //   document.getElementById('audio1').play();
  // }

  function playSoundNya() {
    audioStop();
    document.getElementById('audioNya').play();
  }
</script>

<body>
  <div class="box">
    <p style="font-size: 50px;"><span style="color: red;">にゃ</span>
      <audio id="audioNya">
        <source src="hiragana/nya/にゃ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/mi/sound-s.png" onclick="playSoundNya()">
    </p>
    <div class="letter_start">
      <img src="hiragana/nya/nya.png" alt="にゃpng">
    </div><br>

    <!-- <p style="font-size: 50px;"><span style="color: red;">にゃ</span>あ<span style="color: red;">にゃ</span>あ　Cat's Meow
      <audio id="audio1">
        <source src="hiragana/nya/にゃあにゃあ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/nya/sound-s.png" onclick="playSoundNyanya()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/nya/sample.png" alt="">
      <br>
    </p> -->

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/choAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/nyuAlphabet')}}'">NEXT&gt;</button>
</body>

</html>