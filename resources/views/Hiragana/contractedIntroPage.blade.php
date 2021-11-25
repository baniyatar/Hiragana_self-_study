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
	<div style="font-weight:bold"><ruby><rb>拗音</rb><rt>ようおん</rt></ruby></div>
		<div style="font-weight:bold">Contracted sound</div>
		<br>
		<p>　ここでは「きゃ(Kya)」「きゅ(Kyu)」「きょ(Kyo)」などの<ruby><rb>拗音</rb><rt>ようおん</rt></ruby>を<ruby><rb>勉強</rb><rt>べんきょう</rt></ruby>しましょう。</p>
		<p>　Let's study contracted sounds such as “きゃ(Kya)”、 “きゅ(Kyu)”、 “きょ(Kyo)”.</p>
		<br>
		<p>　「きゃ(Kya)」「きゅ(Kyu)」「きょ(Kyo)」などの<ruby><rb>拗音</rb><rt>ようおん</rt></ruby>は「き(Ki)」はふつうの<ruby><rb>大</rb><rt>おお</rt></ruby>きさですが、つぎの「ゃ(ya)」「ゅ(yu)」「ょ(yo)」は<ruby><rb>小</rb><rt>ちい</rt></ruby>さく<ruby><rb>書</rb><rt>か</rt></ruby>きます。</p>
		<p>　In Contracted sounds such as “きゃ(Kya)”,  “きゅ(Kyu)”, and “きょ(Kyo)”, “き(Ki)” in “きゃ(Kya)”,  “きゅ(Kyu)”, and “きょ(Kyo)” is written in normal size, but the following “ゃ(ya)”, “ゅ(yu)”, and “ょ(yo)” are written in small size.</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/poAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/contractedConstruct')}}'">NEXT&gt;</button>
</body>
</html>
