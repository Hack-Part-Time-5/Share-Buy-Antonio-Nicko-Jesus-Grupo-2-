<nav class="navbar container m-auto navbar-expand-lg  bg-body-tertiary d-flex py-2 ">
    <div class="d-flex flex-nowrap container-fluid justify-content-between">
        <a class="navbar-brand letra_logo" href="{{ route('home') }}">
            <img  src="/img/icons/share&buy_logo.svg" alt="logo de share&buy">
        </a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>        
    </div>   
    <div class="d-flex d-lg-none menu_collapse_nav">
       
        <div class="collapse navbar-collapse col-12 justify-content-center " id="navbarSupportedContent">
            <hr>
            <div class="navbar-nav mb-2 mb-lg-0 me-0 d-flex">
                <a href="" data-bs-toggle="modal" data-bs-target="#modal_language" class="text-muted nav-link"><img src="/img/icons/language_icon.svg" class="icon__nav_collapse" alt="Language"> {{__('Idioma')}}</a>
            </div>
            <div class="navbar-nav mb-2 mb-lg-0 me-0 d-flex justify-content-end ">
                <a href="{{route('wishlist')}}" class="text-muted nav-link"><img src="/img/icons/fav_icon .svg" class="icon__nav_collapse" alt="favoritos"> {{__('Favoritos')}}</a>
            </div>
            <div class="navbar-nav mb-2 mb-lg-0 me-0 d-flex justify-content-end ">
                <a href="" data-bs-toggle="modal" data-bs-target="#dialog1" class="text-muted nav-link"> <img src="/img/icons/login_icon.svg" class="icon__nav_collapse" alt="Log in"> {{__('Iniciar sesión')}}</a>
            </div>
            <hr>
        </div>
    </div> 
    <div class="container__buton--subir d-flex justify-content-end">                
    {{-- Modal login --}}
    <div class=" modal fade p-2" id="modal_login" tabindex="-1" role="dialog" aria-labelledby="modal_language_title"
        aria-hidden="true">
        <div class="my-modal my-modal_idioma modal-dialog modal-lg" role="document">
            <div class="modal-content p-1">
                <div class="buttonExitModal m-2">
                    <button type="button" class="btn-close float-end" name="button" data-bs-dismiss="modal"></button>
                </div>

                <div class="d-flex justify-content-center my-2 py-1">
                    <div class="logoModal d-flex justify-content-center">
                        <img class="carrito_logo_modal" src="/img/icons/carrito_logo.svg" alt="logo de share & buy"
                            class="logoModal">
                    </div>
                    <h4 class=" text-center" id="exModalLabel"><strong>¡Hola de nuevo!</strong></h4>
                </div>
                <section class="login__modal--expand container-fluid p-2">
                    <div class="container-fluid">
                        <div class="row justify-content-center">
                            <div class="col-12 d-flex flex-column align-items-center  offset-md-3">
                                {{-- FORM TITLE --}}
                                
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                {{-- FORM FIELDS --}}
                                <form action="/login" method="POST" role="form" class="form-control p-2 border-0">
                                    @csrf
                                    {{-- EMAIL --}}
                                    <div class="space-around my-2">
                                        <input type="email" name="email" id="email" class="form-control forms_field-input placeholder_login py-1" placeholder="Correo electrónico" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                        <div class="validate"></div>
                                    </div>
                                    {{-- PASSWORD --}}
                                    <div class="space-around my-3">
                                        <input type="password" name="password" id="password"
                                            class="form-control forms_field-input placeholder_login py-1 " placeholder="Contraseña">
                                        <div class="validate"></div>
                                    </div>
                                    <p class="my-3 text-center"><u>{{__('¿Has olvidado tu contraseña?')}}</u><a class=""
                                    href="{{ route('register') }}"></a></p>
                                    {{-- BUTTON-LOGIN --}}
                                    <div class="mt-5 mb-5 d-flex justify-content-center">
                                        <button type="submit" class="text-center loginLinkModal nav-link active mx-3 navbar-register_button px-5 py-2 text-white  navbar-register__a"
                                            aria-current="page">{{__('Iniciar sesión')}}</a> 
                                
                                    </div>        
                                </form>
                            </div>                            
                </section>
            </div>
        </div>
    </div>
    </div>
    </div>

