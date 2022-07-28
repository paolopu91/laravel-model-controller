@extends('layouts.app');

@section('page_title', "Movies")
    
@section('page_content')
    <div class="section-movie bg-dark">
        <div class="container">
            
                
                @foreach ($movies as $movie)
                    <div class="text-center py-5 text-white"> 
                       <h4><span class="text-success">Title:</span>  <em class="text-danger">{{ $movie["title"] }}</em></h4> 
                       <h4><span class="">Original Title:</span> <em class="">{{$movie["original_title"]}}</em></h4>
                        <h4><span class="">Nationality :</span> <strong class="">{{$movie["nationality"]}}</strong></h4> 
                       <h4><span class="">Date :</span>  <em>{{$movie["date"]}}</em></h4>
                       <h4><span class="">Vote:</span>  <strong class="text-success">{{$movie["vote"]}}</strong></h4>
                    </div>
                @endforeach

           
        </div>
    </div>
@endsection