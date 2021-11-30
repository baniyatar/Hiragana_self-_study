<!DOCTYPE html>
<html>
 <head>
  <title>拗音表</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    </head>
<body>
	<div class="box">
		<div style="font-weight:bold; font-size: 50px; text-align: center;">Contracted Sound</div>
    <br><br><br>
<!--
    <img src="/hiragana/image/拗音表.bmp" width="90%"/>
-->
<table border="1" style="font-size: 7vw; font-family: serif; border: 1px; margin:auto">
      <tbody>
        <tr>
          <td><a href="{{ url('/ryaAlphabet')}}">
              <div style="height:100%;width:100%">りゃ</div>
            </a></td>
          <td><a href="{{ url('/pyaAlphabet')}}">
              <div style="height:100%;width:100%">ぴゃ</div>
            </a></td>
          <td><a href="{{ url('/hyaAlphabet')}}">
              <div style="height:100%;width:100%">ひゃ</td>
          <td><a href="{{ url('/chaAlphabet')}}">
              <div style="height:100%;width:100%">ちゃ</div>
            </a></td>
          <td><a href="{{ url('/shaAlphabet')}}">
              <div style="height:100%;width:100%">しゃ</div>
            </a></td>
          <td><a href="{{ url('/kyaAlphabet')}}">
              <div style="height:100%;width:100%">きゃ</div>
            </a></td>
        </tr>
        <tr>
          <td><a href="{{ url('/ryuAlphabet')}}">
              <div style="height:100%;width:100%">りゅ</div>
            </a></td>
          <td><a href="{{ url('/pyuAlphabet')}}">
              <div style="height:100%;width:100%">ぴゅ</div>
            </a></td>
          <td><a href="{{ url('/hyuAlphabet')}}">
              <div style="height:100%;width:100%">ひゅ</td>
          <td><a href="{{ url('/chuAlphabet')}}">
              <div style="height:100%;width:100%">ちゅ</div>
            </a></td>
          <td><a href="{{ url('/shuAlphabet')}}">
              <div style="height:100%;width:100%">しゅ</div>
            </a></td>
          <td><a href="{{ url('/kyuAlphabet')}}">
              <div style="height:100%;width:100%">きゅ</div>
            </a></td>
        </tr>
        <tr>
          <td><a href="{{ url('/ryoAlphabet')}}">
              <div style="height:100%;width:100%">りょ</div>
            </a></td>
          <td><a href="{{ url('/pyoAlphabet')}}">
              <div style="height:100%;width:100%">ぴょ</div>
            </a></td>
          <td><a href="{{ url('/hyoAlphabet')}}">
              <div style="height:100%;width:100%">ひょ</td>
          <td><a href="{{ url('/choAlphabet')}}">
              <div style="height:100%;width:100%">ちょ</div>
            </a></td>
          <td><a href="{{ url('/shoAlphabet')}}">
              <div style="height:100%;width:100%">しょ</div>
            </a></td>
          <td><a href="{{ url('/kyoAlphabet')}}">
              <div style="height:100%;width:100%">きょ</div>
            </a></td>
        </tr>
        <tr>
          <td></td>
          <td><a href="{{ url('/myaAlphabet')}}">
              <div style="height:100%;width:100%">みゃ</div>
            </a></td>
          <td><a href="{{ url('/byaAlphabet')}}">
              <div style="height:100%;width:100%">びゃ</td>
          <td><a href="{{ url('/nyaAlphabet')}}">
              <div style="height:100%;width:100%">にゃ</td>
          <td><a href="{{ url('/jaAlphabet')}}">
              <div style="height:100%;width:100%">じゃ</div>
            </a></td>
          <td><a href="{{ url('/gyaAlphabet')}}">
              <div style="height:100%;width:100%">ぎゃ</div>
            </a></td>
        </tr>
        <tr>
          <td></td>
          <td><a href="{{ url('/myuAlphabet')}}">
              <div style="height:100%;width:100%">みゅ</div>
            </a></td>
          <td><a href="{{ url('/byuAlphabet')}}">
              <div style="height:100%;width:100%">びゅ</td>
          <td><a href="{{ url('/nyuAlphabet')}}">
              <div style="height:100%;width:100%">にゅ</td>
          <td><a href="{{ url('/juAlphabet')}}">
              <div style="height:100%;width:100%">じゅ</div>
            </a></td>
          <td><a href="{{ url('/gyuAlphabet')}}">
              <div style="height:100%;width:100%">ぎゅ</div>
            </a></td>
        </tr>

        <tr>
          <td></td>
          <td><a href="{{ url('/myoAlphabet')}}">
              <div style="height:100%;width:100%">みょ</div>
            </a></td>
          <td><a href="{{ url('/byoAlphabet')}}">
              <div style="height:100%;width:100%">びょ</td>
          <td><a href="{{ url('/nyoAlphabet')}}">
              <div style="height:100%;width:100%">にょ</td>
          <td><a href="{{ url('/joAlphabet')}}">
              <div style="height:100%;width:100%">じょ</div>
            </a></td>
          <td><a href="{{ url('/gyoAlphabet')}}">
              <div style="height:100%;width:100%">ぎょ</div>
            </a></td>
        </tr>
      </tbody>
    </table>

	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/contractedIntro')}}'">&lt;PREV</button>
	<button class="next_btn" onclick="location.href='{{ url('/kyaAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