{{-- Modal register --}}
<div class=" modal fade p-2" id="modal_register" tabindex="-1" role="dialog" aria-labelledby="modal_language_title"
aria-hidden="true">
<div class="my-modal my-modal_idioma modal-dialog modal-lg" role="document">
    <div class="modal-content p-1">
        <div class="buttonExitModal m-2">
            <button type="button" class="btn-close float-end" name="button" data-bs-dismiss="modal"></button>
        </div>

        <div class="d-flex justify-content-center my-2 py-1">
            <div class="logoModal d-flex justify-content-center">
                <img class="carrito_logo_modal" src="/img/icons/carrito_logo.svg" alt="logo de share & buy"
                    class="logoModal">
            </div>
            <h4 class=" text-center" id="exModalLabel"><strong>{{__('Únete a Share&Buy')}}</strong></h4>
        </div>
        <section class="login__modal--expand container-fluid p-2">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 d-flex flex-column align-items-center  offset-md-3">
                        {{-- FORM TITLE --}}
                        
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        {{-- FORM FIELDS --}}
                        <form action="/register" method="POST" role="form" class="form-control p-2 border-0">
                            @csrf
                             {{-- NOMBRE Y APELLIDOS--}}
                             <div class="space-around my-2">
                                <input type="text" name="name" id="name" class="form-control forms_field-input placeholder_login py-1" placeholder="Nombre y apellidos" data-rule="minlen:4">
                                <div class="validate"></div>
                            </div>
                            
                            {{-- EMAIL --}}
                            <div class="space-around my-3">
                                <input type="email" name="email" id="email" class="form-control forms_field-input placeholder_login py-1" placeholder="Correo electrónico" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>

                            {{-- PASSWORD --}}
                            <div class="space-around my-3">
                                <input type="password" name="password" id="password"
                                    class="form-control forms_field-input placeholder_login py-1 " placeholder="Contraseña">
                                <div class="validate"></div>
                                <div class="space-around mt-3 mb-1">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control forms_field-input placeholder_login py-1 " placeholder="Repite la contraseña">
                                    <div class="validate"></div>
                                </div>
                                <p class="requisito_contraseña">{{__('*Al menos 8 caracteres')}}</p>
                            </div>
                            <p class="recuperar_contraseña my-3 text-center"><u>{{__('¿Has olvidado tu contraseña?')}}</u><a class=""
                            href=""></a></p>

                            {{-- BUTTON-CREAR CUENTA --}}
                            <div class="mt-4 mb-4 d-flex justify-content-center">
                                <button type="submit" class="text-center loginLinkModal nav-link active mx-3 navbar-register_button px-5 py-2 text-white  navbar-register__a"
                                    aria-current="page">{{__('Crear Cuenta')}}</button> 
                        
                            </div>        
                        </form>
                    </div>                            
        </section>
    </div>
