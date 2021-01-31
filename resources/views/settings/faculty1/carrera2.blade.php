@extends('layouts.master')

@section('title')
    settings
@endsection

@section('header')
@include('layouts.header')
@endsection

@section('content')
@include('settings.layouts.searchbar')
<div class="setting-mainsection py-5">
    {{-- sidebar --}}
    @include('settings.layouts.sidebar')
    {{-- end sidebar --}}
    <div class="main-wrapper">
        <div class="w-100 d-flex">
            <a href="#" id="toggle_sidebar" class="">
                <div class="toggle-sidebar">
                    <i class="fa fa-caret-left"></i>
                </div>
            </a>
        </div>
        <div class="px-3 px-md-5">
            <div class="w-100 header">
                <h2 class="title">Facultad / Carrera no disponible en tu campus</h2>
                {{-- toolbar --}}
                @include('settings.layouts.toolbar')
                {{-- end toolbar --}}
            </div>
            <div class="body py-5">
                <div class="mb-4 pb-5">
                    <h3 class="subtitle">Nuestra facultad en otros campus o sedes</h3>
                    <ul class="list-compus">
                        <li><a href="">Ciudad de Guatemala</a></li>
                        <li><a href="">Antigua Guatemala</a></li>
                        <li><a href="">Quetzaltenango</a></li>
                    </ul>
                </div>
            </div>            
        </div>
    </div>
</div>
@endsection


@section('footer')
@include('layouts.footer')
@endsection
