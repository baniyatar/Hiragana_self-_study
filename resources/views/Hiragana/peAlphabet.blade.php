<!DOCTYPE html>
<html>

<head>
  <title>ぺPAGE</title>
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
    // document.getElementById('audio2').pause();
    // document.getElementById('audio2').currentTime = 0;
    document.getElementById('audioPe').pause();
    document.getElementById('audioPe').currentTime = 0;
  }

  function playSoundHoppeta() {
    audioStop();
    document.getElementById('audio1').play();
  }

  // function playSoundperapera() {
  //   audioStop();
  //   document.getElementById('audio2').play();
  // }

  function playSoundPe() {
    audioStop();
    document.getElementById('audioPe').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ぺ

      <audio id="audioPe">
        <source src="hiragana/pe/ぺ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/pe/sound-s.png" onclick="playSoundPe()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/pe/pe.gif" alt="pegif">
    </div><br>

    <div class="letter_start"> <img src="hiragana/pe/pe.png" style="width: 70%;" alt="pepng">
    </div>

    <p style="font-size: 50px;">ほっ<span style="color: red;">ぺ</span>た　Cheeks
      <audio id="audio1">
        <source src="hiragana/pe/ほっぺた.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/pe/sound-s.png" onclick="playSoundHoppeta()">
      <br>
      <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/pe/sample.png" alt="">
    </p>
    <br>

    <!-- <p class="font_word">ぺら<span style="color: red;">ぺ</span>ら　Fluently
      <audio id="audio2">
        <source src="hiragana/pe/ぺらぺら.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/pe/sound-s.png" onclick="playSoundperapera()">
      <br>
      <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/pe/sample.png" alt="">
    </p>
    <br> -->

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/puAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/poAlphabet')}}'">NEXT&gt;</button>
</body>

</html>