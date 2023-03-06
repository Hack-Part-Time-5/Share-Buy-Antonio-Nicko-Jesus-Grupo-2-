
  <nav class="navbar navbar-expand-lg mx-3 bg-body-tertiary d-flex">          
          <a class="navbar-brand letra_logo" href="{{route('home')}}">Share&Buy</a>
          <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>     
        <div class="collapse navbar-collapse col-6 justify-content-end " id="navbarSupportedContent">
          <ul class="navbar-nav mb-2 mb-lg-0 me-0">
            {{-- <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
            </li> --}}
            {{-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categories
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                @foreach ($categories as $category)
                  <li><a href="{{route('category.ads', $category)}}" class="dropdown-item">{{$category->name}}</a></li>
                @endforeach
              </ul>
            </li> --}}
            @guest                                    
              @if(Route::has('register'))
              <li class="navbar-register_button mx-3 px-3">
                <a class="nav-link active mx-3 text-white  navbar-register__a" aria-current="page" href="{{route('register')}}">Register</a>
              </li>
              @endif
              @if (Route::has('login'))
              <li class="nav-item navbar-upload px-3">
                <a class="nav-link active mx-3 navbar-upload__a" aria-current="page" href="{{route('login')}}">Upload</a>
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
          </ul>        
        </div>       
  </nav>

