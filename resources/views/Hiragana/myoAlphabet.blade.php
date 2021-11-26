<!DOCTYPE html>
<html>

<head>
  <title>みょPAGE</title>
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
    document.getElementById('audioMyo').pause();
    document.getElementById('audioMyo').currentTime = 0;
  }

  function playSoundMyo() {
    audioStop();
    document.getElementById('audioMyo').play();
  }

  function playSoundMyouji() {
    audioStop();
    document.getElementById('audio1').play();
  }
</script>

<body>
  <div class="box">
    <p style="font-size:50px;"><span style="color:red;">みょ
        <audio id="audioMyo">
          <source src="hiragana/myo/みょ.mp3" type="audio/mp3">
        </audio>
        <img style="vertical-align:middle;" src="hiragana/myo/sound-s.png" onclick="playSoundMyo()">
    </p>

    <div class="letter_start">
      <img src="hiragana/myo/myo.png" alt="みょpng">
    </div><br>

    <p style="font-size:50px;"><span style="color:red;">みょ</span>うじ Last name
      <audio id="audio1">
        <source src="hiragana/Myo/みょうじ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/myo/sound-s.png" onclick="playSoundMyouji()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/myo/sample.png" alt="">
      <br>
    </p>

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/myuAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/ryaAlphabet')}}'">NEXT&gt;</button>
</body>

</html>