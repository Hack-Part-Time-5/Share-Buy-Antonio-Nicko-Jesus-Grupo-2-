<x-layout>
    <x-slot name='title'>Share&Buy - {{$q}} ads</x-slot>
    <div class="container m-auto">
        <x-search/>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="my-5 text-center">{{ __('Resultado de tu búsqueda') }}<font color="#FF385C"> {{ $q }}</font></h1>
                </div>
                <div class="container">
                    <div class="row justify-content-center ">
                        @forelse ($ads as $ad)            
                        <div class="col-12 col-md-6  col-xl-3 justify-content-center">                    
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
                            <h2> Ups! parece que no se ha encontrado ningún producto 😅</h2>
                            <a href="{{route('ads.create')}}" class="btn btn-success mt-5 py-1 px-2">+ Vende tu primer producto</a><a href="{{route('home')}}" class="btn btn-primary mx-3 mt-5 py-1 px-2">⬅ Volver</a>
                        </div>
                        @endforelse
                    </div> 
                </div>     
            </div>
        </div>    
   
    
</x-layout>