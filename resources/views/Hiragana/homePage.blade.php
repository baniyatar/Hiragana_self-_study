<!DOCTYPE html>
<html>

<head>
  <title>はじめに</title>
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
  <!-- <meta name="apple-mobile-web-app-capable" content="yes"> -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"> -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script> -->
</head>

<body>

  <div> </div>
  <br>
  <div class="box">
    <p style=" text-align:center;font-size:34pt; font-weight:bold"> <ruby><rb>勉強</rb><rt>べんきょう</rt></ruby>したい<ruby><rb>文字</rb><rt>もじ</rt></ruby>をクリックしてください。</p>
    <p style=" text-align:center;font-size:34pt; font-weight:bold"> Click the letter you want to study.</p>
    <table border="1" style="font-size:8vw; font-family: serif; border: 1px; margin-left:auto">

      <tbody>
        <tr>
          <td><a href="{{ url('/waAlphabet')}}">
              <div style="height:100%;width:100%"> わ</div>
            </a></td>
          <td><a href="{{ url('/raAlphabet')}}">
              <div style="height:100%;width:100%"> ら</div>
            </a></td>
          <td><a href="{{ url('/yaAlphabet')}}">
              <div style="height:100%;width:100%"> や</div>
            </a></td>
          　<td><a href="{{ url('/maAlphabet')}}">
              <div style="height:100%;width:100%"> ま</div>
            </a></td>
          <td><a href="{{ url('/haAlphabet')}}">
              <div style="height:100%;width:100%"> は</div>
            </a></td>
          <td><a href="{{ url('/naAlphabet')}}">
              <div style="height:100%;width:100%"> な</div>
            </a></td>
          　<td><a href="{{ url('/taAlphabet')}}">
              <div style="height:100%;width:100%"> た</div>
            </a></td>
          <td><a href="{{ url('/saAlphabet')}}">
              <div style="height:100%;width:100%"> さ</div>
            </a></td>
          <td><a href="{{ url('/kaAlphabet')}}">
              <div style="height:100%;width:100%"> か</div>
            </a></td>
          <td> <a href="{{ url('/aAlphabet')}}">
              <div style="height:100%;width:100%"> あ</div>
            </a></td>
        </tr>
        <tr>
          <td></td>
          <td><a href="{{ url('/riAlphabet')}}">
              <div style="height:100%;width:100%"> り</div>
            </a></td>
          <td></td>
          　<td><a href="{{ url('/miAlphabet')}}">
              <div style="height:100%;width:100%"> み</div>
            </a></td>
          <td><a href="{{ url('/hiAlphabet')}}">
              <div style="height:100%;width:100%"> ひ</div>
            </a></td>
          <td><a href="{{ url('/niAlphabet')}}">
              <div style="height:100%;width:100%"> に</div>
            </a></td>
          　 <td><a href="{{ url('/chiAlphabet')}}">
              <div style="height:100%;width:100%"> ち</div>
            </a></td>
          <td><a href="{{ url('/shiAlphabet')}}">
              <div style="height:100%;width:100%"> し</div>
            </a></td>
          <td><a href="{{ url('/kiAlphabet')}}">
              <div style="height:100%;width:100%"> き</div>
            </a></td>
          <td><a href="{{ url('/iAlphabet')}}">
              <div style="height:100%;width:100%"> い</div>
            </a></td>
        </tr>

        <tr>
          <td></td>
          <td><a href="{{ url('/ruAlphabet')}}">
              <div style="height:100%;width:100%"> る</div>
            </a></td>
          <td><a href="{{ url('/yuAlphabet')}}">
              <div style="height:100%;width:100%"> ゆ</div>
            </a></td>
          　<td><a href="{{ url('/muAlphabet')}}">
              <div style="height:100%;width:100%"> む</div>
            </a></td>
          <td><a href="{{ url('/fuAlphabet')}}">
              <div style="height:100%;width:100%"> ふ</div>
            </a></td>
          <td><a href="{{ url('/nuAlphabet')}}">
              <div style="height:100%;width:100%"> ぬ</div>
            </a> </td>
          <td><a href="{{ url('/tsuAlphabet')}}">
              <div style="height:100%;width:100%"> つ</div>
            </a> </td>
          <td><a href="{{ url('/suAlphabet')}}">
              <div style="height:100%;width:100%"> す</div>
            </a></td>
          <td><a href="{{ url('/kuAlphabet')}}">
              <div style="height:100%;width:100%"> く</div>
            </a></td>
          <td><a href="{{ url('/uAlphabet')}}">
              <div style="height:100%;width:100%"> う</div>
            </a></td>
        </tr>
        <tr>
          <td></td>
          <td><a href="{{ url('/reAlphabet')}}">
              <div style="height:100%;width:100%"> れ</div>
            </a></td>
          <td></td>
          <td><a href="{{ url('/meAlphabet')}}">
              <div style="height:100%;width:100%"> め</div>
            </a></td>
          <td><a href="{{ url('/heAlphabet')}}">
              <div style="height:100%;width:100%"> へ</div>
            </a></td>
          <td><a href="{{ url('/neAlphabet')}}">
              <div style="height:100%;width:100%"> ね</div>
            </a> </td>
          　　　<td><a href="{{ url('/teAlphabet')}}">
              <div style="height:100%;width:100%"> て</div>
            </a></td>
          <td><a href="{{ url('/seAlphabet')}}">
              <div style="height:100%;width:100%"> せ</div>
            </a></td>
          <td><a href="{{ url('/keAlphabet')}}">
              <div style="height:100%;width:100%"> け</div>
            </a></td>
          <td><a href="{{ url('/eAlphabet')}}">
              <div style="height:100%;width:100%"> え</div>
            </a></td>

        </tr>

        <tr>
          <td><a href="{{ url('/woAlphabet')}}">
              <div style="height:100%;width:100%"> を</div>
            </a></td>
          <td><a href="{{ url('/roAlphabet')}}">
              <div style="height:100%;width:100%"> ろ</div>
            </a></td>
          <td><a href="{{ url('/yoAlphabet')}}">
              <div style="height:100%;width:100%"> よ</div>
            </a></td>
          <td><a href="{{ url('/moAlphabet')}}">
              <div style="height:100%;width:100%"> も</div>
            </a></td>
          <td><a href="{{ url('/hoAlphabet')}}">
              <div style="height:100%;width:100%"> ほ</div>
            </a></td>
          <td><a href="{{ url('/noAlphabet')}}">
              <div style="height:100%;width:100%"> の</div>
            </a> </td>
          <td><a href="{{ url('/toAlphabet')}}">
              <div style="height:100%;width:100%"> と</div>
            </a></td>
          <td><a href="{{ url('/soAlphabet')}}">
              <div style="height:100%;width:100%"> そ</div>
            </a></td>
          <td><a href="{{ url('/koAlphabet')}}">
              <div style="height:100%;width:100%"> こ</div>
            </a></td>
          <td><a href="{{ url('/oAlphabet')}}">
              <div style="height:100%;width:100%"> お</div>
            </a></td>

        </tr>
        <tr>
          <td><a href="{{ url('/nAlphabet')}}">
              <div style="height:100%;width:100%"> ん</div>
            </a></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td> </td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>

        </tr>
      </tbody>
    </table>
    <br><br><br>


    <table border="1" style="font-size: 8vw; font-family: serif; border: 1px; margin-left:auto">
      <tbody>
        <tr>
          <td><a href="{{ url('/paAlphabet')}}" text-decoration: none;>
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
    <br><br><br>

    <table border="1" style="font-size: 7vw; font-family: serif; border: 1px; margin-left:auto">
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

  <!-- <button class="home_btn" onclick="location.href='{{ url('/construct')}}'">HOME</button> -->
  <button class="prev_btn" onclick="location.href='{{ url('/construct')}}'">&lt;PREV</button>
  <button class="next_btn" onclick="location.href='{{ url('/aAlphabet')}}'">NEXT&gt;</button>
</body>

</html>