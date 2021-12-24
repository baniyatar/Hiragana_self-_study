<!DOCTYPE html>
<html>
 <head>
  <title>Voiced Sound</title>
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
		<div style="font-weight:bold; text-align: center; font-size: 50px;"><ruby><rb>濁音</rb><rt>だくおん</rt></ruby>、<ruby><rb>半濁音</rb><rt>はんだくおん</rt></ruby></div>
		<div style="font-weight:bold; text-align: center; font-size: 40px;">Dakuon (voiced sound) and Handakuon (half-voiced sound)</div>
		<br>
		<p>　「が(Ga)」「ぎ(Gi)」などの<ruby><rb>濁音</rb><rt>だくおん</rt></ruby>、「ぱ(Pa)」「ぴ(Pi)」などの<ruby><rb>半濁音</rb><rt>はんだくおん</rt></ruby>を<ruby><rb>勉強</rb><rt>べんきょう</rt></ruby>しましょう。</p>
		<p>　Let's study the Dakuon (voiced sound) such as 「が(Ga)」,「ぎ(Gi)」, and the Handakuon (half-voiced sound) such as 「ぱ(Pa)」,「ぴ(Pi)」.</p>
		<br>
		<p>　「が(Ga)」や「ぎ(Gi)」などの<ruby><rb>書</rb><rt>か</rt></ruby>き<ruby><rb>方</rb><rt>かた</rt></ruby>は、すでに<ruby><rb>勉強</rb><rt>べんきょう</rt></ruby>をした「か(Ka)」や「き(Ki)」と<ruby><rb>同</rb><rt>おな</rt></ruby>じで、「か」や「き」の<ruby><rb>右上</rb><rt>みぎうえ</rt></ruby>に<ruby><rb>小</rb><rt>ちい</rt></ruby>さな<ruby><rb>点</rb><rt>てん</rt></ruby>を<ruby><rb>２</rb><rt>ふた</rt></ruby>つ<ruby><rb>付</rb><rt>つ</rt></ruby>けるだけです。また「ぱ(Pa)」や「ぴ(Pi)」などは、「は(Ha)」や「ひ(Hi)」の<ruby><rb>右上</rb><rt>みぎうえ</rt></ruby>に<ruby><rb>小</rb><rt>ちい</rt></ruby>さな<ruby><rb>〇</rb><rt>まる</rt></ruby>を<ruby><rb>付</rb><rt>つ</rt></ruby>けます。</p>
		<p>　"が(Ga)" and "ぎ(Gi)" are written similarly as "か(Ka)" and "き(Ki)", which two additional small dots in the upper right corner. For "ぱ(Pa)" and "ぴ(Pi)", put a small circle in the upper right corner of "は(Ha)" and "ひ(Hi)".</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/nAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/voicedConstruct')}}'">NEXT&gt;</button>
</body>
</html>
