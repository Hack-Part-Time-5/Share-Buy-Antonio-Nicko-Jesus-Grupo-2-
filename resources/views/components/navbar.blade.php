<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Share&Buy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          @guest                      
            @if (Route::has('login'))
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('login')}}">Enter</a>
            </li>   
            @endif
            @if(Route::has('register'))
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('register')}}">Register</a>
            </li>
            @endif
          @else
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('ads.create')}}">Create Ad</a>
          </li>
            <li class="nav-item">
              <form action="{{route('logout')}}" id="logoutForm" method="POST">
                @csrf
              </form>
              <a href="#" id="logoutBtn" class="nav-link">Exit</a>
            </li>
          @endguest  
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Categories
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              @foreach ($categories as $category)
                <li><a href="{{route('category.ads', $category)}}" class="dropdown-item">{{$category->name}}</a></li>
              @endforeach
            </ul>
          </li>          
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>