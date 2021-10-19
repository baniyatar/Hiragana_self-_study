@extends('layout')
  
@section('content')
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hiragana') }}</div>



<iframe width="100%" height="100%"  controls id="myvideo"
   src="\hiragana\Hiragana Self Study solve (Published)\index.html">

  </iframe>
  <button onclick="openFullscreen();">Click here for Fullscreen Mode</button>
  <p><strong>Tip:</strong> Press the "Esc" key to exit full screen.</p>
 
  <a class="nav-link" href="{{ route('logout') }}">やめます。 Logout</a> </div>
</div>
        </div></div>
       
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
  }
}
</script>

@endsection