<!DOCTYPE html>
<html>
 <head>
  <title>濁音半濁音表</title>
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
		<div style="font-weight:bold; font-size: 50px; text-align: center;">Voiced Sound</div>
    <br><br><br>
<!--
    <img src="/hiragana/image/濁音半濁音表.png" width="90%"/>
-->
    <table border="1" style="font-size: 12vw; font-family: serif; border: 1px; margin:auto">
      <tbody>
        <tr>
          <td><a href="{{ url('/paAlphabet')}}">
              <div style="height:100%;width:100%">ぱ</div>
            </a></td>
          <td><a href="{{ url('/baAlphabet')}}">
              <div style="height:100%;width:100%"> ば</div>
            </a></td>
          <td><a href="{{ url('/daAlphabet')}}">
              <div style="height:100%;width:100%"> だ</div>
            </a></td>
          <td><a href="{{ url('/zaAlphabet')}}">
              <div style="height:100%;width:100%"> ざ</div>
            </a></td>
          <td><a href="{{ url('/gaAlphabet')}}">
              <div style="height:100%;width:100%"> が</div>
            </a></td>
        </tr>
        <tr>
          <td><a href="{{ url('/piAlphabet')}}">
              <div style="height:100%;width:100%">ぴ</div>
            </a></td>
          <td><a href="{{ url('/biAlphabet')}}">
              <div style="height:100%;width:100%"> び</div>
            </a></td>
          <td><a href="{{ url('/diAlphabet')}}">
              <div style="height:100%;width:100%"> ぢ</div>
            </a></td>
          <td><a href="{{ url('/jiAlphabet')}}">
              <div style="height:100%;width:100%"> じ</div>
            </a></td>
          <td><a href="{{ url('/giAlphabet')}}">
              <div style="height:100%;width:100%"> ぎ</div>
            </a></td>
        </tr>
        <tr>
          <td><a href="{{ url('/puAlphabet')}}">
              <div style="height:100%;width:100%">ぷ</div>
            </a></td>
          <td><a href="{{ url('/buAlphabet')}}">
              <div style="height:100%;width:100%"> ぶ</div>
            </a></td>
          <td><a href="{{ url('/duAlphabet')}}">
              <div style="height:100%;width:100%"> づ</div>
            </a></td>
          <td><a href="{{ url('/zuAlphabet')}}">
              <div style="height:100%;width:100%"> ず</div>
            </a></td>
          <td><a href="{{ url('/guAlphabet')}}">
              <div style="height:100%;width:100%"> ぐ</div>
            </a></td>

        </tr>

        <tr>
          <td><a href="{{ url('/peAlphabet')}}">
              <div style="height:100%;width:100%">ぺ</div>
            </a></td>
          <td><a href="{{ url('/beAlphabet')}}">
              <div style="height:100%;width:100%"> べ</div>
            </a></td>
          <td><a href="{{ url('/deAlphabet')}}">
              <div style="height:100%;width:100%"> で</div>
            </a></td>
          <td><a href="{{ url('/zeAlphabet')}}">
              <div style="height:100%;width:100%"> ぜ</div>
            </a></td>
          <td><a href="{{ url('/geAlphabet')}}">
              <div style="height:100%;width:100%">げ</div>
            </a></td>
        </tr>
        <tr>
          <td><a href="{{ url('/poAlphabet')}}">
              <div style="height:100%;width:100%"> ぽ</div>
            </a></td>
          <td><a href="{{ url('/boAlphabet')}}">
              <div style="height:100%;width:100%"> ぼ</div>
            </a></td>
          <td><a href="{{ url('/doAlphabet')}}">
              <div style="height:100%;width:100%"> ど</div>
            </a></td>
          <td><a href="{{ url('/zoAlphabet')}}">
              <div style="height:100%;width:100%"> ぞ</div>
            </a></td>
          <td><a href="{{ url('/goAlphabet')}}">
              <div style="height:100%;width:100%"> ご</div>
            </a></td>
        </tr>
      </tbody>
    </table>

	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/voicedIntro')}}'">&lt;PREV</button>
	<button class="next_btn" onclick="location.href='{{ url('/gaAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
