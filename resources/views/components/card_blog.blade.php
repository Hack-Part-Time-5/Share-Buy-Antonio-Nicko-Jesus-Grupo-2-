<div class="m-auto position-relative p-2 cards_home_anuncios" style="width: 18rem;">
    <div class="fondo_icon icono_fav_card">
        {{-- <a href="{{$favorit ?? ''}}"><img src="/img/icons/fav_icon_grey.svg" alt="" class="icon_like"></a> --}}
        <form action="{{$favorite ?? ''}}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <button class="p-2 bg-red-100 rounded hover:bg-red-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 text-red-700 hover:text-red-100">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                </svg>

            </button>
        </form>
    </div>  
    <span class="m-2 category_name text-white"><a href="{{$categoryLink ?? ''}}" class="a_category_name">{{$categoryName ?? ''}}</a></span>                      
    <a class="a_cards" href="{{$show ?? ''}}">
        <div class="position-relative container__img--card ">                                                
            <img src="{{$image ?? ''}}" class="card-img-top img__card" alt="...">
        </div>             
        <div class="card-body my-4 px-1 ">
        <h5 class="card-title">{{$title ?? 'blog'}}</h5>
        <h6 class="card-subtitle mb-2 text-muted mt-2">{{$price ?? ''}}</h6>
        <p class="card-text">{{$body ?? ''}}</p>      
        </div>
    </a>
  </div>