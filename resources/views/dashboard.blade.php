@extends('layout')
  
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hiragana') }}</div>
               
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
  
                    <a href ="\hiragana\index.html"  class="btn btn-Secondary btn-lg btn-block">ひらがなの <ruby>
                        勉強<rp></rp><rt>べんきょう</rt><rp></rp>
                        </ruby>を  <ruby>
                            始<rp></rp><rt>はじ</rt><rp></rp>
                            </ruby>  めましょう。<br>Let`s study Hiragana  </a>
                    {{-- <button type="button" class="btn btn-Secondary btn-lg btn-block">Kanji </button>
                    <button type="button" class="btn btn-Secondary btn-lg btn-block">Katakana </button> --}}
               
                    <a class="nav-link" href="{{ route('logout') }}">やめます。 Logout</a> </div>
            </div>
        </div>
    </div>
   
</div>
@endsection