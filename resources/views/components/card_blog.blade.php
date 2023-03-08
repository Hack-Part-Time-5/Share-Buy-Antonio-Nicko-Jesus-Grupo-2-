<div class=" p-2  " style="width: 18rem;">
    <a href="#" class="">
        <div class="position-relative container__img--card">            
            <strong class="m-2 category_name"><a href="{{$categoryLink ?? ''}}">{{$category ?? ''}}</a></strong>
            <img src="{{$img ?? 'https://picsum.photos/700/600?a'}}" class="card-img-top img__card" alt="...">
        </div>            
        <div class="card-body my-4 px-1">
        <h5 class="card-title">{{$title ?? 'blog'}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">{{$price ?? ''}}</h6>
        <p class="card-text">{{$body ?? 'blog'}}</p>      
        </div>
    </a>
  </div>