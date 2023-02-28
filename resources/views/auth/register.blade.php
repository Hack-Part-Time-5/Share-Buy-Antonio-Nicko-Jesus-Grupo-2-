<x-layout>
    <x-slot name="title">Share&Buy - Register</x-slot>
    <div class="container-fluid bg-accent vh-100">
        <div class="row mb-5 pb-5">
            <div class="col-12 col-md-8 ms-5">
                <div class="d-flex flex-column align-items-center">
                    <div class="form-content justify-content-center mb-5 pb-5">
                        <div class="section-title">
                            <h2 class="form-title space-around">
                                Create account
                            </h2>
                        </div>
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors as $error)
                                        <li>{{ $error }}</li>                                        
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="/register" method="POST" role="form" class="php-email-fomr">
                            @csrf
                            <div class="form-field-edit form-field space-around my-2">
                                <input type="text" name="name" id="name" class="form-control forms_field-input" placeholder="Your name" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>                                
                            </div>
                            <div class="form-field-edit form-field space-around my-2">
                                <input type="email" name="email" id="email" class="form-control forms_field-input" placeholder="Your email" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                                <div class="validate"></div>
                            </div>
                            <div class="form-field-edit form-field space-around my-2">
                                <input type="password" name="password" id="password" class="form-control.forms_fields-input" placeholder="Your password">
                                <div class="validate"></div>
                            </div>
                            <div class="form-field-edit form-field space-around my-2">
                                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control.forms_fields-input" placeholder="Your password again">
                                <div class="validate"></div>
                            </div>
                            <button type="submit" class="form-button-edit text-center space-around my-2">
                                Create account
                            </button>
                        </form>    
                    </div>
                    <div class="form-link mt-4 d-flex">
                        <p class="text-white">You are already one of us?</p>
                        <a href="{{route('login')}}" class="text-reset text-decoration none ps-2">Come in now!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>    