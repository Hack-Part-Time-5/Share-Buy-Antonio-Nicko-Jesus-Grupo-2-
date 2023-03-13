<x-layout>
	<x-slot name='title'> Share and Buy - Revisor Home </x-slot>
    @if ($ad)
	<div class='container my-5 py-5'>
		<div class='row'>
			<div class='col-12 col-md-8 offset-md-2'>
				<div class="card">
					<div class="card-header">
						Anuncio #{{$ad->id}}
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-3">
								<b>{{__('Imagenes')}}</b>
							</div>
							<div class="col-9">
								<div class="row">
									@forelse ($ad->images as $image)
										<div class="col-md-4">
											<img src="{{Storage::url($image->path)}}" alt="..." class="img-fluid">
										</div>
									@empty
										<div class="col-12">
											<b>{{__('No hay imagenes')}}</b>
										</div>
									@endforelse	
								</div>
							</div>
						</div>
						<hr>
						<div class="row">
							<div class="col-md-3">
								<b>Usuario</b>
							</div>
							<div class="col-md-9">
								#{{$ad->user->id}} - {{$ad->user->name}} - {{$ad->user->email}}
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-3">
							<b>Título</b>
						</div>
						<div class="col-md-9">
							{{$ad->title}}
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-3">
							<b>Precio</b>
						</div>
						<div class="col-md-9">
							{{$ad->price}}
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-3">
							<b>Descripción</b>
						</div>
						<div class="col-md-9">
							{{$ad->body}}
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-3">
							<b>Categoría</b>
						</div>
						<div class="col-md-9">
							{{$ad->category->name}}
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-3">
							<b>Fecha de creación</b>
						</div>
						<div class="col-md-9">
							{{$ad->created_at}}
						</div>
					</div>
				</div>
			</div>
			<div class="row my-3">
				<div class="col-6">
					<form action="{{route('revisor.ad.reject',$ad)}}" method="POST">
						@csrf
						@method('PATCH')
						<button type="submit" class="btn btn-danger">Rechazar</button>
					</form>
				</div>
				<div class="col-6 text-end">
					<form action="{{route('revisor.ad.accept',$ad)}}" method="POST">
					
						@csrf
						@method('PATCH')
						<button type="submit" class="btn btn-success">Aceptar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@else
	<h3 class="text-center">{{__('No hay más anuncios para revisar, vuelve más tarde, gracias 😊')}} </h3>
@endif
</x-layout>