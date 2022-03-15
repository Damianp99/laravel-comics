@extends('layouts.main')
@section('content')
   <div class="content-container">
    <div class="container">
        <div class="floated">
            <span>CURRENT SERIES</span>
        </div>
        <div class="cards-container d-flex  flex-wrap">
            @forelse($comics as $comic)
            <div class="card d-flex flex-wrap">
                <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}" >
                <span>{{$comic['series']}}</span>
            </div>
            @empty
                <p>NON C'è ALCUN CONTENUTO</p>
            @endforelse
        </div>
     
    </div>
   </div>
@endsection