<nav class="navbar container m-auto navbar-expand-lg  bg-body-tertiary d-flex py-2 ">
    <div class="d-flex flex-nowrap container-fluid justify-content-between">
        <a class="navbar-brand letra_logo" href="{{ route('home') }}">
            <img  src="/img/icons/share&buy_logo.svg" alt="logo de share&buy">
        </a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>        
    </div>   
    <div class="d-block d-lg-none">
        <div class="collapse navbar-collapse col-6 justify-content-center " id="navbarSupportedContent">
            <div class="navbar-nav mb-2 mb-lg-0 me-0 d-flex">
                <a href="" class="">Idioma</a>
            </div>
            <div class="navbar-nav mb-2 mb-lg-0 me-0 d-flex justify-content-end ">
                <a href="" class="">Favoritos</a>
            </div>
            <div class="navbar-nav mb-2 mb-lg-0 me-0 d-flex justify-content-end ">
                <a href="" class="">Iniciar sesión</a>
            </div>
        </div>
    </div> 
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
            
        </div>
        
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
                                    <p class="my-3 text-center"><u>¿Has olvidado tu contraseña?</u><a class=""
                                    href="{{ route('register') }}"></a></p>
                                    {{-- BUTTON-LOGIN --}}
                                    <div class="mt-5 mb-5 d-flex justify-content-center">
                                        <button type="submit" class="text-center loginLinkModal nav-link active mx-3 navbar-register_button px-5 py-2 text-white  navbar-register__a"
                                            aria-current="page">Iniciar sesión</a> 
                                
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
            <h4 class=" text-center" id="exModalLabel"><strong>Únete a Share&Buy</strong></h4>
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
                             {{-- NAOMBRE Y APELLIDOS--}}
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
                                <p class="requisito_contraseña">*Al menos 8 caracteres</p>
                            </div>
                            <p class="recuperar_contraseña my-3 text-center"><u>¿Has olvidado tu contraseña?</u><a class=""
                            href=""></a></p>

                            {{-- BUTTON-CREAR CUENTA --}}
                            <div class="mt-4 mb-4 d-flex justify-content-center">
                                <button type="submit" class="text-center loginLinkModal nav-link active mx-3 navbar-register_button px-5 py-2 text-white  navbar-register__a"
                                    aria-current="page">Crear Cuenta</button> 
                        
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
                    <h5 class="m-3" id="modal_language_title">Selecciona tu idioma</h5>
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
                    <button type="button" class="ms-3 p-2 navbar-register_button text-white" data-bs-toggle="modal" data-bs-target="#dialog1"><span class="nav__register--button d-flex justify-content-center align-items-center">{{ __('+ Sube tu producto') }}</span></button>
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
                            <h4 class="modal-title  text-center" id="exModalLabel"><strong>Compra y vende en Share&Buy</strong></h4>
                        </div>
                        <div class="d-flex  mt-3 flex-column justify-content-center align-items-center">
                            <p class="fs-5 text-center">Consigue los mejores precios y gana dinero con lo que no usas.</p>
                            
                            <div class="mt-5 mb-3 d-flex justify-content-center">
                                <button  class="text-center loginLinkModal nav-link active mx-3 navbar-login_button px-5 py-2"
                                    aria-current="page" data-bs-toggle="modal" data-bs-target="#modal_login">Inicia
                                    Sesión</button>
                            </div>
                            <div class="mt-1 mb-4 d-flex justify-content-center">
                                <button class="text-center loginLinkModal nav-link active mx-3 navbar-register_button px-5 py-2 text-white"
                                    aria-current="page" data-bs-toggle="modal" data-bs-target="#modal_register">Crear Cuenta</button>
                            </div>
                            
        @endif
    @if(Route::has('login'))
        {{-- <li class="nav-item navbar-upload px-3">
                        <a class="nav-link active mx-3 navbar-upload__a" aria-current="page" href="#"></a>
                    </li> --}}
    @endif
    @else                    
    <div class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
            aria-expanded="false"><strong><font color="#253238">¡Hola {{ Auth::user()->name }}!</font></strong></a>
        <div class="dropdown-menu px-2" aria-labelledby="navbarDropdown">
            @if(Auth::user()->is_revisor)
                <div class="my-2">
                    <a class="dropdown-item" href="{{ route('revisor.home') }}">
                        {{ __('Anuncios por revisar') }}<span class="badge ms-2 rounded-pill text-danger">{{ \App\Models\Ad::TobeRevisionedCount() }}</span>
                    </a>
                </div>
            @endif

            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('ads.create') }}">Sube tu anuncio
                    </a>
            </li>
            <div class="my-2">
                <form id="logoutForm" action="{{ route('logout') }}" method="POST">
                    @csrf
                </form>
                <a id="logoutBtn" class="dropdown-item" href="#">{{ __('Salir') }}</a>
            </div>
            @endguest
        </div>
    </div>
</nav>
