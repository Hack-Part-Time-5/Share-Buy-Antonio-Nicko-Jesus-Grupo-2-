<x-layout>
    <x-slot name='title'>Share&Buy - ads</x-slot>
    <section class="hero container-fluid">
        <div class="d-flex flex-column row justify-content-center">
            <div class="banner d-none d-lg-flex justify-content-center m-auto  align-items-center text-white">                                
                <div class="d-flex flex-column flex-wrap">
                    <h1 class="text-center mb-3"> {{__('Compra y vende en un solo click')}}</h1>
                    <div class="d-flex flex-wrap justify-content-center position-relative container__buscador">                        
                        <form action="{{route('search')}}" method="GET" role="search">
                            <input type="search" placeholder=" {{__('Empieza tu búsqueda')}}" class=" buscador_banner placeholder_buscador mx-5" name="q" aria-label="Search">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#FF385C" class="lupa_buscador_icono bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path>
                            </svg>              
                            <button type="submit" class="navbar-register_button text-white px-4 py-2">{{__('Buscar')}}</button>               
                        </form>                                                         
                    </div>                                                            
                </div>                                                  
            </div>
            {{-- codigo para responsive --}}
            <div class="row banner d-flex d-lg-none justify-content-center m-auto p-1  align-items-center text-white">                                
                <div class="row d-flex flex-column flex-wrap">
                    <h1 class="text-center mb-3"> {{__('Compra y vende en un solo click')}}</h1>
                    <div class="d-flex justify-content-center flex-wrap position-relative">
                        <input type="text" placeholder=" {{__('Empieza tu búsqueda')}}" class="buscador_banner placeholder_buscador ">                    
                        <button type="button" class="navbar-register_button text-white">{{__('Buscar')}}</button>                        
                    </div>                                                            
                </div>                                 
            </div>
            <div class="linea--banner mb-5 py-2 d-flex justify-content-center align-items-center">
                <img src="\img\icons\info_icon.svg" alt="info" class="info_icon_home"><h6 class="m-0">{{__('Para tu tranquilidad')}} <strong><font color="#253238">{{__('Devolución gratuita')}}</font></strong></h6>
            </div>
        </div>
    </section>
    <div class="container m-auto  d-lg-flex flex-column justify-content-center">        
        <section class="categories">           
            <div class=" flex-column d-flex justify-content-center">            
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
             
        <section class="ads2 mt-3 d-flex flex-column justify-content-center">
            <h2 class=" mt-5">{{__('Subidos recientemente')}}</h2>
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
                        <x-slot name='favorite'>{{ route('favorite.add', $ad->id) }}</x-slot>                    
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
                <a href="{{route('list')}}"><button class="navbar-register_button text-white px-3 py-2 mb-5">{{__('Ver más')}}</button></a>
            </div>
        </section>
        <section class="banner_secundario">
            
            <div class="pt-5 px-4 d-flex flex-column align-items-start">                
                <h2 class="text-white">{{__('Encuentra los mejores artículos y')}} <br> {{__('si no los encuentras, véndelos tú')}}</h2>
                @guest
                    @if(Route::has('login'))
                        <button class="mt-5 navbar-register_button text-white px-3 py-2 mb-5"><a class="nav-link active" aria-current="page" data-bs-toggle="modal" data-bs-target="#dialog1">{{__('Registrate')}}</a></button>                    
                    @endif
                    @else    
                        <a href="{{route('ads.create')}}" class="log-subeTuProducto"><button type="button" class="ms-3 my-5 p-2 navbar-register_button log-subeTuProducto text-white"><span class="nav__register--button d-flex justify-content-center align-items-center ">{{ __('+ Sube tu producto') }}</span></button></a>       
                @endguest                                
            </div>
                        
        </section>
        <section class="blogs">
            <h2 class="mx-5 mt-5">{{__('Últimos artículos')}}</h2>
            
            <div class="card-group mt-5  ">
                <div class="card mx-5 border-0  mb-5">
                  <img class="card-img-top blog_img cards_home_anuncios" src="\img\img_blog_2.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title mt-3">¿Cómo vender en Share&Buy?</h5>
                    <p class="card-text mt-2 p_blog">Si te estas preguntando cómo vender en Share&Buy y qué pasos debes seguir para publicar tu primer anuncio, has llegado al sitio indicado....</p>
                    <a href="{{route('blog1')}}" class="a_blog">Leer más</a>
                  </div>
                </div>
                <div class="card mx-5 border-0  mb-5 ">
                  <img class="card-img-top blog_img cards_home_anuncios" src="\img\img_blog_1.jpg" alt="Card image cap">
                  <div class="card-body ">
                    <h5 class="card-title mt-3">¿Cómo funciona Share&Buy?</h5>
                    <p class="card-text mt-2 p_blog">Para explicar que es Share&Buy, primero tenemos que saber que la venta de los artículos en línea no es una idea nueva...</p>
                    <a href="#" class="a_blog">Leer más</a>
                  </div>
                </div>
                <div class="card mx-5 border-0  mb-5">
                  <img class="card-img-top blog_img cards_home_anuncios" src="\img\img_blog_3.jpg" alt="Card image cap">
                  <div class="card-body ">
                    <h5 class="card-title mt-3">¿Qué es Share&Buy?</h5>
                    <p class="card-text mt-2 p_blog">Si te estas preguntando cómo vender en Share&Buy y qué pasos debes seguir para publicar tu primer anuncio, has llegado al sitio indicado....</p>
                    <a href="#" class="a_blog">Leer más</a>
                  </div>
                </div>
              </div>
              <section class="banner_segundo_home mb-5">
            
                <div class="pt-5 px-4 d-flex flex-column align-items-start">                
                    <h2 class="text-white">{{__('Estamos aquí')}} <br> {{__('para ti')}}</h2>
                    
                    <div class="mt-5 mb-5">
            <a href="{{route('contact')}}"><button  type="button" class=" ms-1 p-2 navbar-register_button text-white" ><span class="nav__register--button d-flex justify-content-center align-items-center">{{ __('Contáctanos') }}</span></button></a>     
        </div>        
                                                  
                </div>
                            
            </section>
            <section class="pre-footer mt-5">
                <div class="row1">
                    <div class="pre-footer-row">
                        <div class="pre-footer-item">
                            <div class="pre-footer-item-logo">
                                <img class=""  alt="FAQ" title="FAQ" src="\img\icons\pre-footer\thumb.svg">
                            </div>
                            <div class="pre-footer-item-title mt-2">
                                                        <span style="" class="obfuscateLink " data-ref="aHR0cHM6Ly9pbnNweXJpYS5jb20vZXMvc29wb3J0ZS9heXVkYS11c3Vhcmlvcw==">Preguntas y respuestas</span>
                                                </div>
                            <div class="pre-footer-item-text">
                                                        Visita nuestro <span style="" class="obfuscateLink link">Centro de Ayuda</span>                                        
                            </div>
                        </div>
            
                        <div class="pre-footer-item">
                            <div class="pre-footer-item-logo">
                                <img class="" data-src="\img\icons\pre-footer\heart.svg" alt="Llama" title="Llama" src="\img\icons\pre-footer\heart.svg">
                            </div>
                            <div class="pre-footer-item-title mt-2">
                                                        <a href="tel:+34660101016">+34 690141618</a>
                                                </div>
                            <div class="pre-footer-item-text">
            
                                                        <a class="link" href="tel:+34660101016">Llama</a> o envía <a target="_blank" href="https://wa.me/+34690141618?text=hola%2C+estoy+interesad%40+en..."><img class="" alt="WhatsApp" title="WhatsApp" style="height: 19px;margin-bottom: -4px;" src="\img\icons\whatsapp.png"></a><br>
                                                </div>
                        </div>
            
                        <div class="pre-footer-item">
                            <div class="pre-footer-item-logo">
                                <img class=""  alt="Mail" title="Mail" src="\img\icons\pre-footer\mail.svg">
                            </div>
                            <div class="pre-footer-item-title mt-2">
                                <span style="" class="obfuscateLink ">Envíanos un mail</span>
                            </div>
                            <div class="pre-footer-item-text">
                                Estamos <span style="" class="obfuscateLink link" >aquí</span> para ti                </div>
                        </div>
                    </div>
                </div>
            </section>
        
        </div>  
         
       
        </section> 
         
    </div>