</div>
</div>

    {{-- Modal Idioma --}}
    <div class=" modal fade p-2" id="modal_language" tabindex="-1" role="dialog" aria-labelledby="modal_language_title"
        aria-hidden="true">
        <div class="my-modal my-modal_idioma modal-dialog modal-lg" role="document">
            <div class="modal-content p-3">
                <div class="buttonExitModal m-2">
                    <button type="button" class="btn-close float-end" name="button" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-header d-flex justify-content-center">
                    <h5 class="m-3" id="modal_language_title">{{__('Selecciona tu idioma')}}</h5>
                </div>
                <div class="modal-body justify-content-center d-flex m-3">
                    <div class="nav-item px-2">
                        <x-locale lang="es" country="es" />
                    </div>
                    <div class="nav-item px-2">
                        <x-locale lang="en" country="gb" />
                    </div>
                    <div class="nav-item px-2">
                        <x-locale lang="fr" country="fr" />
                    </div>
                </div>
            </div>
        </div>
    </div>    
    
    @guest
        @if(Route::has('register'))
            <div class="container__buton--subir d-flex justify-content-end">
                <div class="d-none d-lg-flex buttons w-100 align-items-center me-3 justify-content-end">
                    <div class="nav-item mx-1">
                        <a class="nav-link active" aria-current="page" data-bs-toggle="modal" data-bs-target="#dialog1"><img src="/img/icons/login_icon.svg" class="icon__nav" alt="Log in"></a>
                    </div>
                    <div class="nav-item mx-1">
                        <a class="nav-link active" aria-current="page"><img src="/img/icons/fav_icon .svg" class="icon__nav" alt="favoritos"></a>
                    </div>
                    <div class="nav-item mx-1">
                        <a class="nav-link active" aria-current="page" data-bs-toggle="modal"
                            data-bs-target="#modal_language"><img src="/img/icons/language_icon.svg" class="icon__nav" alt="Language"></a>
                    </div>
                    <button  type="button" class="ms-3 p-2 navbar-register_button text-white" data-bs-toggle="modal" data-bs-target="#dialog1"><span class="nav__register--button d-flex justify-content-center align-items-center">{{ __('+ Sube tu producto') }}</span></button>
                </div>
                
            </div>
            <div class="modal fade p-2" id="dialog1">
                <div class="my-modal modal-dialog modal-lg ">
                    <div class="modal-content p-3">
                        <div class="buttonExitModal m-2">
                            <button type="button" class="btn-close float-end" name="button"
                                data-bs-dismiss="modal"></button>
                        </div>
                        <div class="logoModal d-flex justify-content-center">
                            <img class="carrito_logo_modal" src="/img/icons/carrito_logo.svg" alt="logo de share & buy"
                                class="logoModal">
                        </div>
                        <div class="modal-header d-flex justify-content-center">
                            <h4 class="modal-title  text-center" id="exModalLabel"><strong>{{__('Compra y vende en Share&Buy')}}</strong></h4>
                        </div>
                        <div class="d-flex  mt-3 flex-column justify-content-center align-items-center">
                            <p class="fs-5 text-center">{{__('Consigue los mejores precios y gana dinero con lo que no usas')}}.</p>
                            
                            <div class="mt-5 mb-3 d-flex justify-content-center">
                                <button  class="text-center loginLinkModal nav-link active mx-3 navbar-login_button px-5 py-2"
                                    aria-current="page" data-bs-toggle="modal" data-bs-target="#modal_login">{{__('Inicia Sesión')}}</button>
                            </div>
                            <div class="mt-1 mb-4 d-flex justify-content-center">
                                <button class="text-center loginLinkModal nav-link active mx-3 navbar-register_button px-5 py-2 text-white"
                                    aria-current="page" data-bs-toggle="modal" data-bs-target="#modal_register">{{__('Crear Cuenta')}}</button>
                            </div>
                            
        @endif
        
    @if(Route::has('login'))
        {{-- <li class="nav-item navbar-upload px-3">
                        <a class="nav-link active mx-3 navbar-upload__a" aria-current="page" href="#"></a>
                    </li> --}}
    
    @endif
    @else    
    <div class="d-none d-lg-flex buttons w-100 align-items-center me-3 justify-content-end">        
        <div class="nav-item mx-1">
            <a class="nav-link active" href="{{route('wishlist')}}" aria-current="page"><img src="/img/icons/fav_icon .svg" class="icon__nav" alt="favoritos"></a>
        </div>
        <div class="nav-item mx-1">
            <a class="nav-link active" aria-current="page" data-bs-toggle="modal"
                data-bs-target="#modal_language"><img src="/img/icons/language_icon.svg" class="icon__nav" alt="Language"></a>
        </div> 
        <a href="{{route('ads.create')}}" class="log-subeTuProducto"><button type="button" class="ms-3 p-2 navbar-register_button log-subeTuProducto text-white"><span class=" nav__register--button d-flex justify-content-center align-items-center ">{{ __('+ Sube tu producto') }}</span></button></a>       
    </div>                
    <div class="nav-item dropdown" >
        <a class="nav-link dropdown-toggle"  href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false"><strong>¡Hola<font color="#ff385c"> {{ Auth::user()->name }}!</font></strong></a>
        <div class="dropdown-menu px-2 py-2 " aria-labelledby="navbarDropdown">
            @if(Auth::user()->is_revisor)
                <div class="my-2">
                    <a class="dropdown-item" href="{{ route('revisor.home') }}"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                        <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                        <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                      </svg>
                          {{ __('Anuncios por revisar') }}<span class="badge ms-1 rounded-pill text-danger">{{ \App\Models\Ad::TobeRevisionedCount() }}</span>
                    </a>
                </div>
            @endif

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('ads.create') }}"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                    <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z"/>
                  </svg>  {{__('Sube tu anuncio')}}</a>
            </li>
            <div class="my-2">
                <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
                <a id="logoutBtn" class="dropdown-item" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                  </svg>  {{ __('Salir') }}</a>
            </div>
            @endguest
            
        </div>
    </div>
    
</nav>
