<x-layout>
    <div class="container m-auto  d-lg-flex flex-column justify-content-center">        
        <x-search/>
        <div class="container">
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
                <div class="col-12 col-md-6">
                    <div><p class="titulo__ad">{{$ad->title}}</p></div>
                    <div><strong class="precio">{{$ad->price}}€</strong></div>
                    <div><a href="{{route('category.ads',$ad->category)}}" class="rounded-pill categoy__tag">{{__($ad->category->name)}}</a></div>
                    <div><b>Description:</b>{{$ad->body}}</div>
                    <div><b>Publish:</b>{{$ad->created_at->format('d/m/Y')}}</div>
                    <div><b>By:</b>{{$ad->user->name}}</div>                    
                    <div><a href="#" class="btn btn-success">Buy now</a></div>
                </div>
            </div>
        </div>
    </div>          
</x-layout>