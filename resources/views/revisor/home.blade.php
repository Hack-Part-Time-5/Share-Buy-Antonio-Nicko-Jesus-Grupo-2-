<x-layout>
	<x-slot name='title'>Sube tu producto</x-slot>
    <div class="container d-flex flex-column align-items-center m-auto my-3">
        <h1>{{$user ?? ''}}  Anuncios por revisar</h1>

    </div>
	<x-slot name='title'> Share&Buy-Revisor Home </x-slot>
    @if ($ad)
	<div class="container d-flex justify-content-center m-auto ">
		<div class='row justify-content-center'>
			<div class='col-12 col-md-8'>
				<div class="card m-2 p-2 ">
					<div class="card-body">
						<div class="row ">
							<div class="col-md-9">
								<p class=""> <strong>Id <font color="#FF385C">#{{$ad->id}}</strong></font></p>
							</div>
							<div class="header mt-4 mb-4">
								<h5><strong> Imágenes</strong></h5>
							</div>
							<div class="col-9">
								<div class="row">
									@forelse ($ad->images as $image)
										<div class="col-md-4">
											<img src="{{$image->getUrl(500,500)}}" alt="..." class="img-fluid grid_imagenes_subir">
										</div>
										<div class="col-md-8">
											Adult : <i class="bi bi-circle-fill {{ $image->adult }}"></i> [{{ $image->adult }}]
											<br>
											Spoof : <i class="bi bi-circle-fill {{ $image->spoof }}"></i> [{{ $image->spoof }}]
											<br>
											Medical : <i class="bi bi-circle-fill {{ $image->medical }}"></i> [{{ $image->medical }}]
											<br>
											Violence : <i class="bi bi-circle-fill {{ $image->violence }}"></i> [{{ $image->violence }}]
											<br>
											Racy : <i class="bi bi-circle-fill {{ $image->racy }}"></i> [{{ $image->racy }}]
											<br>
											
											id: {{ $image->id }} <br>
											path: {{ $image->path }} <br>
											url: {{ Storage:: url($image->path) }} <br>
										</div>
									@empty
										<div class="col-12">
											<b>{{__('No hay imágenes')}}</b>
										</div>
									@endforelse	
								</div>
							</div>
						</div>	
						<div class=" row">
							<div class="header mt-4 mb-1 ">
									<h5><strong> Usuario</strong></h5>
							</div>
							<div class="col-md-9">
								Id <strong><font color="#FF385C">#{{$ad->user->id}}</strong></font> - {{$ad->user->name}} -<u> {{$ad->user->email}}</u>
							</div>
						</div>
					</div>
					<div class=" row">
						<div class="header mt-4 mb-1 ">
								<h5><strong>Título</strong></h5>
						</div>
						<div class="col-md-9">
							{{$ad->title}}
						</div>
					</div>
					
					<div class="row">
						<div class="header mt-4 mb-1 ">
							<h5><strong>Precio</strong></h5>
						</div>
						<div class="col-md-9">
							{{$ad->price}}€
						</div>
					</div>
						<div class="row">
						<div class="header mt-4 mb-1">
							<h5><strong>Categoría</strong></h5>
						</div>
						<div class="col-md-9">
							{{$ad->category->name}}
						</div>
					</div>
					<div class="row">
						<div class="header mt-4 mb-1 ">
							<h5><strong>Descripción</strong></h5>
						</div>
						<div class="col-md-9">
							{{$ad->body}}
						</div>
					</div>
					<div class="row">
						<div class="header mt-4 mb-1">
							<h5><strong>Fecha de creación</strong></h5>
						</div>
						<div class="col-md-9">
							<i>{{$ad->created_at->format('d/m/Y')}}</i>
						</div>
					</div>
				
				</div>
				
			</div>
			
			<div class="container_botones d-flex mt-3">
				
				<form action="{{route('revisor.ad.accept',$ad)}}" method="POST">
					@csrf
					@method('PATCH')
					<button type="submit" class="btn btn_aceptar btn-success">Aceptar</button>
				</form>
				<form action="{{route('revisor.ad.reject',$ad)}}" method="POST">
					@csrf
					@method('PATCH')
					<button type="submit" class="btn btn_rechazar btn-danger">Rechazar</button>
				</form>
			</div>
			
		</div>
		</div>
	</div>
@else
	<h3 class="text-center">{{__('No hay más anuncios, vuelve más tarde, gracias 😊')}} </h3>
@endif
</div>
</div>
</x-layout>


