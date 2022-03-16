@extends('layouts.main')
@section('content')
   <div class="content-container">
    <div class="container">
        <div class="floated">
            <span>CURRENT SERIES</span>
        </div>
        <div class="cards-container d-flex  flex-wrap">
            @forelse($comics as $index => $comic)
            <div class="card d-flex flex-wrap">
                <a href="{{route("comic", ['id' => $index])}}">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" >
                    
                </a>
                <span>{{$comic['series']}}</span>
            </div>
            @empty
                <p>NON C'è ALCUN CONTENUTO</p>
            @endforelse
        </div>
     
    </div>
   </div>
   @include('includes.merch') 
@endsection