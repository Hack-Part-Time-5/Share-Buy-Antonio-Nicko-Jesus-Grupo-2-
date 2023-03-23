<div class="position-relative p-2 cards_home_anuncios" style="width: 18rem;">        
    <a class="a_cards" href="{{$show ?? ''}}">
        <div class="position-relative container__img--card2">                                                
            <img src="{{$img ?? 'https://picsum.photos/700/600?a'}}" class="card-img-top img__card" alt="...">
        </div>            
        <div class="card-body my-4 px-1">
        <h5 class="card-title">{{$title ?? 'blog'}}</h5>
        <p class="card-text">{{$body ?? ''}}</p>      
        </div>
    </a>
  </div>