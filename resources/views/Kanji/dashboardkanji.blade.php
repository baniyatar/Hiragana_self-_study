@extends('layout')
  
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Kanji 5Q') }}</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
  
                    <a href ="\Kanji\color\res\index.html"  class="btn btn-Secondary btn-lg btn-block">Color</a>
                    <a href ="\Kanji\DayOfWeek\res\index.html" class="btn btn-Secondary btn-lg btn-block">Day of Week </a>
                    <a href ="\Kanji\direction\res\index.html" class="btn btn-Secondary btn-lg btn-block">Direction </a>
                    <a href ="\Kanji\human\res\index.html" class="btn bthrn-Secondary btn-lg btn-block">Human </a>
                    <a href ="\Kanji\nature\res\index.html" class="btn btn-Secondary btn-lg btn-block">Nature </a>
                    <a href ="\Kanji\number\res\index.html" class="btn btn-Secondary btn-lg btn-block">Number </a>
                    <a href ="\Kanji\other\res\index.html" class="btn btn-Secondary btn-lg btn-block">Other </a>
                    <a href ="\Kanji\plants&animals\res\index.html" class="btn btn-Secondary btn-lg btn-block">Plants & Animal </a>
                    <a href ="\Kanji\study\res\index.html" class="btn btn-Secondary btn-lg btn-block">Study </a>
                    <a href ="\Kanji\unit\res\index.html" class="btn btn-Secondary btn-lg btn-block">Unity </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection