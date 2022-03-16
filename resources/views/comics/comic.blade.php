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
                <div class="d-flex flex-column w-50 py-5 px-5">
                    <h3 class="text-blue border-bottom  py-5">Talent</h3>
                    <div class="d-flex border-bottom justify-content-between ">
                        <span class="text-blue text-small py-5 w-50">Art by:</span>
                        <span class="text-small text-dodgerblue  py-5">
                            @foreach ($comic['artists'] as $artist)
                                {{ $artist }}
                                @if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </span>
                    </div>
                    <div class="d-flex border-bottom justify-content-between  ">
                        <span class="text-blue text-small py-5 w-50">Written by:</span>
                        <span class="text-small text-dodgerblue  py-5 ">  
                        @foreach ($comic['writers'] as $writer)
                            {{ $writer }}
                            @if (!$loop->last)
                                ,
                            @endif
                        @endforeach
                     </span>
                    </div>
                </div>
                <div class="d-flex flex-column w-50 py-5 px-5">
                    <h3 class="text-blue border-bottom py-5">Specs</h3>
                    
                    <div class="d-flex border-bottom py-5 text-justify">
                        <span class="text-blue text-small">Series:</span>
                        <span class="text-small text-dodgerblue ">{{$comic['series']}}</span>
                    </div>
                    <div class="d-flex border-bottom py-5 text-justify">
                        <span class="text-blue text-small">U.S. Price:</span>
                       <span class="text-small "> {{$comic['price']}}</span> 
                    </div>
                    <div class="d-flex border-bottom py-5 text-justify">
                        <span class="text-blue text-small">On Sale Date:</span>
                        <span class="text-small ">{{$comic['sale_date']}}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav">
            <div class="container">
                <ul class="d-flex justify-content-between ">
                    <li class="d-flex justify-content-between w-25">
                        <a href="#" class="text-gray text-small p-5">DIGITAL COMICS</a>
                        <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="" class="p-5">
                    </li>
                    <li class="d-flex justify-content-between w-25">
                        <a href="#" class="text-gray text-small p-5">SHOP DC</a>
                        <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="" class="p-5">
                    </li>
                    <li class="d-flex justify-content-between w-25">
                        <a href="#" class="text-gray text-small p-5">COMIC SHOP LOCATOR</a>
                        <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="" class="p-5">
                    </li>
                    <li class="d-flex justify-content-between w-25">
                        <a href="#" class="text-gray text-small p-5">SUBSCRIPTIONS</a>
                        <img src="{{asset('images/buy-comics-digital-comics.png')}}" alt="" class="p-5">
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
@endsection
