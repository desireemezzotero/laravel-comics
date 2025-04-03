@php
  $movies = config("movie");
@endphp

<div class="bg-black">
  <div class="container">
    <div class="row pt-5">
   
      @foreach ($movies as $movie) 
        <div class="col-xl-2 col-md-3 col-sm-4 col-4 mb-2">
          <div class="div-image">
            <img src="{{$movie['thumb']}}" alt="" class="h-100">
          </div>
          <p class="text-white title-movie pt-2">{{strtoupper($movie['title'])}}</p>
        </div>
      @endforeach
      
    </div>
  </div>
</div>