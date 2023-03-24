<x-layout>
    <x-slot name='title'>Share&Buy-Favoritos</x-slot>
    {{-- {{$ads}} --}}
    <div class="container m-auto">
                <x-search/>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="mt-5">Tus Favoritos ❤️</h1>                        
                        </div>
                        <div class="container">
                            <div class="row justify-content-center mt-5">
                                @forelse ($ads as $ad)
                                    <div class="position-relative d-flex flex-column align-items-center col-12 col-md-6 col-xl-3 justify-content-center">
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
                                        <div class="mb-5">
                                            <form action="{{ route('favorite.remove',$ad->id) }}" method="POST" style="display: inline-block;">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <input type="submit" class="px-2 py-1 boton_eliminar" value="❌ Borrar">
                                            </form>      
                                        </div>                                         
                                    </div>
                                    
                                @empty
                                <div class="col-12">
                                    <h2>{{__('Uy.. parece que no hay nada de esta categoría')}}</h2>
                                    <a href="{{route('ads.create')}}" class="btn btn-success">Vende tu primer objeto</a> o <a href="{{route('home')}}" class="btn btn-primary">Vuelve a la home</a>
                                </div>
                                @endforelse
                            </div> 
                        </div>     
                    </div>
                </div>  
    </div>          
</x-layout>