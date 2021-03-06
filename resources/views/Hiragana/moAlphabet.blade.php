<!DOCTYPE html>
<html>

<head>
  <title>むPAGE</title>
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
    document.getElementById('audioMo').pause();
    document.getElementById('audioMo').currentTime = 0;
  }

  function playSoundKudamono() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundMon() {
    audioStop();
    document.getElementById('audio2').play();
  }

  // function playSoundmoshimoshi() {
  //   audioStop();
  //   document.getElementById('audio3').play();
  // }

  function playSoundMo() {
    audioStop();
    document.getElementById('audioMo').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">も
      <audio id="audioMo">
        <source src="hiragana/mo/も.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/mo/sound-s.png" onclick="playSoundMo()">
    </p>
    <div class="letter_start">
      <img class="testBorder" src="hiragana/mo/mo.gif" alt="mogif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/mo/も-bw.png" style="width: 80%;" alt="もpng">
    </div>

    <p style="font-size: 50px;">くだ<span style="color: red;">も</span>の　Fruit
      <audio id="audio1">
        <source src="hiragana/mo/くだもの.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/mo/sound-s.png" onclick="playSoundKudamono()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/mo/sample.png" alt="">
    </p>
    <br>
    <p class="font_word">もん　Gate
      <audio id="audio2">
        <source src="hiragana/mo/もん.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/mo/sound-s.png" onclick="playSoundMon()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/mo/sample.png" alt="">
    </p>
    <!-- <br>
    <p class="font_word">もし<span style="color: red;">も</span>し　Hello
      <audio id="audio3">
        <source src="hiragana/mo/もしもし.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/mo/sound-s.png" onclick="playSoundmoshimoshi()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/mo/sample.png" alt="">
    </p> -->
  </div>

  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/meAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/yaAlphabet')}}'">NEXT&gt;</button>
</body>

</html>