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
   <!-- <div class="box">
    <div class="message-box" role="alertdialog" style="opacity: 1; left: 365px; top: 312px;">
   <div class="message-box__content">
      <div class="message-box__icon message-box__icon_type_question"></div>
      <div class="message-box__message-container" style="overflow: hidden; max-width: 480px;">
         <div>
            <div class="message-box__message" tabindex="-1">Continue?  From the last time stopping point 前回(ぜんかい)の続(つづ)きから勉強(べんきょう)しますか？</div>
         </div>
      </div>
      <div class="vertical-scrollbar" style="opacity: 0; display: none;">
         <div class="vertical-scrollbar__up" disabled=""></div>
         <div class="thumb" style="height: 0px; top: 0px;">
            <div class="thumb__background"></div>
         </div>
         <div class="vertical-scrollbar__down" disabled=""></div>
      </div>
   </div>
   <div class="message-box-buttons-panel">
        <div class="message-box-buttons-panel__buttons">
          <button class="message-box-buttons-panel__window-button">YES 　はい</button>
          <button class="message-box-buttons-panel__window-button" onclick="location.href='{{ url('/intro')}}'" >NO　いいえ</button>
        </div>
    </div>
    </div>
	</div> -->
   <form method="post" action="{{ url('/return')}}" id="yourForm" name="yourForm">
      {{ csrf_field() }}
      <div class="box">
         <div class="outPopUpForPhone">
            @if ($agent->isMobile())

            <div style="opacity: 1">
               <div>
                  <div style="overflow: hidden; max-width: 550px; font-size:60px;">
                     <div>
                        <div><ruby>
                              <rb>前</rb>
                              <rt>ぜん</rt>
                              <rb>回</rb>
                              <rt>かい</rt>
                           </ruby>の<ruby>
                              <rb>続</rb>
                              <rt>つづ</rt>
                           </ruby>きから<ruby>
                              <rb>勉</rb>
                              <rt>べん</rt>
                              <rb>強</rb>
                              <rt>きょう</rt>
                           </ruby>しますか？</div>
                        </br>
                        <div>Do you want to continue from the previous stopping point?</div>
                        </br>

                     </div>
                  </div>
                  <div style="opacity: 0; display: none;">
                     <div disabled=""></div>
                     <div style="height: 0px; top: 0px;">
                        <div></div>
                     </div>
                     <divdisabled="">
                  </div>
               </div>
            </div>
            <div>
               <div class="testStylePhone">
                  <button class = "button-phone-size" name="questionAnswer" type="submit" value="yes">YES 　はい</button>
                  <button class = "button-phone-size" name="questionAnswer" type="submit" value="no">NO　いいえ</button>
               </div>
            </div>
            @else
            <div style="opacity: 1">
               <div>
                  <div style="overflow: hidden; max-width: 550px;">
                     <div>
                        <div><ruby>
                              <rb>前</rb>
                              <rt>ぜん</rt>
                              <rb>回</rb>
                              <rt>かい</rt>
                           </ruby>の<ruby>
                              <rb>続</rb>
                              <rt>つづ</rt>
                           </ruby>きから<ruby>
                              <rb>勉</rb>
                              <rt>べん</rt>
                              <rb>強</rb>
                              <rt>きょう</rt>
                           </ruby>しますか？</div>

                        </br>
                        <div>Do you want to continue from the previous stopping point?</div>
                        </br>

                     </div>
                  </div>
                  <div style="opacity: 0; display: none;">
                     <div disabled=""></div>
                     <div style="height: 0px; top: 0px;">
                        <div></div>
                     </div>
                     <divdisabled="">
                  </div>
               </div>
            </div>
            <div>
               <div class="testStyle">
                  <button name="questionAnswer" type="submit" value="yes">YES 　はい</button>
                  <button name="questionAnswer" type="submit" value="no">NO　いいえ</button>
               </div>
            </div>
            @endif

         </div>
      </div>
      </div>

   </form>

</body>

</html>