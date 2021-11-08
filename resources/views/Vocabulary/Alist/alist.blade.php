@extends('layout')
 
@section('content')
<main class="List">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Hiragana self study') }}</div>

                <table class="table table-sm">
                    <thead>
                        <tr>
                            <th>A Vocabulary</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>あか</td>
                            
                        </tr>
                        <tr>
                            <td>あし</td>
                           
                        </tr>
                        <tr>
                            <td>あたま</td>
                           
                        </tr> 
                        <tr>
                            <td>あめ</td>
                           
                        </tr>
                       
                    </tbody>
                </table>
                <a href="{{ URL::to( '/aka') }}">Next</a>
            </div>
        </div>
    </div>
</div>
</div>
</main>


@endsection