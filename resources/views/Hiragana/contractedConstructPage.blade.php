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
    <br>
    <img src="/hiragana/image/拗音表.bmp" width="90%"/>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/contractedIntro')}}'">&lt;PREV</button>
	<button class="next_btn" onclick="location.href='{{ url('/kyaAlphabet')}}'">NEXT&gt;</button>
</body>
</html>
