<!DOCTYPE html>
<html>
 <head>
  <title>Contracted Sound</title>
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
		<div style="font-weight:bold">Let's study contracted sound</div>
		<br>
		<p>「きゃ」「きゅ」「きょ」などの<ruby><rb>拗音</rb><rt>ようおん</rt></ruby>を<ruby><rb>勉強</rb><rt>べんきょう</rt></ruby>しましょう。</p>
		<p>Let's study contracted sounds きゃ、きゅ、きょ and so on.
		<br>
		<p>「きゃ」や「きゅ」や「きょ」などの「や」「ゆ」「よ」は<ruby><rb>小</rb><rt>ちい</rt></ruby>さく<ruby><rb>書</rb><rt>か</rt></ruby>きます。</p>
		<p>や、ゆ、よ in きゃ、きゅ、きょ and so on are wrote in small.</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/poAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/contractedConstruct')}}'">NEXT&gt;</button>
</body>
</html>
