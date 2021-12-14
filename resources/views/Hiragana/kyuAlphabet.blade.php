<!DOCTYPE html>
<html>

<head>
  <title>きゅPAGE</title>
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
    document.getElementById('audioKyu').pause();
    document.getElementById('audioKyu').currentTime = 0;
  }

  function playSoundKyu() {
    audioStop();
    document.getElementById('audioKyu').play();
  }

  function playSoundOkyuukyuusha() {
    audioStop();
    document.getElementById('audio1').play();
  }

  function playSoundYakyuu() {
    audioStop();
    document.getElementById('audio2').play();
  }

  // function playSoundKyuuri() {
  //   audioStop();
  //   document.getElementById('audio3').play();
  // }
</script>

<body>
  <div class="box">
    <p style="font-size:50px;"><span style="color:red;">きゅ
        <audio id="audioKyu">
          <source src="hiragana/kyu/きゅ.mp3" type="audio/mp3">
        </audio>
        <img style="vertical-align:middle;" src="hiragana/kyu/sound-s.png" onclick="playSoundKyu()">
    </p>
    <div class="letter_start">
      <img src="hiragana/kyu/kyu.png" alt="きゅpng">
    </div><br>

    <p style="font-size:50px;"><span style="color:red;">きゅ</span>う<span style="color:red;">きゅ</span>うしゃ　Ambulance
      <audio id="audio1">
        <source src="hiragana/kyu/きゅうきゅうしゃ.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/kyu/sound-s.png" onclick="playSoundOkyuukyuusha()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/kyu/sample.png" alt="">
    <br>
    </p>
    <p style="font-size:50px;">や<span style="color:red;">きゅ</span>う　Baseball
      <audio id="audio2">
        <source src="hiragana/kyu/やきゅう.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/kyu/sound-s.png" onclick="playSoundYakyuu()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/kyu/sample.png" alt="">
      <br>
    </p>
    <!-- <p style="font-size:50px;"><span style="color:red;">きゅ</span>うり　Cucumber
      <audio id="audio3">
        <source src="hiragana/kyu/きゅうり.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/kyu/sound-s.png" onclick="playSoundKyuuri()">
         <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/kyu/sample.png" alt="">
    </p> -->
  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/kyaAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/kyoAlphabet')}}'">NEXT&gt;</button>
</body>

</html>