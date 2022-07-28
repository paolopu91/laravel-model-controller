@extends('layouts.app');

@section('page_title', "Movies")
    
@section('page_content')
    <div class="section-movie bg-info">
        <div class="container">
            <div class="row">
                
                @foreach ($movies as $movie)
                    
                @endforeach

            </div>
        </div>
    </div>
@endsection