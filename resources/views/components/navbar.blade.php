<nav class="navbar  navbar-expand-lg mx-1 bg-body-tertiary d-flex p-2 px-sm-5">
  <div class="d-flex container-fluid justify-content-between">
    <a class="navbar-brand letra_logo" href="{{ route('home') }}"><img src="/img/icons/share&buy_logo.svg" alt="logo de share&buy"></a>
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
  </div>    
    <div class="collapse navbar-collapse col-6 justify-content-end " id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 me-0">
            
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
            </li>            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name ?? 'none' }}</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @if (Auth::user()->is_revisor ?? 'none')
                        <li>
                            <a class="dropdown-item" href="{{ route('revisor.home') }}">Revisor<span class="badge rounded-pill bg-danger">{{ \App\Models\Ad::TobeRevisionedCount() }}</span></a>
                        </li>
                    @endif
                    <li>
                        <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                        <a id="logoutBtn" class="dropdown-item" href="#">Salir</a>
                    </li>

                </ul>

            </li>

            {{-- 

                Categories
              </a>
              
                @foreach ($categories as $category)
                  <li><a href="{{route('category.ads', $category)}}" class="dropdown-item">{{$category->name}}</a></li>
                @endforeach
              </ul>
            </li> --}}
            @guest
                @if (Route::has('register'))
                    <li>
                        <button type="button" class="navbar-register_button text-white mx-3 px-3" data-bs-toggle="modal" data-bs-target="#dialog1">+ Sube tu producto</button>
                        <div class="modal fade" id="dialog1">
                            <div class="my-modal modal-dialog  modal-lg ">
                                <div class="modal-content">
                                    <div class="buttonExitModal m-3">
                                        <button type="button" class="btn-close float-end" name="button" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="logoModal d-flex justify-content-center">
                                        <img src="/img/icons/share&buy_logo.svg" alt="logo de share & buy" class="logoModal">
                                    </div>
                                    <div class="modal-header d-flex justify-content-center">                                
                                        <h3 class="modal-title text-center" id="exModalLabel"><strong>Compra y vende en Share & Buy</strong></h3>                                
                                    </div>
                                    <div class="d-flex mt-3 flex-column justify-content-center align-items-center">
                                        <p class="fs-2">Consigue los mejores precios y gana</p>
                                        <p class="fs-2">dinero con lo que no usas.</p>
                                    </div>
                                    <div class="modal-footer mt-5 mb-5 d-flex justify-content-center">
                                        <a class="text-center loginLinkModal nav-link active mx-3 navbar-register_button px-5 py-2 text-white  navbar-register__a" aria-current="page" href="{{ route('login') }}">Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endif
                @if (Route::has('login'))
                    {{-- <li class="nav-item navbar-upload px-3">
                        <a class="nav-link active mx-3 navbar-upload__a" aria-current="page" href="#"></a>
                    </li> --}}
                @endif
            @else
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('ads.create') }}">Create Ad</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" id="logoutForm" method="POST">
                        @csrf
                    </form>
                    <a href="#" id="logoutBtn" class="nav-link">Exit</a>
                </li>
            @endguest
            <li class="nav-item">
                <x-locale lang="en" country="gb" />
            </li>
            <li class="nav-item">
                <x-locale lang="es" country="es" />
            </li>
            <li class="nav-item">
                <x-locale lang="fr" country="fr" />
            </li>
        </ul>
    </div>
</nav>
