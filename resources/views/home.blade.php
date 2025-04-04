@extends('.layouts.master')

@section('content')
<div class="image">
  <img src="{{Vite::asset('Resources/img/jumbotron.jpg')}}" alt="">
</div>

@include('/partials/moviehome')
@include('/partials/icon')
@endsection
