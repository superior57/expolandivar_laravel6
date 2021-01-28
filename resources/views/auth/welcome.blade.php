@extends('layouts.master')

@section('content')
<section class="agenda-section no-header">
    <div class="w-100 p-3 px-md-5">
        <div class="d-flex py-5 head">
            <div class="m-auto text-center container-size-md">
                <h2 class="title">¡Bienvenidos!</h2>
                <p>
                    Estamos muy emocionados de tenerlos con nosotros. <br>
                    Queremos mostrarles todo lo que tenemos preparado para ustedes.
                </p>
            </div>
        </div>
        <div class="d-flex body">
            <div class="m-auto d-flex container-size-lg">
                <div class="video-bg d-flex">   
                    <a href="" class="m-auto btn-video-circle">
                        <div class="bg-btn-circle">
                            <span class="btn-circle-text"><i class="fa fa-caret-right"></i></span>                        
                        </div>       
                    </a>              
                </div>           
            </div>             
        </div>
        <div class="footer">
            <div class="pt-4 text-end">
                <a href="" class="btn btn-primary">Siguiente</a>
            </div>
        </div>
    </div>
</section>
@endsection
