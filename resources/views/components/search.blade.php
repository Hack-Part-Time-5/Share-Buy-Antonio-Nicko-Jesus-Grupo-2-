<hr>
        <div class="container__buscador--show d-flex justify-content-center">
            <div class="d-flex justify-content-center searcher__container m-auto">
                <div class=" container__form--show d-flex justify-content-center w-75 my-4 flex-wrap">
                    <div class="d-flex d-lg-none justify-content-center flex-wrap position-relative container__buscador">
                        {{-- <form action="{{route('search')}}" method="GET" role="search" class="d-flex flex-column justify-content-center align-items-center">
                            <input type="search" placeholder=" {{__('Empieza tu búsqueda')}}" class="buscador__show placeholder_buscador mx-3 mb-3 " name="q">                    
                            <button type="submit" class="navbar-register_button text-white px-4">{{__('Buscar')}}</button>                        
                        </form> --}}
                        <form action="{{route('search')}}" method="GET" role="search">
                            <input type="search" placeholder=" {{__('Empieza tu búsqueda')}}" class=" buscador_banner_list buscador__show placeholder_buscador mx-5" name="q" aria-label="Search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FF385C" class="lupa_buscador_icono bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                            </svg>              
                            <button type="submit" class="navbar-register_button text-white px-4 py-2">{{__('Buscar')}}</button>               
                        </form>   
                    </div>
                    <div class="justify-content-start w-100 d-none d-lg-flex flex-nowrap position-relative container__buscador">
                        {{-- <input type="text" placeholder=" {{__('Empieza tu búsqueda')}}" class="w-75 buscador__show buscador_banner_list placeholder_buscador mx-3">                    
                        <button type="button" class="ms-3 navbar-register_button text-white px-4">{{__('Buscar')}}</button>           --}}    
                        <form action="{{route('search')}}" method="GET" role="search">
                            <input type="search" placeholder=" {{__('Empieza tu búsqueda')}}" class="  buscador_banner_list placeholder_buscador mx-5" name="q" aria-label="Search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FF385C" class="lupa_buscador_icono bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                            </svg>              
                            <button type="submit" class="navbar-register_button text-white px-4 py-2">{{__('Buscar')}}</button>               
                        </form>             
                    </div>      
                </div>        
                <div class="container__buttons--show d-none d-lg-flex justify-content-center  my-4">
                    <div class="dropdown mx-3 {{-- d-none --}} d-xl-block">
                        <button class="btn btn-secondary dropdown__button--filtros dropdown-toggle px-3 rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Filtros
                        </button>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <div class="dropdown mx-3 d-none d-lg-block">
                        <button class="btn btn-secondary dropdown__button--moda dropdown-toggle px-3 rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Moda
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <div class="dropdown mx-3 d-none d-lg-block">
                        <button class="btn btn-secondary dropdown__button--filtros dropdown-toggle px-3 rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Precio
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <div class="dropdown mx-3 d-none d-lg-block">
                        <button class="btn btn-secondary dropdown__button--filtros dropdown-toggle px-3 rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Estado
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <hr>
       