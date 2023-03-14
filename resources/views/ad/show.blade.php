<x-layout>
    <div class="container m-auto  d-lg-flex flex-column justify-content-center">
        <hr>
        <div class="container container__buscador--show d-flex justify-content-center">
            <div class="container__form--show d-flex justify-content-center my-4 flex-wrap">
                <form action="">
                    <input type="text" placeholder=" {{__('Empieza tu búsqueda')}}" class="buscador__show placeholder_buscador mx-3">                                
                    <button type="button" class="navbar-register_button text-white px-4">{{__('Buscar')}}</button>
                </form>
            </div>        
            <div class="container__buttons--show d-none d-lg-flex justify-content-center my-4">
                <div class="dropdown mx-3 d-none d-xl-block">
                    <button class="btn btn-secondary dropdown-toggle px-3 rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Filtros
                    </button>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="dropdown mx-3 d-none d-lg-block">
                    <button class="btn btn-secondary dropdown-toggle px-3 rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Moda
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="dropdown mx-3 d-none d-lg-block">
                    <button class="btn btn-secondary dropdown-toggle px-3 rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Precio
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
                <div class="dropdown mx-3 d-none d-lg-block">
                    <button class="btn btn-secondary dropdown-toggle px-3 rounded-pill" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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
        <hr>
        <div class="container">
            <div class="row my-5">
                <div class="col-12 col-md-6">
                    <div id="adImages" class="carousel slide" data-bs-ride="true">
                        <div class="carrousel-indicators">
                            @for ($i = 0; $i < $ad->images()->count(); $i++)
                                <button type="button" data-bs-target='#adImages' data-bs-slide-to="{{$i}}" class="@if($i == 0) active @endif" aria-current="true" aria-label="Slide {{$i + 1}}"></button>                            
                            @endfor
                        </div>
                        <div class="carousel-inner">
                            @foreach ($ad->images as $image )
                                <div class="carousel-item @if($loop->first) active @endif">
                                    <img src="{{Storage::url($image->path)}}" alt="" class="d-block w-100">
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
                </div>
                <div class="col-12 col-md-6">
                    <div><b>Title:</b>{{$ad->title}}</div>
                    <div><b>Price:</b>{{$ad->price}}</div>
                    <div><b>Description:</b>{{$ad->body}}</div>
                    <div><b>Publish:</b>{{$ad->created_at->format('d/m/Y')}}</div>
                    <div><b>By:</b>{{$ad->user->name}}</div>
                    <div><a href="{{route('category.ads',$ad->category)}}">{{__($ad->category->name)}}</a></div>
                    <div><a href="#" class="btn btn-success">Buy now</a></div>
                </div>
            </div>
        </div>
    </div>          
</x-layout>