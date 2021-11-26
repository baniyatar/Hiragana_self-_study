<!DOCTYPE html>
<html>

<head>
  <title>みゃPAGE</title>
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
    document.getElementById('audioMya').pause();
    document.getElementById('audioMya').currentTime = 0;
  }
  function playSoundMya() {
    audioStop();
    document.getElementById('audioMya').play();
  }

  function playSoundSanmyaku() {
    audioStop();
    document.getElementById('audio1').play();
  }
</script>

<body>
  <div class="box">
    <p style="font-size:50px;"><span style="color:red;">みゃ
        <audio id="audioMya">
          <source src="hiragana/mya/みゃ.mp3" type="audio/mp3">
        </audio>
        <img style="vertical-align:middle;" src="hiragana/mya/sound-s.png" onclick="playSoundMya()">
    </p>

    <div class="letter_start">
      <img src="hiragana/mya/mya.png" alt="みゃpng">
    </div><br>

    <p style="font-size:50px;">さん<span style="color:red;">みゃ</span>く Mountain belt / Mountain Range
      <audio id="audio1">
        <source src="hiragana/Mya/さんみゃく.mp3" type="audio/mp3">
      </audio>
      <img style="vertical-align:middle;" src="hiragana/mya/sound-s.png" onclick="playSoundSanmyaku()">
      <br><img style="display: block; margin: auto;" border=1 width="70%" src="hiragana/mya/sample.png" alt="">
      <br>
    </p>

  </div>
  <button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
  <button class="prev_btn" onclick="location.href='{{ url('/pyoAlphabet')}}'">&lt;PREV</button>
  <button class="next_btn" onClick="location.href='{{ url('/myuAlphabet')}}'">NEXT&gt;</button>
</body>

</html>