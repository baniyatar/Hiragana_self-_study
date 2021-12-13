<!DOCTYPE html>
<html>

<head>
  <title>がPAGE</title>
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
    document.getElementById('audio2').pause();
    document.getElementById('audio2').currentTime = 0;
    document.getElementById('audio3').pause();
    document.getElementById('audio3').currentTime = 0;
    document.getElementById('audioGa').pause();
    document.getElementById('audioGa').currentTime = 0;
  }

  // function playSoundgaigoku() {
  //   audioStop();
  //   document.getElementById('audio1').play();
  // }

  function playSoundEiga() {
    audioStop();
    document.getElementById('audio2').play();
  }

  function playSoundGakkou() {
    audioStop();
    document.getElementById('audio3').play();
  }

  function playSoundGa() {
    audioStop();
    document.getElementById('audioGa').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">が

      <audio id="audioGa">
        <source src="hiragana/ga/ga.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ga/sound-s.png" onclick="playSoundGa()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/ga/ga.gif" alt="gagif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/ga/ga.png" alt="gapng">
    </div>

    <!-- <p class="font_word">がいこく　Foreign Countries

      <audio id="audio1">
        <source src="hiragana/ga/がいこく.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ga/sound-s.png" onclick="playSoundgaigoku()">
    <br>
    <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ga/sample.png" alt="">
    </p>
    <br> -->

    <p style="font-size: 50px;">えい<span style="color: red;">が</span>　Movie
      <audio id="audio2">
        <source src="hiragana/ga/えいが.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ga/sound-s.png" onclick="playSoundEiga()">
    <br>
    <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ga/sample.png" alt="">
    </p>
    <br>

    <p class="font_word">がっこう　School
      <audio id="audio3">
        <source src="hiragana/ga/がっこう.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/ga/sound-s.png" onclick="playSoundGakkou()">
    <br>
    <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/ga/sample.png" alt="">
    </p>
    <br>

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/voicedConstruct')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/giAlphabet')}}'">NEXT&gt;</button>
</body>

</html>