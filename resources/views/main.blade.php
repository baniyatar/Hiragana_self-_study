<!DOCTYPE html>
<html>
 <head>
  <title>ひらがなの勉強</title>
    <meta charset="utf-8"> 
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
    <style>
		body {
			background-image: url("hiragana/cherry-blossom_00026.jpg");
			background-repeat: no-repeat;
		}
		.btn-square {
			display: inline-block;
			/*padding: 0.5em 1em;*/
			text-decoration: none;
			background: #668ad8;/*ボタン色*/
			color: #FFF;
			border-bottom: solid 4px #627295;
			border-radius: 3px;
			width: 150px;
			height: 50px;
			font-size: 30px;
		}
	</style>
  </head>
	<body>
	<div style="text-align: center">
		<img src="hiragana/ひらがな.png" alt="ロゴ" width="90%" align="center" >
	</div>
	<div style="text-align: center;">
		<div style="display:inline-block; border: 1px solid; background-color: #FFFFFF; width:90%; height:300px; text-align: left;">
			<label style="font-size: 50px">
				　<ruby>初<rp></rp><rt>はじ</rt><rp></rp>めてですか？</ruby><br>
				　Are you using for first time?
			</label>
			<br><br><br>
			<div style="text-align: center;">
				<button type="button" class="btn-square" onclick="window.location='{{ url("registration")}}'">Yes</button>　　　　
				<button type="button" class="btn-square" onclick="window.location='{{ url("login")}}'">No</button>
			<div>
		</div>
	</div>
  </body>
</html>
