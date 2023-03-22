<x-layout>
    <x-slot name='title'>Share&Buy - {{$user->name}} ads</x-slot>
    <div class="container m-auto">
        <x-search/>
    <div class="d-flex justify-content-center">
        <div class="container d-flex flex-column align-items-center">
            <div class="row">
                <div class="col-12 my-5">
                    <h1>Todos los productos de: {{$user->name}}</h1>
                </div>
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
                        <h2>oops it seems that there is nothing in this category</h2>
                        <a href="{{route('ads.create')}}" class="btn btn-success">sell your first item</a> o <a href="{{route('home')}}" class="btn btn-primary">Come back home</a>
                    </div>
                    @endforelse
                </div> 
            </div>     
            
            {{-- {{$ads->links()}} --}}
        </div>    
    </div>
    
    </div>
    
</x-layout>