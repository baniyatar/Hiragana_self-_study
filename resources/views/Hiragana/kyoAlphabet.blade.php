<!DOCTYPE html>
<html>

<head>
  <title>きょPAGE</title>
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
    // document.getElementById('audio3').pause();
    // document.getElementById('audio3').currentTime = 0;
    document.getElementById('audioKyo').pause();
    document.getElementById('audioKyo').currentTime = 0;
  }
  function playSoundKyo() {
    audioStop();
    document.getElementById('audioKyo').play();
  }

  function playSoundYuubinkyoku() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundKyoushitsu() {
    audioStop();
    document.getElementById('audio2').play();
  }

  // function playSoundKyoudai() {
  //   audioStop();
  //   document.getElementById('audio3').play();
  // }
</script>

<body>
  <div class="box">
    <p style="font-size:50px;"><span style="color:red;">きょ</span>
      <audio id="audioKyo">
        <source src="hiragana/kyo/きょ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/kyo/sound-s.png" onclick="playSoundKyo()">
    </p>
    <div class="letter_start">
      <img src="hiragana/kyo/kyo.png" alt="きょpng">
    </div><br>

    <p style="font-size:50px;">ゆうびん<span style="color:red;">きょ</span>く　Post office
      <audio id="audio1">
        <source src="hiragana/kyo/ゆうびんきょく.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/kyo/sound-s.png" onclick="playSoundYuubinkyoku()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/kyo/sample.png" alt="">
    </p>
    <br>
    <p style="font-size:50px;"><span style="color:red;">きょ</span>うしつ　Classroom
      <audio id="audio2">
        <source src="hiragana/kyo/きょうしつ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/kyo/sound-s.png" onclick="playSoundKyoushitsu()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/kyo/sample.png" alt="">
    </p>
    <!-- <br>
    <p style="font-size:50px;"><span style="color:red;">きょ</span>うだい　Siblings / Sister and Brother
      <audio id="audio3">
        <source src="hiragana/kyo/きょうだい.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/kyo/sound-s.png" onclick="playSoundKyoudai()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/kyo/sample.png" alt="">
    </p> -->

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/kyuAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/gyaAlphabet')}}'">NEXT&gt;</button>
</body>

</html>