<x-layout>
    <x-slot name='title'>Sube tu producto</x-slot>
    <div class="container d-flex flex-column align-items-center m-auto my-3">
        <h1>{{$user ?? ''}}  ¿Qué subirás hoy?</h1>
        <h5 class="m">En Share&Buy hay sitio para todo</h5>
    </div>
    <livewire:create-ad/>    
</x-layout>    