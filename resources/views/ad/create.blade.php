<x-layout>
    <x-slot name='title'>Sube tu producto</x-slot>
    <div class="container d-flex flex-column align-items-center m-auto my-3">
        <h1>{{$user ?? ''}}  ¿Qué subirás hoy?</h1>
        <h5>En Share & Buy hay sitio para todo</h5>
    </div>
    <div class="container d-flex justify-content-center m-auto">
        <div class="row justify-content-center">
            <div class="">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">      
                        <livewire:create-ad/>                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>    