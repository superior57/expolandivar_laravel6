@extends('layouts.master')

@section('title')
    register    
@endsection

@section('content')
<section class="register-section py-3" id="registration">
    <div class="w-100 d-flex">
        <div class="w-100 m-auto p-3 main-wrapper">
            <h2 class="w-100 text-center mb-4 title">Insripción</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="w-100 form-group mb-2">
                    <label for="name"><span class="text-danger">*</span> Nombre</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nombre" value="{{ old('name') }}" id="name" name="name" required autofocus>
                    
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="w-100 form-group mb-2">
                    <label for="email"><span class="text-danger">*</span> Correo electrónico</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Correo electrónico" value="{{ old('email') }}" id="email" name="email" required autofocus>
                    
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="w-100 form-group mb-2">
                    <label for="phone"><span class="text-danger">*</span> Celular</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" placeholder="Celular" value="{{ old('phone') }}" id="phone" name="phone" required autofocus>

                    @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="w-100 form-group mb-2">
                    <label for="birthdate"><span class="text-danger">*</span> Fecha de nacimiento</label>
                    <input type="date" class="form-control @error('birthdate') is-invalid @enderror" placeholder="Fecha de nacimiento" value="{{ old('birthdate') }}" id="birthdate" name="birthdate" required autofocus>

                    @error('birthdate')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="w-100 form-group mb-2">
                    <label for="base_location"><span class="text-danger">*</span> Campus o sede</label> <br>
                    <span>
                        Podrás navegar a otras sedes luego de registrarte
                    </span>
                    <select class="slim-select form-control @error('base_location') is-invalid @enderror" name="base_location" id="base_location" required autofocus>
                        <option>Please select</option>
                        <option value="1">Ciudad de Guatemala</option>
                        <option value="2">Ciudad de Guatemala</option>
                    </select>

                    @error('base_location')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="w-100 form-group mb-2">
                    <label for="study_plan"><span class="text-danger">*</span> Plan de Estudios (Pregrado / Posgrado)</label> <br>
                    <select class="slim-select form-control @error('study_plan') is-invalid @enderror" name="study_plan" id="study_plan" required autofocus>
                        <option>Please select</option>
                        <option value="2">Pregrado</option>
                        <option value="3">Pregrado</option>
                    </select>

                    @error('study_plan')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="w-100 form-group mb-2">
                    <label for="institution"><span class="text-danger">*</span> Colegio o Institución</label> <br>
                    <select class="slim-select form-control @error('institution') is-invalid @enderror" name="institution" id="institution" required autofocus>
                        <option>Please select</option>
                        <option value="2">Colegio Europeo Internacional</option>
                        <option value="3">Colegio Europeo Internacional</option>
                    </select>

                    @error('institution')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="w-100 form-group mb-2">
                    <label for="interest_careers"><span class="text-danger">*</span> Elige 3 carreras de tu interés</label> <br>
                    <select multiple class="h-auto slim-select form-control @error('interest_careers') is-invalid @enderror" name="interest_careers" id="interest_careers" required>
                        <option value="0">Please select</option>
                        <option value="2">Ingeniería Industrial</option>
                        <option value="3">Medicina</option>
                        <option value="3">Administración de empresas</option>
                        <option value="4">Administración de empresas</option>
                        <option value="5">Administración de empresas</option>
                        <option value="6">Administración de empresas</option>
                        <option value="7">Administración de empresas</option>
                    </select>

                    @error('interest_careers')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="w-100 form-group mb-2">
                    <label for="password"><span class="text-danger">*</span> Password</label>
                    <div class="input-group input-rounded @error('password') is-invalid @enderror">                    
                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" id="password" name="password" required autofocus>
                        <div class="input-group-append">
                            <a href="#" @click.prevent="seePassword($event, 'password')">
                                <span class="input-group-text form-control"><i class="fa fa-eye"></i></span>
                            </a>
                        </div>
                    </div>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="w-100 form-group mb-5">
                    <label for="Password-confirm"><span class="text-danger">*</span> Confirma tu password</label>
                    <div class="input-group input-rounded">                    
                        <input type="password" class="form-control" placeholder="Password" id="Password-confirm" name="password_confirmation" required autofocus>
                        <div class="input-group-append">
                            <a href="#" @click.prevent="seePassword($event, 'Password-confirm')">
                                <span class="input-group-text form-control"><i class="fa fa-eye"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <input type="submit" class="btn btn-signup" value="Incribirme">                        
                </div>
            </form>
        </div>
    </div>        
</section>
@endsection
