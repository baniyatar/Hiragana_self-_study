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
	<div class="box"> <ruby><rb></rb><rt></rt></ruby>
		<div style="font-weight:bold">Let's study voiced sound</div>
		<br>
		<p>「が」「ぎ」などの<ruby><rb>濁音</rb><rt>だくおん</rt></ruby>、「ぱ」「ぴ」などの<ruby><rb>半濁音</rb><rt>はんだくおん</rt></ruby>を<ruby><rb>勉強</rb><rt>べんきょう</rt></ruby>しましょう。</p>
		<p>Let's study voiced sounds が、ぎ and so on, voiceless sounds ぱ、ぴ and so on.
		<br>
		<p>「が」や「ぎ」などの<ruby><rb>書</rb><rt>か</rt></ruby>き<ruby><rb>方</rb><rt>かた</rt></ruby>は、すでに<ruby><rb>勉強</rb><rt>べんきょう</rt></ruby>をした「か」や「き」と<ruby><rb>同</rb><rt>おな</rt></ruby>じで、「か」や「き」の<ruby><rb>右上</rb><rt>みぎうえ</rt></ruby>に<ruby><rb>小</rb><rt>ちい</rt></ruby>さな<ruby><rb>点</rb><rt>てん</rt></ruby>をふたつ<ruby><rb>付</rb><rt>つ</rt></ruby>けるだけです。また「ぱ」や「ぴ」などは、「は」や「ひ」の<ruby><rb>右上</rb><rt>みぎうえ</rt></ruby>に<ruby><rb>小</rb><rt>ちい</rt></ruby>さな〇を<ruby><rb>付</rb><rt>つ</rt></ruby>けます。</p>
		<p>Order of writing が、ぎ and so on are the same order of writing as か、き and so on, but put small two dots on top right. Order of writing ぱ、ぴ and so on are the same order of writing as は、ひ and so on, but put a small circle on top right.</p>
	</div>
	<button class="home_btn" onclick="location.href='{{ url('/home')}}'">HOME</button>
	<button class="prev_btn" onclick="location.href='{{ url('/nAlphabet')}}'">&lt;PREV</button>
	<button class="next_btn" onClick="location.href='{{ url('/voicedConstruct')}}'">NEXT&gt;</button>
</body>
</html>
