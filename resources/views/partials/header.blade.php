<header class="bg-white" style="height: 90px;">
  <div class="d-flex justify-content-between align-items-center h-100 container">
    <div>
      <img src="{{ Vite::asset('resources/img/dc-logo.png')}}" alt="" style="height: 60px">
    </div>

    @php
        $navs = config("headerNav"); 
    @endphp

    <div class="d-flex">
      <ul>
        @foreach ($navs as $nav)
            <li><a href="{{$nav}}">{{ strtoupper($nav) }}</a></li>
        @endforeach
      </ul>
    </div>

  </div>
</header>
