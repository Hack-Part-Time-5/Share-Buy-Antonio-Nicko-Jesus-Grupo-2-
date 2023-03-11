<nav class="navbar  navbar-expand-lg mx-1 bg-body-tertiary d-flex p-2 px-sm-5">
  <div class="d-flex container-fluid justify-content-between">
    <a class="navbar-brand letra_logo" href="{{ route('home') }}"><img src="/img/icons/share&buy_logo.svg" alt="logo de share&buy"></a>
    <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
  </div>    
    <div class="collapse navbar-collapse col-6 justify-content-end " id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0 me-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name ?? 'none' }}</a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @if (Auth::user()->is_revisor ?? 'none')
                        <li>
                            <a class="dropdown-item" href="{{ route('revisor.home') }}">{{__('Revisor')}}<span class="badge rounded-pill bg-danger">{{ \App\Models\Ad::TobeRevisionedCount() }}</span></a>
                        </li>
                    @endif
                    <li>
                        <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                        <a id="logoutBtn" class="dropdown-item" href="#">{{__('Salir')}}</a>
                    </li>

                </ul>

            </li>

            
            <li class="nav_icons nav-item">
                <a class="nav-link active" aria-current="page" data-bs-toggle="modal" data-bs-target="#dialog1"><img src="img\icons\login_icon.svg" alt="Log in"></a>
            </li> 
            <li class="nav-item">
                <a class="nav-link active" aria-current="page"><img src="img\icons\fav_icon .svg" alt="favoritos"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page"><img src="img\icons\language_icon.svg" alt="Language"></a>
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
                        <button type="button" class="navbar-register_button text-white mx-3 px-3" data-bs-toggle="modal" data-bs-target="#dialog1">{{__('+ Sube tu producto')}}</button>
                        <div class="modal fade p-2" id="dialog1">
                            <div class="my-modal modal-dialog modal-lg ">
                                <div class="modal-content p-3">
                                    <div class="buttonExitModal m-3">
                                        <button type="button" class="btn-close float-end" name="button" data-bs-dismiss="modal"></button>
                                    </div>
                                    <div class="logoModal d-flex justify-content-center">
                                        <img src="/img/icons/share&buy_logo.svg" alt="logo de share & buy" class="logoModal">
                                    </div>
                                    <div class="modal-header d-flex justify-content-center">                                
                                        <h3 class="modal-title text-center" id="exModalLabel"><strong>Compra y vende en Share & Buy</strong></h3>                                
                                    </div>
                                    <div class="d-flex  mt-3 flex-column justify-content-center align-items-center">
                                        <p class="fs-2">Consigue los mejores precios y gana</p>
                                        <p class="fs-2">dinero con lo que no usas.</p>
                                        <section class="login__modal--expand container-fluid p-5">
                                            <div class="container-fluid">
                                                <div class="row justify-content-center">
                                                    <div class="col-12 d-flex flex-column align-items-center  offset-md-3">
                                                        {{-- FORM TITLE --}}
                                                        <h2 class="form-title space-around m-5 text-center">Login</h2>
                                                        @if ($errors->any())
                                                            <div class="alert alert-danger">
                                                                <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                    <li>{{$error}}</li>   
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        @endif 
                                                        {{-- FORM FIELDS --}}
                                                        <form action="/login" method="POST" role="form" class="form-control p-2 border-0">
                                                            @csrf
                                                            {{-- EMAIL --}}
                                                            <div class="space-around my-2">
                                                                <input type="email" name="email" id="email" class="form-control forms_field-input" placeholder="Your email" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                                                <div class="validate"></div>
                                                            </div>
                                                            {{-- PASSWORD --}}
                                                            <div class="space-around my-2">
                                                                <input type="password" name="password" id="password" class="form-control forms_field-input" placeholder="Your password">
                                                                <div class="validate"></div>
                                                            </div>
                                                               {{-- BUTTON-LOGIN --}}
                                                               <button type="submit" class="btn btn-info">Enter</button>
                                                        </form>
                                                        <p class="my-3">Have you an account?<a class="btn btn-info btn-sm ms-2" href="{{route('register')}}">Register</a></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
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
