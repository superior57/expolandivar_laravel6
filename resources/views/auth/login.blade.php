@extends('layouts.master')

@section('title')
    login    
@endsection

@section('content')
<section class="d-flex login-section">
    <div class="d-flex flex-wrap col-md-6 col-lg-4 p-5 login-wrapper">
        <div class="d-flex w-100 py-5 body">
            <div class="w-100 m-auto d-flex flex-wrap justify-content-center">
                <div class="w-100 logo mb-5">
                    <img src="{{ asset('img/logo-white.png') }}" alt="Logo">
                </div>
                <p class="font-1 font-weight-bold mb-4">Inicia sesión</p>
                <div class="input-group input-rounded mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text form-control"><i class="fa fa-envelope-o"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Correo">
                </div>
                <div class="input-group input-rounded mb-1">
                    <div class="input-group-prepend">
                        <span class="input-group-text form-control"><i class="fa fa-key"></i></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Contraseña">
                </div>
                <p class="w-100 text-center mb-5">
                    ¿Olvidaste tu contraseña?  <a href="{{ url('/forgot') }}" class="yellow-link">Haz clic acá</a>
                </p>
                <div class="d-flex">
                    <a href="" class="btn btn-signup">
                        Iniciar sesión
                    </a>
                </div>
            </div>
        </div>
        <div class="w-100 footer">
            <div class="footer-content pt-5">
                <p>Inscríbete para poder ingresar</p>
                <div class="d-flex">
                    <a href="" class="btn btn-secondary">Inscribirme</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-8 d-flex">
        <div class="m-auto">  
            <div class="">
                <img width="400" src="{{ asset('img/logo-2.png') }}" alt="Logo">
            </div>          
        </div>        
    </div>
</section>
@endsection
