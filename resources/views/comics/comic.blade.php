@extends('layouts.main')
@section('content')
<div id="comic">
    @forelse ($comics as $index => $comic)
    <div class="container">
        
        <div class="d-flex my-5">
           
           <div class="d-flex flex-column justify-content-between details ">
            <h1 class="text-blue py-3">Action Comics #1000: The Deluxe Edition</h1>
            <div class="info d-flex justify-content-between">
                <span class="light-green">U.S. Price: <span class="text-white">$19.99</span></span>
                <span class="light-green">AVALAIBLE</span>
                <span class="border-left text-white">Check Avalaibility</span>
            </div>
            
            <p>The celebration of 1,000 issues of Action Comics continues with a new, Deluxe Edition of the amazing comic that won raves when it hit comics shops in April! This hardcover includes all the stories from that issue, plus the tale by writer Paul Levitz and artist Neal Adams that appeared in the Action Comics: 80 Years Of Superman hardcover, as well as all the variant covers, design sketches by Jim Lee for Superman’s new look, scripts for the stories, the original art from the lost story featuring art by Curt Swan and more! Plus: a complete reprint of the stories that started it all—the Superman stories Action Comics #1 and 2 from 1938!</p>
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
                        <p>"José Luis García-López",
                            "Clay Mann",
                            "Rafael Albuquerque",
                            "Patrick Gleason",
                            "Dan Jurgens",
                            "Joe Shuster",
                            "Neal Adams",
                            "Curt Swan",
                            "John Cassaday",
                            "Olivier Coipel",
                            "Jim Lee"</p>
                    </div>
                    <div class="d-flex border-bottom">
                        <span class="text-blue">Written by:</span>
                        <p>"José Luis García-López",
                            "Clay Mann",
                            "Rafael Albuquerque",
                            "Patrick Gleason",
                            "Dan Jurgens",
                            "Joe Shuster",
                            "Neal Adams",
                            "Curt Swan",
                            "John Cassaday",
                            "Olivier Coipel",
                            "Jim Lee"</p>
                    </div>
                </div>
                <div class="d-flex flex-column">
                    <h3 class="text-blue border-bottom">Specs</h3>
                    
                    <div class="d-flex border-bottom">
                        <span class="text-blue">Series:</span>
                        <p>"Jim Lee"</p>
                    </div>
                    <div class="d-flex border-bottom">
                        <span class="text-blue">U.S. Price:</span>
                       <span> $19.99</span> 
                    </div>
                    <div class="d-flex border-bottom">
                        <span class="text-blue">On Sale Date:</span>
                        <p>Oct 02 2018</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @empty
        <p>Non c'è alcun contenuto</p>
    @endforelse
   
</div>

@endsection