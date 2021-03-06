@extends('layout')
  
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
  
                    <a href ="\hiragana\index.html"  class="btn btn-Secondary btn-lg btn-block">Hiragana</a>
                    <button type="button" class="btn btn-Secondary btn-lg btn-block">Kanji </button>
                    <button type="button" class="btn btn-Secondary btn-lg btn-block">Katakana </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection