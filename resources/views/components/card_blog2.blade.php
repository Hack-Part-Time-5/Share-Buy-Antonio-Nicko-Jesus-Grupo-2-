<div class="position-relative p-2" style="width: 18rem;">        
    <a class="a_cards" href="{{$show ?? ''}}">
        <div class="position-relative container__img--card2">                                                
            <img src="{{$img ?? 'https://picsum.photos/700/600?a'}}" class="card-img-top img__card" alt="...">
        </div>            
        <div class="card-body my-4 px-1">
        <h5 class="card-title">{{$title ?? 'blog'}}</h5>
        <h6 class="card-subtitle mb-2 text-muted mt-2">{{$price ?? ''}}</h6>
        <p class="card-text">{{$body ?? ''}}</p>      
        </div>
    </a>
  </div>