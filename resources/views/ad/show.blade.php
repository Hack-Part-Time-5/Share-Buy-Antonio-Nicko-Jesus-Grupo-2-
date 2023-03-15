<x-layout>
    <div class="container m-auto  d-lg-flex flex-column justify-content-center">        
        <x-search/>
        <div class="container px-3">
            <div class="row my-5">
                <div class="col-12 col-md-6">
                    {{-- <div id="adImages" class="carousel slide" data-bs-ride="true">
                        <div class="carrousel-indicators">
                            @for ($i = 0; $i < $ad->images()->count(); $i++)
                                <button type="button" data-bs-target='#adImages' data-bs-slide-to="{{$i}}" class="@if($i == 0) active @endif" aria-current="true" aria-label="Slide {{$i + 1}}"></button>                            
                            @endfor
                        </div>
                        <div class="carousel-inner">
                            @foreach ($ad->images as $image )
                                <div class="carousel-item @if($loop->first) active @endif">
                                    @if ($ad->images()->count() > 0)
                                        <img src="{{Storage::url($image->path)}}" alt="" class="d-block w-100">    
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
                    </div> --}}
                </div>
                <div class="col-12 col-md-6 position-relative">
                    <div class="container__show--info my-2"><p class="titulo__ad">{{$ad->title}}</p></div>
                    <div class="container__show--info my-2"><strong class="precio">{{$ad->price}}€</strong></div>
                    <div class="container__show--info my-2">
                        <a href="{{route('category.ads',$ad->category)}}" class="btn btn-primary category__tag rounded-pill px-3 py-1 mx-1"><img src="{{$ad->category->img}}" alt="" class="me-1 category__icon--tag">{{__($ad->category->name)}}</a>
                    </div>
                    <div class="container__show--info my-2"><p>{{$ad->body}}</p></div>
                    <div class="container__show--info my-2"><b>{{__('Publicado: ')}}</b>{{$ad->created_at->format('d/m/Y')}}</div>
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
                        <i class="bi bi-truck me-2"></i>
                        <span class="entrega">Entrega en 3-7 dias</span>
                    </div>                    
                    <div class="container__show--info my-2 d-flex justify-content-end"><a href="#" class="navbar-register_button btn px-3 btn__comprar">{{__('Comprar')}}</a></div>                    
                </div>
            </div>
        </div>
    </div>          
</x-layout>