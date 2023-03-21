<x-layout>
    <x-slot name='title'>Share&Buy - ads</x-slot>
    <section class="hero container-fluid">
        <div class="d-flex flex-column row justify-content-center">
            <div class="banner d-none d-lg-flex justify-content-center m-auto  align-items-center text-white">                                
                <div class="d-flex flex-column flex-wrap">
                    <h1 class="text-center mb-3"> {{__('Compra y vende en un solo click')}}</h1>
                    <div class="d-flex flex-wrap position-relative container__buscador">
                        <input type="text" placeholder=" {{__('Empieza tu búsqueda')}}" class="buscador_banner placeholder_buscador mx-3">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="lupa_buscador_icono bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                          </svg>              
                        <button type="button" class="navbar-register_button text-white px-4 py-2">{{__('Buscar')}}</button>                        
                    </div>                                                            
                </div>  
                <div class="mx-3">
                    <img class="carrito_header d-none d-lg-block" src="/img/carrito_header.png" alt="imagen de carrito">
                </div>                                  
            </div>
            {{-- codigo para responsive --}}
            <div class="row banner d-flex d-lg-none justify-content-center m-auto p-1  align-items-center text-white">                                
                <div class="row d-flex flex-column flex-wrap">
                    <h1 class="text-center mb-3"> {{__('Compra y vende en un solo click')}}</h1>
                    <div class="d-flex justify-content-center flex-wrap position-relative container__buscador">
                        <input type="text" placeholder=" {{__('Empieza tu búsqueda')}}" class="buscador_banner placeholder_buscador mx-3">                    
                        <button type="button" class="navbar-register_button text-white px-4">{{__('Buscar')}}</button>                        
                    </div>                                                            
                </div>                                 
            </div>
            <div class="linea--banner mb-5 py-2 d-flex justify-content-center align-items-center">
                <img src="\img\icons\info_icon.svg" alt="info" class="info_icon_home"><h6 class="m-0">{{__('Para tu tranquilidad')}} <strong>{{__('Devolución gratuita')}}</strong></h6>
            </div>
        </div>
    </section>
    <div class="container m-auto  d-lg-flex flex-column justify-content-center">        
        <section class="categories">
           
            <div class=" flex-column d-flex justify-content-center">            
            <h2 class="mx-1 d-none d-sm-block">{{__('Descubre nuestras categorías')}}</h2>
            <div class="mt-5 d-flex justify-content-center align-items-center flex-column">            
                <div class="owl-carousel ">
                    @foreach ($categories as $category)
                        <div class="d-flex flex-column ">                         
                            <div><a href="{{route('category.ads', $category)}}" class="category-items d-flex  flex-column"><img src="{{$category->img}}" class="categories_icons m-auto" alt=""><span class="text-center m-auto">{{__($category->name)}}</span></a>
                        </div> 
                    </div>                  
                    @endforeach                
                </div>            
            </div>
            <div class="d-flex justify-content-center">
                <li class="nav-item dropdown category__list-item mb-5 d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('Categorías')}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @foreach ($categories as $category)
                        <li><a href="{{route('category.ads', $category)}}" class="dropdown-item">{{__($category->name)}}</a></li>
                    @endforeach
                    </ul>
                </li>                    
            </div>                    
        </section>
        {{-- <section class="ads">
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
        </section> --}}
        <section class="ads2 mt-5 d-flex flex-column justify-content-center">
            <h2 class="mx-5 mt-5">{{__('Subidos recientemente')}}</h2>
            <div class="row mt-5 m-auto">        
                @forelse ($ads as $ad)
                <div class="position-relative d-flex justify-content-center col-12 col-md-6 col-xl-3 justify-content-center">
                    {{-- <div class="fondo_icon icono_fav_card">
                        <a href="#" class=""><img src="/img/icons/fav_icon_grey.svg" alt="" class="icon_like"></a>
                    </div>   --}}                   
                    {{-- <span class="m-2 category_name text-white"><a href="{{route('category.ads',$ad->category)}}" class="a_category_name">{{$ad->category->name}}</a></span>                    --}}
                    {{-- @if ($ad->images()->count() > 0)
                        <img src="{{Storage::url($ad->images()->first()->path)}}" alt="card-img-top img__card">     
                    @else                                          
                        <img src="{{$img ?? 'https://picsum.photos/700/600?a'}}" class="card-img-top img__card" alt="...">
                    @endif --}}
                    <x-card_blog>  
                        @if ($ad->images()->count() > 0)
                        <x-slot name='image'>{{$ad->images()->first()->getUrl(500,500)}}</x-slot>
                        @else
                        <x-slot name='image'>{{'https://picsum.photos/700/600?a'}}</x-slot>    
                        @endif
                        <x-slot name='show'>{{route('ads.show', $ad)}}</x-slot>                                                      
                        <x-slot name='category'>{{__($ad->category->name)}}</x-slot>
                        <x-slot name='categoryLink'>{{route('category.ads',$ad->category)}}</x-slot> 
                        <x-slot name='categoryName'>{{__($ad->category->name)}}</x-slot>                        
                        <x-slot name='title'>{{$ad->title}}</x-slot>                        
                        <x-slot name='price'>{{$ad->price}}€</x-slot>
                    </x-card_blog>       
                </div>
                @empty
                <div class="col-12">
                    <h2>{{__('Uy.. parece que no hay nada de esta categoría')}}</h2>
                    <a href="{{route('ads.create')}}" class="btn btn-success">Vende tu primer objeto</a> o <a href="{{route('home')}}" class="btn btn-primary">Vuelve a la home</a>
                </div>
                @endforelse
            </div>                    
            <div class="d-flex justify-content-center">
                <button class="navbar-register_button text-white px-3 py-2 mb-5">{{__('Ver más')}}</button>
            </div>
        </section>
        <section class="banner_secundario">
            <div class="pt-5 px-4 d-flex flex-column align-items-start">                
                    <h2 class="text-white">{{__('Encuentra los mejores artículos y')}} <br> {{__('si no los encuentras, véndelos tú')}}</h2>
                    <button class="mt-5 navbar-register_button text-white px-3 py-2 mb-5"><a class="nav-link active mx-3 " aria-current="page" href="{{route('login')}}">{{__('Regístrate')}}</a></button>
                
            </div>
        </section>
        <section class="blogs">
            <h2 class="mx-5 mt-5">{{__('Últimos artículos')}}</h2>
            <div class="row mt-4  ">
                <div class="d-flex justify-content-center col-12 col-md-6 col-xl-3 m-auto">
                    <x-card_blog2>
                        <x-slot name='title'>Blog 1</x-slot>
                        <x-slot name='body'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </x-slot>
                    </x-card_blog>
                </div>
                <div class="d-flex justify-content-center col-12 col-md-6 col-xl-3 m-auto">    
                    <x-card_blog2>
                        <x-slot name='title'>Blog 2</x-slot>
                        <x-slot name='body'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </x-slot>
                    </x-card_blog>
                </div>
                <div class="d-flex justify-content-center col-12 col-md-6 col-xl-3 m-auto">    
                    <x-card_blog2>
                        <x-slot name='title'>Blog 3</x-slot>
                        <x-slot name='body'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </x-slot>
                    </x-card_blog>
                </div>
                <div class="d-flex justify-content-center col-12 col-md-6 col-xl-3 m-auto">    
                    <x-card_blog2>
                        <x-slot name='title'>Blog 4</x-slot>
                        <x-slot name='body'>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </x-slot>
                    </x-card_blog>                
                </div>            
            </div>    
        </section>         
    </div>
</x-layout>