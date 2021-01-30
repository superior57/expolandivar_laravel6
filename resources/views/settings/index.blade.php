@extends('layouts.master')

@section('title')
settings | welcome
@endsection

@section('header')
@include('layouts.header')
@endsection

@section('content')
<section class="setting-searchbar py-3 bg-primary">
    <div class="m-auto container-size-md">
        <div class="w-100 d-flex justify-content-between mb-2 px-4">
            <div class="d-flex main">
                <span class="text-secondary">Campus Central</span>
                <span class="px-4 text-white">|</span>
                <span class="text-white">Pregrado</span>
            </div>
            <span class="text-secondary">Cambiar</span>
        </div>
        <div class="input-group search-input wow animated fadeInDown">
            <div class="input-group-prepend">
                <span class="input-group-text form-control"><i class="fa fa-search"></i></span>
            </div>
            <input type="text" class="form-control" name="search" placeholder="Lorem ipsum dolor sit amet...">
        </div>
    </div>
</section>
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
                <h2 class="title">Bienvenida</h2>
                {{-- toolbar --}}
                @include('settings.layouts.toolbar')
                {{-- end toolbar --}}
            </div>
            <div class="body">
                <div class="w-100 py-5">
                    <img width="100%" src="{{ asset('img/core-img/welcome.png') }}" alt="Welcome">
                </div>
                <div class="mb-4">
                    <h3 class="subtitle">Sobre Ciencias Económicas</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
                        tincidunt ut laoreet dolore magna aliqua erat volutpat. Ut wisi enim ad minim veniam, quis
                        nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel
                        illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui
                        blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.
                    </p>
                </div>
                <div class="mb-4">
                    <h3 class="subtitle">FAQ</h3>
                    <p>
                        ¿Lorem ipsum dolor sit amet, consectetuer adipiscing elit?
                    </p>
                    <p>
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                        enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                        ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                        molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
                        iusto odio dignissim qui blandit
                    </p>
                    <p>
                        ¿Lorem ipsum dolor sit amet, consectetuer adipiscing elit?
                    </p>
                    <p>
                        sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi
                        enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip
                        ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse
                        molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et
                        iusto odio dignissim qui blandit
                    </p>
                </div>
            </div>
            <div class="footer">
                <div class="mb-4">
                    <h3 class="subtitle">Contacto</h3>
                    <p>
                        <span>(502) 2223-2536</span>
                        <span class="pl-3">email@email.com</span>
                    </p>
                </div>
                <div class="mb-4 pb-5">
                    <h3 class="subtitle">Nuestra facultad en otros campus o sedes</h3>
                    <ul class="list-compus">
                        <li><span>Ciudad de Guatemala</span></li>
                        <li><span>Antigua Guatemala</span></li>
                        <li><span>Quetzaltenango</span></li>
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

@section('script')
<script>
    // $(document).ready(function () {
    //     $("#sidebar").mCustomScrollbar({
    //         theme: "minimal"
    //     });

    //     $('#sidebarCollapse').on('click', function () {
    //         $('#sidebar, #content').toggleClass('active');
    //         $('.collapse.in').toggleClass('in');
    //         $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    //     });
    // });  

</script>
@endsection
