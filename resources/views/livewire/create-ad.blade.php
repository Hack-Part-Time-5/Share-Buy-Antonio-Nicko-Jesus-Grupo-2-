<div>
    @if(session()->has('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
    <form wire:submit.prevent="store">
        @csrf
        <div class="container d-flex justify-content-center m-auto ">
            <div class="row justify-content-center m-2">
                <div class="card  m-2 p-2   ">
                    <div class="mb-4 mx-1 ">
                        <h5><strong>Información del producto</strong></h5>
                    </div>
                    <div class="form-group mb-3">
                        <label for="category" class="form-label mb-2"><strong>Categoría</strong></label>
                        <select wire:model.defer="category" id="category" class="form-control placeholder_categoria">
                            <option value="">Escoge una categoría</option>
                            @foreach($categories as $category )
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="form-group mb-3">
            <label for="subcategory" class="form-label">SubCategoría</label>
            <select wire:model.defer="category" id="category" class="form-control">
                <option value="">Selecciona una</option>
@foreach($subcategories as $subcategory )
                    <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                    @endforeach
                    </select>
                </div> --}}
                <div class="mb-3">
                    <label for="price" class="form-label mb-2"><strong>Precio</strong></label>
                    <input wire:model="price" type="number" class="form-control @error('price') is-invalid @enderror">
                    @error('price')
                        {{ $message }}
                    @enderror
                </div>
                {{-- <div class="form-group">
            <label for="estado">Example select</label>
            <select class="form-control" id="estado">
              <option>Nuevo</option>
              <option>Sin estrenar</option>
              <option>Poco Usado</option>
              <option>Usado</option>
            </select>
          </div> --}}
                <div class="mb-3">
                    <label for="title" class="form-label mb-2"><strong>¿Qué estás vendiendo?</strong></label>
                    <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror">
                    @error('title')
                        {{ $message }}
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="body" class="form-label mb-2"><strong>Descripción</strong></label>
                    <textarea wire:model="body" cols="20" rows="8"
                        class="form-control @error('body') is-invalid @enderror"></textarea>
                    @error('body')
                        {{ $message }}
                    @enderror
                </div>
            </div>
    </form>
    <div class="card  m-2">
        <div class="header mt-2 mb-4 mx-3">
            <h5><strong> Imágenes</strong></h5>
        </div>
        <div class="mb-3">
            <div class="container-fluid">
                {{-- <div class="row">
                    <div class="col">
                        <button type="submit" class="boton_imagenes"><img
                                src="\img\icons\iconos_img\upload_img_color.svg" alt=""></button>
                    </div>
                    <div class="col">
                        <button type="submit" class="boton_imagenes_empty"><img
                                src="\img\icons\iconos_img\upload_img_empty.svg" alt=""></button>
                    </div>
                    <div class="col">
                        <button type="submit" class="boton_imagenes_empty"><img
                                src="\img\icons\iconos_img\upload_img_empty.svg" alt=""></button>
                    </div>
                    <div class="col">
                        <button type="submit" class="boton_imagenes_empty"><img
                                src="\img\icons\iconos_img\upload_img_empty.svg" alt=""></button>
                    </div>
                </div> --}}
                <input type="file" wire:model="temporary_images" name="images" multiple="true"
                    class="form-control p-4 border-0 input_boton  @error('temporary_images.*') is-invalid @enderror">
                @error('temporary_images.*')
                    <p class="text-danger mt-2">{{ $message }}</p>
                @enderror
            </div>
            @if(!empty($images))
                <div class="row">
                    <div class="col-12">
                        <p class="mx-2 my-2 justify-content-center"><i>{{ __('Vista previa') }}</i></p>
                        <div class="row ">
                            @foreach($images as $key=>$image )
                                <div class="col-12 col-md-3 ">
                                    <img src="{{ $image->temporaryUrl() }}" alt="" class="img-fluid grid_imagenes_subir ">
                                    <button type="button" class="btn btn-danger mx-1 my-1 mt-2 p-1"
                                        wire:click="removeImage({{ $key }})">🗑 {{ __('Eliminar') }}</button>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <div class="container-fluid aviso_imagenes py-3 mt-4">
            <div class="row d-flex align-items-center ">
                <div class="col-2 ">
                    <img class="info_icon_img" src="\img\icons\info_icon.svg" alt="">
                </div>
                <div class="col-10">
                    <p>3 imágenes obligatorias. Máximo 10MB</p>
                    <p>Sólo se permites fotografías en formato .jpg</p>
                    <p>No se permite fotografías con caras</p>
                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content">
        <button type="submit" class="navbar-register_button text-white px-3 py-2 mt-4 mb-3">Subir producto</button>
    </div>
</div>
</div>
</div>
