<x-layout>
    <x-slot name='title'>Share&Buy-Login</x-slot>
    {{-- FORM LOGIN --}}
    <div class="container m-auto">
        <div class="container d-flex justify-content-center flex-column align-items-center my-5">
            <h2>Para poder ver el anuncio detalladamente debe iniciar sesion, o estar registrado.</h2>
            <button  type="button" class="mt-5 ms-3 p-2 navbar-register_button text-white" data-bs-toggle="modal" data-bs-target="#dialog1"><span class="nav__register--button d-flex justify-content-center align-items-center">{{ __('Inicia sesion o regístrate') }}</span></button>
        </div>
    </div>
    
    
    
    
</x-layout>