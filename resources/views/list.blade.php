<x-layout>
    <x-slot name='title'>Share&Buy -Listado de productos</x-slot>
    
    <div class="container m-auto  d-lg-flex flex-column justify-content-center">        
        <x-search/>
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
            <h2 class=" mt-3">{{__('Todos los anuncios')}}</h2>
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
                        <x-slot name='favorite'>{{ route('favorite.add', $ad->id) }}</x-slot>
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
                <a href="{{route('home')}}"><button class="navbar-register_button text-white px-3 py-2 mb-5">{{__('Volver')}}</button></a>
            </div>
        </section>
        <section class="banner_secundarioList">
            
            <div class="pt-5 px-4 d-flex flex-column align-items-start">                
                <h2 class="text-white px-3">{{__('Encuentra los mejores artículos y')}}</h2> 
                <h2 class="text-white mt-3 px-3">  {{__('si no los encuentras, véndelos tú')}}</h2>
                @guest
                    @if(Route::has('login'))
                        <button class="mt-5 navbar-register_button text-white px-3 py-2 mb-5"><a class="nav-link active" aria-current="page" data-bs-toggle="modal" data-bs-target="#dialog1">{{__('Registrate')}}</a></button>                    
                    @endif
                    @else    
                        <a href="{{route('ads.create')}}" class="log-subeTuProducto"><button type="button" class="ms-3 my-5 p-2 navbar-register_button log-subeTuProducto text-white"><span class="nav__register--button d-flex justify-content-center align-items-center ">{{ __('+ Sube tu producto') }}</span></button></a>       
                @endguest
                
                
            </div>
                
        </section>
        {{-- <section class="blogs">
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
        </section> --}}    
        <section class="categories mt-5">           
            <div class=" flex-column d-flex justify-content-center mt-5">            
            <h2 class="mx-1 d-block">{{__('Descubre nuestras categorías')}}</h2>
            <div class="mt-5 d-flex justify-content-center align-items-center flex-column">            
                <div class="owl-carousel">
                    @foreach ($categories as $category)
                        <div class="d-flex flex-column ">                         
                            <div><a href="{{route('category.ads', $category)}}" class=" category-items d-flex  flex-column"><img src="{{$category->img}}" class="categories_icons m-auto" alt=""><span class="text-center m-auto pt-2">{{__($category->name)}}</span></a>
                        </div> 
                    </div>                  
                    @endforeach                
                </div>            
            </div>                     
            </div>                    
        </section>     
    </div>
</x-layout>