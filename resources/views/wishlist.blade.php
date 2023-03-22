<x-layout>
    <div class="row mt-5 m-auto">  
        {{-- <div class="overflow-hidden">{{$ads}}</div> --}}
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
                <x-slot name='favorite'>{{ route('favorite.remove',$ad->id) }}</x-slot>                      
                <x-slot name='price'>{{$ad->price}}€</x-slot>
            </x-card_blog>       
        </div>
        <form action="{{ route('favorite.remove',$ad->id) }}" method="POST"
            
            style="display: inline-block;">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="px-4 py-2 text-white bg-red-700 rounded" value="Delete">
        </form>
        @empty
        <div class="col-12">
            <h2>{{__('Uy.. parece que no hay nada de esta categoría')}}</h2>
            <a href="{{route('ads.create')}}" class="btn btn-success">Vende tu primer objeto</a> o <a href="{{route('home')}}" class="btn btn-primary">Vuelve a la home</a>
        </div>
        @endforelse
    </div>                    
</x-layout>