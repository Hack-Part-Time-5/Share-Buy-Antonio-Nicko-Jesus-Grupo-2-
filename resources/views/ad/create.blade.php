<x-layout>
    <x-slot name='title'>{{__('Sube tu producto')}}</x-slot>
    <div class="container d-flex flex-column align-items-center m-auto my-3">
        <h1>{{$user ?? ''}}  {{__('¿Qué subirás hoy?')}}</h1>
        <h5 class="m-3">{{__('En ')}} <font color="#FF385C"><strong>Share&Buy</strong></font> {{__('hay sitio para todo')}}</h5>
    </div>
    <livewire:create-ad/>    
</x-layout>    