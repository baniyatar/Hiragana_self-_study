<!DOCTYPE html>
<html>

<head>
  <title>ぽPAGE</title>
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
    // document.getElementById('audio3').pause();
    // document.getElementById('audio3').currentTime = 0;
    document.getElementById('audioPo').pause();
    document.getElementById('audioPo').currentTime = 0;
  }

  // function playSoundkanpouyaku() {
  //   audioStop();
  //   document.getElementById('audio1').play();
  // }

  function playSoundSanpo() {
    audioStop();
    document.getElementById('audio2').play();
  }

  // function playSoundpokapoka() {
  //   audioStop();
  //   document.getElementById('audio3').play();
  // }

  function playSoundPo() {
    audioStop();
    document.getElementById('audioPo').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ぽ

      <audio id="audioPo">
        <source src="hiragana/po/po.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/po/sound-s.png" onclick="playSoundPo()">
    </p>
    <div class="letter_start">

      <img class="testBorder" src="hiragana/po/po.gif" alt="pogif">
    </div><br>
    <div class="letter_start"> <img src="hiragana/po/po.png" alt="popng">
    </div>

    <!-- <p style="font-size: 50px;">かん<span style="color: red;">ぽ</span>うやく　Hebal Medicine
      <audio id="audio1">
        <source src="hiragana/po/かんぽうやく.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/po/sound-s.png" onclick="playSoundkanpouyaku()">
      <br>
      <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/po/sample.png" alt="">
    </p>
    <br> -->

    <p style="font-size: 50px;">さん<span style="color: red;">ぽ</span>　Stroll
      <audio id="audio2">
        <source src="hiragana/po/さんぽ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/po/sound-s.png" onclick="playSoundSanpo()">
      <br>
      <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/po/sample.png" alt="">
    </p>
    <br>

    <!-- <p class="font_word">ぽか<span style="color: red;">ぽ</span>か　Warm
      <audio id="audio3">
        <source src="hiragana/po/ぽかぽか.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/po/sound-s.png" onclick="playSoundpokapoka()">
      <br>
      <img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/po/sample.png" alt="">
    </p>
    <br> -->

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/peAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/contractedIntro')}}'">NEXT&gt;</button>
</body>

</html>