<x-layout>
    <x-slot name='title'>Share&Buy-{{__('Detalle Producto')}}</x-slot>    
    <div class="container m-auto  d-lg-flex flex-column justify-content-center">        
        <x-search/>
        <div class="container px-3">
            <div class="row my-5">                
                <div class=" d-md-block col-12 col-md-6 px-4">
                    {{-- carousel --}}                    
                    <div  class="carousel slide d-block d-md-none" data-ride="carousel">                                        
                        <div class="carousel-inner" role="listbox">                            
                            @foreach ($ad->images as $image )
                            <div class="item @if($loop->first) active @endif">
                              <img src="{{$image->getUrl(500,500)}}">                            
                            </div>    
                            @endforeach                                                    
                          </div>                                            
                        <a class="left carousel-control" href=".carousel" role="button" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                          <span class="sr-only">Geri</span>
                        </a>
                        <a class="right carousel-control" href=".carousel" role="button" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                          <span class="sr-only">İleri</span>
                        </a>
                      </div>                    
                    {{-- galeria --}}
                    <div class="container-fluid">
                        <div class="row">                          
                          <div class="col-md-3 d-none d-md-block">
                            <div class="row">
                                @foreach ($ad->images as $image )
                                <div class="col-md-12 mb-1">
                                    <img src="{{$image->getUrl(500,500)}}" class="me-3 img-thumbnail img-fluid" onclick="selectImage(this.src)">                                                                                
                                </div>                             
                            @endforeach                                                            
                            </div>
                          </div>
                          <div class="d-none d-md-block  col-md-9 h-100 d-flex align-items-center ">
                            <img id="selected-image" src="{{$ad->images()->first()->getUrl(500,500)}}" class="img-fluid">
                          </div>
                        </div>
                      </div>
                      
                      <script>
                        function selectImage(src) {
                          var selectedImage = document.getElementById("selected-image");
                          selectedImage.src = src;
                        }         
                        /* slide */      
                        $(document).ready(function() {
                        // Iniciar el slider
                        $("#myCarousel").carousel();
                        
                        // Pausar el slider al hacer hover
                        $("#myCarousel").hover(function() {
                            $(this).carousel('pause');
                        }, function() {
                            $(this).carousel('cycle');
                        });
                        });        
                      </script>

                    

                </div>
                <div class="container__informacion--ad col-12 col-md-6 position-relative">
                    <div class="container__show--info my-2"><p class="titulo__ad">{{$ad->title}}</p></div>
                    <div class="container__show--info my-2"><strong class="precio">{{$ad->price}}€</strong></div>
                    <div class="container__show--info my-2">
                        <a href="{{route('category.ads',$ad->category)}}" class="btn btn-primary category__tag rounded-pill px-3 py-2 mt-3"><img src="{{$ad->category->img}}" alt="" class="me-1 category__icon--tag">{{__($ad->category->name)}}</a>
                    </div>
                    <div class="container__show--info my-2 mt-4 mb-5"><p>{{$ad->body}}</p></div>
                    {{-- <div class="container__show--info my-2 mt-4"><span>{{__('Fecha de publicación: ')}}</span><b>{{$ad->created_at->format('d/m/Y')}}</b></div> --}}
                    <div class="d-none  d-lg-flex container__show--info container__show--infoUser my-2">
                        {{-- <div class="mx-2"><div class="container__photo--user d-flex justify-content-center align-items-center text-white">
                            <span>Foto</span>
                        </div>
                    </div> --}}
                        <div>
                            <a href="{{route('user.ads', $ad->user)}}" class="text-decoration-none"><span><strong><font color="#ff385c">{{__('Vendedor')}}</font></strong> <br>{{$ad->user->name}}</span></a>
                            
                        </div>                        
                    </div>
                    <div class="my-2 d-flex align-items-center mt-4 mb-5">
                        <b><i class=" bi bi-truck me-2"></i></b>
                        <span class="entrega"><b>{{__('Entrega en 3-5 días')}}</b></span>
                    </div>
                    
                    <div class="container d-flex align-items-center">
                        <div class="row w-100">
                            <div class="col container__compartelo ">
                                <p class=" me-2">{{__('Compártelo')}}</p>
                                <a href="https://www.facebook.com/" target="_blank"><img src="/img/icons/icons_RRSS/Full_colour/fb.svg" alt="Facebook icon" class="icon__rrss--show mx-1"></a>
                                <a href="https://twitter.com/" target="_blank"><img src="/img/icons/icons_RRSS/Full_colour/twitter.svg" alt="instagram icon" class="icon__rrss--show mx-1"></a>
                                <a href="mailto:info@shareandbuy.com" target="_blank"><img src="/img/icons/icons_RRSS/Full_colour/mail.svg" alt="youtube icon" class="icon__rrss--show mx-1"></a>
                            </div>
                            <div class="col justify-content-end pe-4">
                                <div class="container__show--info my-2 d-flex justify-content-end">
                                    <a href="#" class="btn px-4 py-1 text-white btn__comprar">{{__('Comprar')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                                        
                </div>
                <div class="container__protegemos--show col-12 col-md-6 px-4 py-3 mt-3">
                    <div class="d-flex">
                        <i class="bi bi-shield-check me-2 my-1 icon__escudo"></i>
                        <p><b>{{__('Protegemos tus compras')}}</b></p><br>
                    </div>
                    <div class="d-flex my-1">
                        <i class="bi me-1 bi-check2"></i>
                        <p class="p__proteccion">{{__('Garantía de reembolso si el producto no es como se describe.')}}</p>
                    </div>                    
                    <div class="d-flex">
                        <i class="bi me-1 bi-check2"></i>
                        <p class="p__proteccion">{{__('El vendedor recibe el pago cuando confirmas que el envío ha ido bien.')}}</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
</x-layout>