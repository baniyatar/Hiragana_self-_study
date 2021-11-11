<!DOCTYPE html>
<html>
<head>
    <title>Senmon Kyouiku.Co.,Ltd</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <style type="text/css">
        @import url(https://fonts.googleapis.com/css?family=Raleway:300,400,600);
  
        body{
            margin: 0;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.6;
            color: #212529;
            text-align: left;
            background-color: #f5f8fa;
        }
        .navbar-laravel
        {
            box-shadow: 0 2px 4px rgba(0,0,0,.04);
        }
        .navbar-brand , .nav-link, .my-form, .login-form
        {
            font-family: Raleway, sans-serif;
        }
        .my-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .my-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .login-form
        {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }
        .login-form .row
        {
            margin-left: 0;
            margin-right: 0;
        }
        .myIframe {
  position: relative;
  padding-bottom: 65.25%;
  padding-top: 30px;
  height: 0;
  overflow: auto;
  -webkit-overflow-scrolling: touch; /*<<--- THIS IS THE KEY*/ 
  border: solid black 1px;
}
.frame-border { 
border:3px solid #EEE; 
}

.myIframe iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}


.round {
  border-radius:0.55%;
}
.font-size-big {
    font-size: 2.4rem;
}

.font-size-small{
    font-size:1.5rem;
}
div.navigationnext{
  
  left: 150px;  
  font-size: 20px;
 
 
} 

html{
    width:100%;
    height:100%;
}
body{
    width:100%;
    height:100%;
    background-color:#DDD;
}



.next {
  background-color: #04AA6D;
  color: white;
}

.previous{
  
    background-color: #f1f1f1;
  color: black;

} 
.gothic{
    font-family: "MS Gothic";
    
    color: red
   
}
.century{
    font-family: "Century ";
   
}

.mincho {
    font-family: "ヒラギノ明朝 ProN W6", "HiraMinProN-W6", "HG明朝E", "ＭＳ Ｐ明朝", "MS PMincho", "MS 明朝", serif;
   

}
.bold {
    font-weight: bold;
}
.italic {
    font-style: italic;
}
a, a:hover, a:focus, a:active {
      text-decoration: none;
      color: inherit;
 }

 /*
	Max width before this PARTICULAR table gets nasty. This query will take effect for any screen smaller than 760px and also iPads specifically.
	*/
	@media (min-width:320px)  { /* smartphones, portrait iPhone, portrait 480x320 phones (Android) */ }
@media (min-width:480px)  { /* smartphones, Android phones, landscape iPhone */ }
@media (min-width:600px)  { /* portrait tablets, portrait iPad, e-readers (Nook/Kindle), landscape 800x480 phones (Android) */ }
@media (min-width:801px)  { /* tablet, landscape iPad, lo-res laptops ands desktops */ }
@media (min-width:1025px) { /* big landscape tablets, laptops, and desktops */ }
@media (min-width:1281px) { /* hi-  {

		/* Force table to not be like tables anymore */
}
    </style>
</head>
<body>
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
<nav class="navbar navbar-expand-lg navbar-light navbar-laravel">
    <div class="container">
        {{-- <a class="navbar-brand" href="#">Senmon Kyouiku Publishing Co.,Ltd</a> --}}
        {{-- <button  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
          
        </button>
    --}}
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest
                    <li class="nav-item">
                        {{-- <a class="nav-link" href="{{ route('login') }}">Login</a> --}}
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li> --}}
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
                @endguest
            </ul>
  
        </div>
    </div>
</nav>
  
@yield('content')
     
</body>
</html>