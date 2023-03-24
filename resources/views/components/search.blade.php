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
                    <div class=" mx-5">
                        <button class="btn btn-secondary dropdown__button--moda dropdown-toggle px-4 py-2 rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Categorías
                        </button>
                        <ul class="dropdown-menu">
                            <div class="container mt-3 mb-3">
                                <div class="row ">
                                  <div class="col">
                                    <div class="">
                                        <a href="http://127.0.0.1:8000/category/Moda/ads" class="btn m-3 button_grid_categories" type="button">
                                            <img src="\img\icons\icons_categories\Moda.svg" class="icon_grid"><div class="text-center"><p class="mt-1 p-title">Moda</p></div></a>
                                    </div>
                                    </div>
                                  <div class="col">
                                    <div class="">
                                        <a href="http://127.0.0.1:8000/category/Deporte/ads" class="btn m-3 button_grid_categories" type="button">
                                            <img src="\img\icons\icons_categories\Deporte.svg" class="icon_grid"><div class="text-center"><p class="mt-1 p-title">Deporte</p></div></a>
                                    </div>
                                    </div>
                                    <div class="col">
                                        <div class="">
                                            <a href="http://127.0.0.1:8000/category/Coleccionismo/ads" class="btn m-3 button_grid_categories" type="button">
                                                <img src="\img\icons\icons_categories\coleccionismo.svg" class="icon_grid"><div class="text-center"><p class="mt-1 p-title">Coleccionismo</p></div></a>
                                        </div>
                                        </div>
                                        <div class="col">
                                              <div class="">
                                                  <a href="http://127.0.0.1:8000/category/Electrónica/ads" class="btn m-3 button_grid_categories" type="button">
                                                      <img src="\img\icons\icons_categories\electronica.svg" class="icon_grid"><div class="text-center"><p class="mt-1 p-title">Electrónica</p></div></a>
                                              </div>
                                              </div>
                                             <div class="col">
                                          <div class="">
                                              <a href="http://127.0.0.1:8000/category/Hogar%20y%20Jardín/ads" class="btn m-3 button_grid_categories" type="button">
                                                  <img src="\img\icons\icons_categories\hogar_y_jardin.svg" class="icon_grid"><div class="text-center"><p class="mt-1 p-title">Hogar y jardín</p></div></a>
                                          </div>
                                          </div> 
                                        <div class="col">
                                          <div class="">
                                              <a href="http://127.0.0.1:8000/category/electrodomesticos/ads" class="btn m-3 button_grid_categories" type="button">
                                                  <img src="\img\icons\icons_categories\electrodomesticos.svg" class="icon_grid"><div class="text-center"><p class="mt-1 p-title">Maquinaria</p></div></a>
                                          </div>
                                          </div>
                                          <div class="col">
                                            <div class="">
                                                <a href="http://127.0.0.1:8000/category/inmobiliaria/ads" class="btn m-3 button_grid_categories" type="button">
                                                    <img src="\img\icons\icons_categories\instrumentos_musicales.svg" class="icon_grid"><div class="text-center"><p class="mt-1 p-title">Música</p></div></a>
                                            </div>
                                            </div>
                                            <div class="col">
                                                <div class="">
                                                    <a href="http://127.0.0.1:8000/category/Motor%20y%20accesorios/ads" class="btn m-3 button_grid_categories" type="button">
                                                        <img src="\img\icons\icons_categories\motoryaccesorios.svg" class="icon_grid"><div class="text-center"><p class="mt-1 p-title">Motor y accesorios</p></div></a>
                                                </div>
                                                </div>

                                                <div class="col">
                                                    <div class="">
                                                        <a href="http://127.0.0.1:8000/category/servicios/ads" class="btn m-3 button_grid_categories" type="button">
                                                            <img src="\img\icons\icons_categories\servicios.svg" class="icon_grid"><div class="text-center"><p class="mt-1 p-title">Servicios</p></div></a>
                                                    </div>
                                                    </div>
                                                  <div class="col">
                                                    <div class="">
                                                        <a href="http://127.0.0.1:8000/category/Videojuegos/ads" class="btn m-3 button_grid_categories" type="button">
                                                            <img src="\img\icons\icons_categories\videojuegos.svg" class="icon_grid"><div class="text-center"><p class="mt-1 p-title">Videojuegos</p></div></a>
                                                    </div>
                                                    </div>
                                            </div>
                                            
                                </div>
                            </div>
                </div>
                
            </div>
        </div>
        <hr>
       