</x-layout>          
              
                                                            
                        
                                                    
                        
                                                            
                        
                                                            
                        
                                                            
    
            
            
            {{-- <div class="d-flex flex-row justify-content-center m-auto">
                    <div class="card">
                        <img src="https://i.pinimg.com/736x/87/2b/46/872b463134db6ed9bb62c59dc2191a2e.jpg" class="card-img-top img__card" alt="...">
                    <h3>sdasdsads</h3>
                    <h6>sdsddsdas</h6>
                    
                    </div>
                    <div class="card">
                        <img src="https://i.pinimg.com/736x/87/2b/46/872b463134db6ed9bb62c59dc2191a2e.jpg" class="card-img-top img__card" alt="...">
                        <h3>sdasdsads</h3>
                        <h6>sdsddsdas</h6>
                    </div>
                    <div class="card">
                        <img src="https://i.pinimg.com/736x/87/2b/46/872b463134db6ed9bb62c59dc2191a2e.jpg" class="card-img-top img__card" alt="...">
                        <h3>sdasdsads</h3>
                        <h6>sdsddsdas</h6>
                    </div>
                    <div class="card">
                        <img src="https://i.pinimg.com/736x/87/2b/46/872b463134db6ed9bb62c59dc2191a2e.jpg" class="card-img-top img__card" alt="...">
                        <h3>sdasdsads</h3>
                        <h6>sdsddsdas</h6>
                    </div> --}}
                    {{-- <x-card_blog2>
                        <div class="position-relative container__img--card2">                                                
                            <img src="https://i.pinimg.com/736x/87/2b/46/872b463134db6ed9bb62c59dc2191a2e.jpg" class="card-img-top img__card" alt="...">
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
                </div>             --}}
