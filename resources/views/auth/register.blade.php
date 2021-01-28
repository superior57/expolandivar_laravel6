@extends('layouts.master')

@section('title')
    register    
@endsection

@section('content')
<section class="register-section py-3">
    <div class="w-100 d-flex">
        <div class="w-100 m-auto p-3 main-wrapper">
            <h2 class="w-100 text-center mb-2 title">Insripción</h2>
            <form action="">
                <div class="w-100 form-group mb-2">
                    <label for="name"><span class="badge-danger">*</span> Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre" id="name" name="name" required>
                </div>
                <div class="w-100 form-group mb-2">
                    <label for="email"><span class="badge-danger">*</span> Correo electrónico</label>
                    <input type="text" class="form-control" placeholder="Correo electrónico" id="email" name="email" required>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="w-100 form-group mb-2">
                    <label for="phone"><span class="badge-danger">*</span> Celular</label>
                    <input type="text" class="form-control" placeholder="Celular" id="phone" name="phone" required>
                </div>
                <div class="w-100 form-group mb-2">
                    <label for="birthdate"><span class="badge-danger">*</span> Fecha de nacimiento</label>
                    <input type="date" class="form-control" placeholder="Fecha de nacimiento" id="birthdate" name="birthdate" required>
                </div>
                <div class="w-100 form-group mb-2">
                    <label for="base_location"><span class="badge-danger">*</span> Campus o sede</label> <br>
                    <span>
                        Podrás navegar a otras sedes luego de registrarte
                    </span>
                    <select class="form-control" name="base_location" id="base_location" required>
                        <option value="1">Please select</option>
                        <option value="2">Ciudad de Guatemala</option>
                        <option value="3">Ciudad de Guatemala</option>
                    </select>
                </div>
                <div class="w-100 form-group mb-2">
                    <label for="study_plan"><span class="badge-danger">*</span> Plan de Estudios (Pregrado / Posgrado)</label> <br>
                    <select class="form-control" name="study_plan" id="study_plan" required>
                        <option value="1">Please select</option>
                        <option value="2">Pregrado</option>
                        <option value="3">Pregrado</option>
                    </select>
                </div>
                <div class="w-100 form-group mb-2">
                    <label for="institution"><span class="badge-danger">*</span> Colegio o Institución</label> <br>
                    <select class="form-control" name="institution" id="institution" required>
                        <option value="1">Please select</option>
                        <option value="2">Colegio Europeo Internacional</option>
                        <option value="3">Colegio Europeo Internacional</option>
                    </select>
                </div>
                <div class="w-100 form-group mb-2">
                    <label for="interest_careers"><span class="badge-danger">*</span> Elige 3 carreras de tu interés</label> <br>
                    <select multiple class="form-control" name="interest_careers" id="interest_careers" required>
                        <option value="1">Please select</option>
                        <option value="2">Ingeniería Industrial</option>
                        <option value="3">Medicina</option>
                        <option value="3">Administración de empresas</option>
                    </select>
                </div>
                <div class="w-100 form-group mb-2">
                    <label for="password"><span class="badge-danger">*</span> Password</label>
                    <div class="input-group input-rounded">                    
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                        <div class="input-group-append">
                            <span class="input-group-text form-control"><i class="fa fa-eye"></i></span>
                        </div>
                    </div>
                </div>
                <div class="w-100 form-group mb-5">
                    <label for="password"><span class="badge-danger">*</span> Confirma tu password</label>
                    <div class="input-group input-rounded">                    
                        <input type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                        <div class="input-group-append">
                            <span class="input-group-text form-control"><i class="fa fa-eye"></i></span>
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
