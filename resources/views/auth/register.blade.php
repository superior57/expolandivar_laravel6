@extends('layouts.master')

@section('content')
<section class="register-section py-3">
    <div class="w-100 d-flex">
        <div class="w-100 m-auto p-3 main-wrapper">
            <h3 class="w-100 text-center mb-2">Insripción</h3>
            <div class="w-100 form-group mb-2">
                <label for="name"><span class="badge-danger">*</span> Nombre</label>
                <input type="text" class="form-control" placeholder="Luciano Renneti" id="name" name="name" required>
            </div>
            <div class="w-100 form-group mb-2">
                <label for="email"><span class="badge-danger">*</span> Correo electrónico</label>
                <input type="text" class="form-control" placeholder="email@email.com" id="email" name="email" required>
            </div>
            <div class="w-100 form-group mb-2">
                <label for="phone"><span class="badge-danger">*</span> Celular</label>
                <input type="text" class="form-control" placeholder="56960099" id="phone" name="phone" required>
            </div>
            <div class="w-100 form-group mb-2">
                <label for="birthday"><span class="badge-danger">*</span> Fecha de nacimiento</label>
                <input type="text" class="form-control" placeholder="10/12/1998" id="birthday" name="birthday" required>
            </div>
            <div class="w-100 form-group mb-2">
                <label for="headquarters"><span class="badge-danger">*</span> Campus o sede</label>
                <input type="text" class="form-control" placeholder="56960099" id="headquarters" name="headquarters" required>
            </div>
            <div class="w-100 form-group mb-2">
                <label for="phone"><span class="badge-danger">*</span> Celular</label>
                <input type="text" class="form-control" placeholder="56960099" id="phone" name="phone" required>
            </div>
            <div class="w-100 form-group mb-2">
                <label for="phone"><span class="badge-danger">*</span> Celular</label>
                <input type="text" class="form-control" placeholder="56960099" id="phone" name="phone" required>
            </div>
            <div class="w-100 form-group mb-2">
                <label for="phone"><span class="badge-danger">*</span> Celular</label>
                <input type="text" class="form-control" placeholder="56960099" id="phone" name="phone" required>
            </div>
        </div>
    </div>        
</section>
@endsection
