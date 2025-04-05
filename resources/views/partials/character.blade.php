@php
  $movies = config("movie");
@endphp

<div class="bg-black movie-data">
  <div class="container pb-4">

    <div class="row pt-5">
      @foreach ($movies as $movie) 
        <div class="col-xl-2 col-md-3 col-sm-4 col-4 mb-2">
          <div class="div-image">
            <img src="{{$movie['thumb']}}" alt="" class="h-100">
          </div>
          <p class="text-white title-movie pt-2">{{strtoupper($movie['sale_date'])}}</p>
        </div>
      @endforeach    
    </div>
    <div class="text-center">
      <button type="button" class="btn btn-more btn-lg btn-primary text-center">LOAD MORE</button>
    </div>
  </div>
</div>
