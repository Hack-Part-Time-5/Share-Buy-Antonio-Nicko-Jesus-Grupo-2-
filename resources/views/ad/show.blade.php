<x-layout>
    <div class="container m-auto  d-lg-flex flex-column justify-content-center">        
        <x-search/>
        <div class="container px-3">
            <div class="row my-5">
                <div class="col-12 col-md-6 px-4">
                    <div id="adImages" class="carousel slide" data-bs-ride="true">
                        <div class="carrousel-indicators">
                            {{-- @for ($i = 0; $i < $ad->images()->count(); $i++)
                                <button type="button" data-bs-target='#adImages' data-bs-slide-to="{{$i}}" class="@if($i == 0) active @endif" aria-current="true" aria-label="Slide {{$i + 1}}"></button>                            
                            @endfor --}}
                        </div>
                        <div class="carousel-inner carousel__show">
                            @foreach ($ad->images as $image )
                                <div class="carousel-item @if($loop->first) active @endif justify-content-center col-12">
                                    @if ($ad->images()->count() > 0)
                                        <img src="{{$image->getUrl(500,500)}}" alt="" class="d-block m-auto">
                                    @else
                                        <img src="https://picsum.photos/700/600?a" alt="" class="d-block w-100">
                                    @endif                                    
                                </div>                             
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#adImages" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#adImages" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    {{-- <div class="owl-conainer">
                        <div class="owl-carousel owl-theme">
                            @foreach ($ad->images as $image )
                                <div class="item @if($loop->first) active @endif">
                                    @if ($ad->images()->count() > 0)
                                        <img src="{{Storage::url($image->path)}}" alt="" class="d-block w-100">    
                                    @else
                                        <img src="https://picsum.photos/700/600?a" alt="" class="d-block w-100">
                                    @endif                                    
                                </div>                             
                            @endforeach
                        </div>

                        
                    </div> --}}
                </div>
                <div class="container__informacion--ad col-12 col-md-6 position-relative">
                    <div class="container__show--info my-2"><p class="titulo__ad">{{$ad->title}}</p></div>
                    <div class="container__show--info my-2"><strong class="precio">{{$ad->price}}€</strong></div>
                    <div class="container__show--info my-2">
                        <a href="{{route('category.ads',$ad->category)}}" class="btn btn-primary category__tag rounded-pill px-3 py-1 mx-1"><img src="{{$ad->category->img}}" alt="" class="me-1 category__icon--tag">{{__($ad->category->name)}}</a>
                    </div>
                    <div class="container__show--info my-2"><p>{{$ad->body}}</p></div>
                    <div class="container__show--info my-2"><span>{{__('Fecha de publicacion: ')}}</span><b>{{$ad->created_at->format('d/m/Y')}}</b></div>
                    <div class="d-none  d-lg-flex container__show--info container__show--infoUser my-2">
                        <div class="mx-2"><div class="container__photo--user d-flex justify-content-center align-items-center text-white">
                            <span>Foto</span>
                        </div>
                    </div>
                    <div>
                        <span>{{$ad->user->name}}</span>
                        <span class="cantidad__productos text-muted">3 productos</span>
                    </div>                        
                    </div>
                    <div class="my-2 d-flex align-items-center">
                        <b><i class="bi bi-truck me-2"></i></b>
                        <span class="entrega"><b>Entrega en 3-7 dias</b></span>
                    </div>
                    <div class="container__compartelo d-flex align-items-center">
                        <p>Compartelo</p>
                        <img src="/img/icons/icons_RRSS/fb_icon.svg" alt="Facebook icon" class="icon__rrss--show mx-1">
                        <img src="/img/icons/icons_RRSS/instagram_icon.svg" alt="instagram icon" class="icon__rrss--show mx-1">
                        <img src="/img/icons/icons_RRSS/youtube_icon.svg" alt="youtube icon" class="icon__rrss--show mx-1">
                    </div>
                    <div class="container__show--info my-2 d-flex justify-content-end"><a href="#" class="navbar-register_button btn px-3 btn__comprar">{{__('Comprar')}}</a></div>                    
                </div>
                <div class="container__protegemos--show col-12 col-md-6 px-4 py-2 mt-3">
                    <div class="d-flex">
                        <i class="bi bi-shield-check me-1 icon__escudo"></i>
                        <p><b>Protegemos tus compras</b></p><br>
                    </div>
                    <div class="d-flex my-3">
                        <i class="bi me-1 bi-check2"></i>
                        <p class="p__proteccion">Garantia de reembolso si el producto no es como se describe.</p>
                    </div>                    
                    <div class="d-flex">
                        <i class="bi me-1 bi-check2"></i>
                        <p class="p__proteccion">El vendedor recibe el pago cuando confirmas que el envio ha ido bien.</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>          
</x-layout>