<header>
    {{-- HEADER DA POI INSERIRE COME PARTIAL CON TUTTI I RISPETTIVI LINK--}}
    <div class="upper-header ">
        <div class="container">
            <ul class="d-flex justify-content-end">
             
                <li><a href="">DC POWER&#8480; VISA&reg;</a></li>
                <li><a href="">ADDITIONAL DC SITES</a></li>
            </ul>
        </div>
       
    </div>
    <div class="navbar bottom-header  ">
        <div class="container d-flex align-items-center justify-content-between">
            <div>
                <img src="{{asset('images/dc-logo.png')}}" alt="logo-dc-comics">
            </div>
       
           <div>
            <ul class="d-flex">
                {{-- <LI> DA FAR GIRARE CON UN FOREACH PER OGNI VOCE DEL MENU --}}
                <li><a href="{{route('characters')}}">CHARACTERS</a></li>
                <li><a href="{{route('comics')}}">COMICS</a></li>
                <li><a href="{{route('movies')}}">MOVIES</a></li>
                <li><a href="{{route('tv')}}">TV</a></li>
                <li><a href="{{route('games')}}">GAMES</a></li>
                <li><a href="{{route('collectibles')}}">COLLECTIBLES</a></li>
                <li><a href="{{route('videos')}}">VIDEOS</a></li>
                <li><a href="{{route('fans')}}">FANS</a></li>
                <li><a href="{{route('news')}}">NEWS</a></li>
                <li><a href="{{route('shop')}}">SHOP</a></li>
     
     
            </ul>
           </div>
          <div>
            <input type="text">
          </div>
           
        </div>
        
    </div>
   
</header>