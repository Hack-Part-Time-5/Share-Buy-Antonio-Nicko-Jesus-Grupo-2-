<hr>
        <div class="container__buscador--show d-flex justify-content-center">
            <div class="d-flex justify-content-center searcher__container m-auto">
                <div class=" container__form--show d-flex justify-content-center w-75 my-4 flex-wrap">
                    <div class="d-flex d-lg-none justify-content-center flex-wrap position-relative container__buscador">
                        <form action="{{route('search')}}" method="GET" role="search" class="d-flex flex-column justify-content-center align-items-center">
                            <input type="search" placeholder=" {{__('Empieza tu búsqueda')}}" class="buscador__show placeholder_buscador mx-3 mb-3 ">                    
                            <button type="submit" class="navbar-register_button text-white px-4">{{__('Buscar')}}</button>                        
                        </form>
                        
                    </div>
                    <div class="justify-content-start w-100 d-none d-lg-flex flex-nowrap position-relative container__buscador">
                        <input type="text" placeholder=" {{__('Empieza tu búsqueda')}}" class="w-75 buscador__show buscador_banner placeholder_buscador mx-3">                    
                        <button type="button" class="ms-3 navbar-register_button text-white px-4">{{__('Buscar')}}</button>                        
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
       