<!DOCTYPE html>
<html>

<head>
  <title>ぎゅPAGE</title>
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
    // document.getElementById('audio2').pause();
    // document.getElementById('audio2').currentTime = 0;
    document.getElementById('audio3').pause();
    document.getElementById('audio3').currentTime = 0;
    document.getElementById('audioGyu').pause();
    document.getElementById('audioGyu').currentTime = 0;
  }

  function playSoundGyu() {
    audioStop();
    document.getElementById('audioGyu').play();
  }

  // function playSoundGyuuGyuu() {
  //   audioStop();
  //   document.getElementById('audio1').play();
  // }

  // function playSoundGyuuniku() {
  //   audioStop();
  //   document.getElementById('audio2').play();
  // }

  function playSoundGyuunyuu() {
    audioStop();
    document.getElementById('audio3').play();
  }
</script>

<body>
  <div class="box">
    <p class="font_word">ぎ<span style="color: red;">ゅ</span>
      <audio id="audioGyu">
        <source src="hiragana/gyu/ぎゅ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/gyu/sound-s.png" onclick="playSoundGyu()">
    </p>
    <div class="letter_start">
      <img src="hiragana/gyu/ぎゅ.png" alt="ぎゅpng">
    </div><br>

    <!-- <p style="font-size: 50px;"><span style="color: red;">ぎゅ</span>う<span style="color: red;">ぎゅ</span>う　Squeeze
      <audio id="audio1">
        <source src="hiragana/gyu/ぎゅうぎゅう.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/gyu/sound-s.png" onclick="playSoundGyuuGyuu()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/gyu/sample.png" alt="">
      <br>
    </p>
    <p style="font-size: 50px;"><span style="color: red;">ぎゅ</span>うにく　Beef
      <audio id="audio2">
        <source src="hiragana/gyu/ぎゅうにく.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/gyu/sound-s.png" onclick="playSoundGyuuniku()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/gyu/sample.png" alt="">
      <br>
    </p> -->
    <p style="font-size: 50px;"><span style="color: red;">ぎゅ</span>うにゅう　Milk 
      <audio id="audio3">
        <source src="hiragana/gyu/ぎゅうにゅう.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/gyu/sound-s.png" onclick="playSoundGyuunyuu()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/gyu/sample.png" alt="">
      <br>
    </p>
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/gyaAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/gyoAlphabet')}}'">NEXT&gt;</button>
</body>

</html>