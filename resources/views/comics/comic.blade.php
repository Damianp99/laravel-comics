@extends('layouts.main')

@section('content')
<div id="comic">
    <div class="container">
        <div class="d-flex my-5">
           <div class="d-flex flex-column justify-content-between details ">
            <h1 class="text-blue py-3">{{$comic['title']}}</h1>
            <div class="info d-flex justify-content-between">
                <span class="light-green">U.S. Price: <span class="text-white">{{$comic['price']}}</span></span>
                <span class="light-green">AVALAIBLE</span>
                <span class="border-left text-white">Check Avalaibility</span>
            </div>
            
            <p>{{$comic['description']}}</p>
           </div>
           <div>
               <h3>ADVERTISEMENT</h3>
            <img src="{{asset('images/adv.jpg')}}" alt="" class="adv">
           </div>
        </div>
    </div>
    <div class="comic-details bg-whitesmoke">
        <div class="container">
            <div class="details d-flex">
                <div class="d-flex flex-column">
                    <h3 class="text-blue border-bottom">Talent</h3>
                    <div class="d-flex border-bottom">
                        <span class="text-blue">Art by:</span>
                        <p></p>
                    </div>
                    <div class="d-flex border-bottom">
                        <span class="text-blue">Written by:</span>
                        <p></p>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <h3 class="text-blue border-bottom">Specs</h3>
                    
                    <div class="d-flex border-bottom">
                        <span class="text-blue">Series:</span>
                        <p>{{$comic['series']}}</p>
                    </div>
                    <div class="d-flex border-bottom">
                        <span class="text-blue">U.S. Price:</span>
                       <span> {{$comic['price']}}</span> 
                    </div>
                    <div class="d-flex border-bottom">
                        <span class="text-blue">On Sale Date:</span>
                        <p>{{$comic['sale_date']}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
