@extends('layout')
  
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

<script>
    function resizeIframe(obj) {
    obj.style.height = obj.contentWindow.document.documentElement.scrollHeight + 'px';
  }

  var attachMobileSafariAddressBarHelpTip = function (target) {
    var $target = $(target);
    $target.tooltip({
        title: 'Scroll up to hide Safari address bar',
        trigger: 'manual',
        placement: 'bottom'
    });
    $(window).on('resize', function () {
        var bodyHeight = document.body.offsetHeight;
        var windowHeight = window.innerHeight;
        var isLandscape = Math.abs(window.orientation) === 90;
        var showTooltip = (windowHeight < bodyHeight);
        if(!isLandscape) return;
        $target.tooltip(showTooltip ? 'show' : 'hide');
    });
}
var ua = window.navigator.userAgent;
if(ua.indexOf('iPhone') !== -1 && ua.indexOf('Safari') !== -1) {
    attachMobileSafariAddressBarHelpTip('#main-nav');
}
</script>
<script>
function closeMe() { 
  var win = window.open("","_self"); /* url = "" or "about:blank"; target="_self" */ 
  win.close();
  } 
  </script>
<body  onload="window.opener = self;"  >

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hiragana') }}</div>

            </div>

<iframe width="100%" height="100%" scrolling="no" onload="resizeIframe(this)" controls id="myvideo"
   src="{{asset('hiragana\Hiragana Self Study solve (Published)\index.html')}}"allowFullScreen>

  </iframe>
  <button onclick="openFullscreen();">Click here for Fullscreen Mode</button>
  <p><strong>Tip:</strong> Press the "Esc" key to exit full screen.</p>
  {{-- <input type="button" name="CloseMe" value="Close Me" onclick="closeMe()" /> --}}
  {{-- <a href="#" onclick=window.close(); >close</a> --}}
</body>


<script>
  

/* Get the element you want displayed in fullscreen */ 
var elem = document.getElementById("myvideo");

/* Function to open fullscreen mode */
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  } else if (vid.webkitEnterFullscreen) {
       elem.webkitEnterFullscreen(); //for iphone this code worked
    }
}
</script>

@endsection