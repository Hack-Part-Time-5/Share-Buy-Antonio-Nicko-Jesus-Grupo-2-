<x-layout>
    <x-slot name='title'>Share&Buy - ads</x-slot>
    <div class="container-fluid d-flex flex-column justify-content-center">
        <div class="row">
            <div class="col-12 banner d-flex justify-content-center flex-column align-items-center text-white">
                <h1 class="text-center"> Compra y vende en un solo click</h1>
                <input type="text" placeholder="Empieza tu busqueda" class="buscador_banner mt-2">
            </div>
            <div class="linea--banner mb-5 py-2 d-flex justify-content-center align-items-center">
                <h6 class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit.</h6>
            </div>
        </div>
        <h2 class="mx-5 d-none d-smblock">Categorias</h2>
        <div class="categorias d-none d-md-flex justify-content-center">            
            <div class="categorias-carrousel d-flex mb-5 ">
                @foreach ($categories as $category)
                    <li class="category__list-item"><a href="{{route('category.ads', $category)}}" class="dropdown-item category-items">{{$category->name}}</a></li>
                @endforeach                
            </div>            
        </div>
        <div class="d-flex justify-content-center">
            <li class="nav-item dropdown category__list-item mb-5 d-sm-none">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Categories
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  @foreach ($categories as $category)
                    <li><a href="{{route('category.ads', $category)}}" class="dropdown-item">{{$category->name}}</a></li>
                  @endforeach
                </ul>
              </li>                    
        </div>                    
        <div class="row cards_home_anuncios m-auto">        
            @forelse ($ads as $ad)
            <div class="col-12 col-md-4">
                <div class="card mb-5">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="...">
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
        <div class="container-fluid p-0 d-flex justify-content-center">
            <div class="amarillo pt-5 px-4">
                <h2 class="text-white">Encuentra los mejores articulos <br> y si no los encuentras vendelos tu</h2>
                <button class="mt-5 navbar-register_button text-white px-3 mb-5">Ver mas</button>
            </div>
        </div>
    </div>
</x-layout>