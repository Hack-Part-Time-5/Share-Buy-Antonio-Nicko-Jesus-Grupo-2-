<x-layout>
    <x-slot name='title'>Share&Buy - ads</x-slot>
    <div class="container-fluid  d-lg-flex flex-column justify-content-center">
        <div class="d-flex flex-column row justify-content-center">
            <div class="banner d-none d-lg-flex justify-content-center m-auto  align-items-center text-white">                                
                <div class="d-flex flex-column flex-wrap">
                    <h1 class="text-center mb-3"> Compra y vende en un solo click</h1>
                    <div class="d-flex justify-content-center flex-wrap position-relative container__buscador">
                        <input type="text" placeholder="Empieza tu busqueda" class="buscador_banner placeholder_buscador mx-3">                    
                        <button type="button" class="navbar-register_button text-white px-4">Buscar</button>                        
                    </div>                                                            
                </div>  
                <div class="mx-3">
                    <img class="carrito_header d-none d-lg-block" src="/img/carrito_header.png" alt="imagen de carrito">
                </div>                                  
            </div>
            {{-- codigo para responsive --}}
            <div class="row banner d-flex d-lg-none justify-content-center m-auto  align-items-center text-white">                                
                <div class="row d-flex flex-column flex-wrap">
                    <h1 class="text-center mb-3"> Compra y vende en un solo click</h1>
                    <div class="d-flex justify-content-center flex-wrap position-relative container__buscador">
                        <input type="text" placeholder="Empieza tu busqueda" class="buscador_banner mx-3">                    
                        <button type="button" class="navbar-register_button text-white px-4">Buscar</button>                        
                    </div>                                                            
                </div>                                 
            </div>
            <div class="linea--banner mb-5 py-2 d-flex justify-content-center align-items-center">
                <h6 class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
            </div>
        </div>
        <h2 class="mx-5 d-none d-sm-block">Categorias</h2>
        <div class="categorias d-none d-md-flex justify-content-center">            
            <div class="categorias-carrousel d-flex  mb-5 ">
                @foreach ($categories as $category)
                    <div class="d-flex flex-column justify-content-center align-items-center">
                        <img src="{{$category->img}}" class="categories_icons" alt="">
                        <li class="category__list-item "><a href="{{route('category.ads', $category)}}" class="category-items">{{$category->name}}</a></li>
                    </div>                   
                @endforeach                
            </div>            
        </div>
        <div class="d-flex justify-content-center">
            <li class="nav-item dropdown category__list-item mb-5 d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @foreach ($categories as $category)
                    <li><a href="{{route('category.ads', $category)}}" class="dropdown-item">{{$category->name}}</a></li>
                  @endforeach
                </ul>
              </li>                    
        </div>                    
        <div class="row cards_home_anuncios m-auto">        
            @forelse ($ads as $ad)
            <div class="col-12 col-md-4">
                <div class="card mb-5">
                    <img src="https://picsum.photos/700/600?a" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$ad->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{$ad->price}}</h6>
                        <p class="card-text">{{$ad->body}}</p>
                        <div class="card-subtitle mb-2">
                            <strong><a href="{{route('category.ads',$ad->category)}}">#{{$ad->category->name}}</a></strong>
                            <i>{{$ad->created_at->format('d/m/Y')}}</i>
                        </div>
                        <div class="card-subtitle mb-2">
                            <small>{{ $ad->user->name }}</small>
                        </div>
                        <a href="{{route('ads.show', $ad)}}" class="btn btn-primary">Mostrar Más</a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <h2>Uyy.. parece que no hay nada de esta categoría</h2>
                <a href="{{route('ads.create')}}" class="btn btn-success">Vende tu primer objeto</a> o <a href="{{route('home')}}" class="btn btn-primary">Vuelve a la home</a>
            </div>
            @endforelse
        </div>                    
        <div class="d-flex justify-content-center">
            <button class="navbar-register_button text-white px-3 mb-5">Ver mas</button>
        </div>
        <div class="container-fluid p-0 d-flex justify-content-center">
            <div class="banner_secundario pt-5 px-4">
                <h2 class="text-white">Encuentra los mejores articulos <br> y si no los encuentras vendelos tu</h2>
                <button class="mt-5 navbar-register_button text-white px-3 mb-5"><a class="nav-link active mx-3 text-white  navbar-register__a" aria-current="page" href="{{route('login')}}">Ver mas</a></button>
            </div>
        </div>
    </div>
</x-layout>