@extends('layouts.master')

@section('title')
    login    
@endsection

@section('content')
<section class="d-flex login-section">
    <div class="d-flex flex-wrap col-md-6 col-lg-5 col-xl-4 p-3 p-md-5 overflow-auto login-wrapper">
        <div class="d-flex w-100 py-5 body">
            <form action="{{ route('login') }}" method="post" class="w-100 m-auto d-flex flex-wrap justify-content-center">
                @csrf
                <div class="w-100 logo mb-5">
                    <img src="{{ asset('img/logo-white.png') }}" alt="Logo">
                </div>
                <p class="font-1 font-weight-bold mb-4">Inicia sesión</p>
                <div class="form-group w-100 mb-3">
                    <div class="input-group input-rounded @error('email') is-invalid @enderror">
                        <div class="input-group-prepend">
                            <span class="input-group-text form-control"><i class="fa fa-envelope-o"></i></span>
                        </div>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo" value="{{ old('email') }}" id="email" name="email" required autofocus autocomplete="email">        
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>                        
                    @enderror                     
                </div>                
                <div class="form-group w-100 mb-1">
                    <div class="input-group input-rounded @error('password') @enderror">
                        <div class="input-group-prepend">
                            <span class="input-group-text form-control"><i class="fa fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control @error('password') @enderror" placeholder="Contraseña" id="password" name="password" required autocomplete="current-password">
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>  
                    @enderror
                </div>
                <p class="w-100 text-center mb-5">
                    ¿Olvidaste tu contraseña?  <a href="{{ url('/forgot') }}" class="yellow-link">Haz clic acá</a>
                </p>
                <div class="d-flex">
                    <input type="submit" class="btn btn-signup" value="Iniciar sesión">
                </div>
            </form>
        </div>
        <div class="w-100 footer">
            <div class="footer-content pt-5">
                <p>Inscríbete para poder ingresar</p>
                <div class="d-flex">
                    <a href="{{ url('register') }}" class="btn btn-secondary">Inscribirme</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-7 col-xl-8 d-none d-md-flex">
        <div class="m-auto">  
            <div class="">
                <img width="400" src="{{ asset('img/logo-2.png') }}" alt="Logo">
            </div>          
        </div>        
    </div>
</section>
@endsection
