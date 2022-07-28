@extends('layouts.app');

@section('page_title', "Movies")
    
@section('page_content')
    <div class="section-movie bg-info">
        <div class="container">
            
                
                @foreach ($movies as $movie)
                    <div class="text-center"> 
                       <h4><span>Title:</span>  <em class="text-danger">{{ $movie["title"] }}</em></h4> 
                       <h4><span>Original Title:</span> <em class="">{{$movie["original_title"]}}</em></h4>
                        <h4><span>Nationality :</span> <strong class="">{{$movie["nationality"]}}</strong></h4> 
                       <h4><span>Date :</span>  <em>{{$movie["date"]}}</em></h4>
                       <h4><span>Vote:</span>  <strong>{{$movie["vote"]}}</strong></h4>
                    </div>
                @endforeach

           
        </div>
    </div>
@endsection