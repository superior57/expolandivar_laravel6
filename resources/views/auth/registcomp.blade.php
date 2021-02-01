@extends('layouts.master')

@section('title')
    regist completed  
@endsection

@section('content')
<section class="registcomp-section no-header py-5 px-md-5 px-3">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-6 d-flex py-5 align-items-center">
            <div class="w-100 thanks-wrapper">
                <div class="w-100 mb-5">
                    <a href="{{ url('/') }}">
                        <img width="300" src="{{ asset('img/logo-2.png') }}" alt="Logo">
                    </a>
                </div> 
                <h2 class="w-100 title">¡Gracias por registrarte!</h2>
                <p class="w-100 mb-3 subtitle">Este evento empieza el 28 de febrero 2021 a las 09:00 AM</p>
                <p class="w-100 mb-5 time">10:30:01</p>
                <p>Ve todos los eventos que tendremos a lo largo de la Expo y <a href="" class="yellow-link hover-dark">selecciona los que sean de tu interés</a>, para recibir recordatorios a tu email y celular.</p>
            </div>
        </div>
        <div class="col-12 col-sm-12 col-md-6">
            <div class="w-100">
                <h5 class="px-3">Mi agenda</h5>
            <div class="comming-event-list ss">
                <div class="scrollbox" style="max-height: 650px;">
                    {{-- comming event item --}}
                    <div class="comming-event-item">
                        <div class="date d-flex">
                            <div class="m-auto">
                                <span class="day">18 Nov</span>
                                <span class="time">10:00 AM</span>
                            </div>
                        </div>
                        <div class="comming-event-body">
                            <div class="head">
                                <span class="title">Lorem ipsum dolor sit amet...</span>
                                <span class="star">
                                    <i class="fa fa-star-o"></i>
                                    Me interesa
                                </span>
                            </div>
                            <span class="brief">
                            Lorem ipsum dolor sit amet, c sed diam nonummy nibh euismod 
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
                            enim ad minim veniam.
                            </span>                            
                        </div>
                        <div class="tool-group">
                            <a href="" class="add"><i class="fa fa-plus-square-o"></i></a>
                        </div>
                    </div>
                    {{-- end comming event item --}}
                    {{-- comming event item --}}
                    <div class="comming-event-item">
                        <div class="date d-flex">
                            <div class="m-auto">
                                <span class="day">18 Nov</span>
                                <span class="time">10:00 AM</span>
                            </div>
                        </div>
                        <div class="comming-event-body">
                            <div class="head">
                            <span class="title">Lorem ipsum dolor sit amet...</span>
                            <span class="star star-yellow">
                                <i class="fa fa-star"></i>
                                Me interesa
                            </span>
                            </div>
                            <span class="brief">
                            Lorem ipsum dolor sit amet, c sed diam nonummy nibh euismod 
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
                            enim ad minim veniam.
                            </span>
                        </div>
                        <div class="tool-group">
                            <a href="" class="add"><i class="fa fa-plus-square-o"></i></a>
                        </div>
                    </div>
                    {{-- end comming event item --}}
                    {{-- comming event item --}}
                    <div class="comming-event-item">
                        <div class="date d-flex">
                            <div class="m-auto">
                                <span class="day">18 Nov</span>
                                <span class="time">10:00 AM</span>
                            </div>
                        </div>
                        <div class="comming-event-body">
                            <div class="head">
                            <span class="title">Lorem ipsum dolor sit amet...</span>
                            <span class="star star-yellow">
                                <i class="fa fa-star"></i>
                                Me interesa
                            </span>
                            </div>
                            <span class="brief">
                            Lorem ipsum dolor sit amet, c sed diam nonummy nibh euismod 
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
                            enim ad minim veniam.
                            </span>
                        </div>
                        <div class="tool-group">
                            <a href="" class="add"><i class="fa fa-plus-square-o"></i></a>
                        </div>
                    </div>
                    {{-- end comming event item --}}
                    {{-- comming event item --}}
                    <div class="comming-event-item">
                        <div class="date d-flex">
                            <div class="m-auto">
                                <span class="day">18 Nov</span>
                                <span class="time">10:00 AM</span>
                            </div>
                        </div>
                        <div class="comming-event-body">
                            <div class="head">
                            <span class="title">Lorem ipsum dolor sit amet...</span>
                            <span class="star star-yellow">
                                <i class="fa fa-star"></i>
                                Me interesa
                            </span>
                            </div>
                            <span class="brief">
                            Lorem ipsum dolor sit amet, c sed diam nonummy nibh euismod 
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
                            enim ad minim veniam.
                            </span>
                        </div>
                        <div class="tool-group">
                            <a href="" class="add"><i class="fa fa-plus-square-o"></i></a>
                        </div>
                    </div>
                    {{-- end comming event item --}}
                    {{-- comming event item --}}
                    <div class="comming-event-item">
                        <div class="date d-flex">
                            <div class="m-auto">
                                <span class="day">18 Nov</span>
                                <span class="time">10:00 AM</span>
                            </div>
                        </div>
                        <div class="comming-event-body">
                            <div class="head">
                            <span class="title">Lorem ipsum dolor sit amet...</span>
                            <span class="star star-yellow">
                                <i class="fa fa-star"></i>
                                Me interesa
                            </span>
                            </div>
                            <span class="brief">
                            Lorem ipsum dolor sit amet, c sed diam nonummy nibh euismod 
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
                            enim ad minim veniam.
                            </span>
                        </div>
                        <div class="tool-group">
                            <a href="" class="add"><i class="fa fa-plus-square-o"></i></a>
                        </div>
                    </div>
                    {{-- end comming event item --}}
                    {{-- comming event item --}}
                    <div class="comming-event-item">
                        <div class="date d-flex">
                            <div class="m-auto">
                                <span class="day">18 Nov</span>
                                <span class="time">10:00 AM</span>
                            </div>
                        </div>
                        <div class="comming-event-body">
                            <div class="head">
                            <span class="title">Lorem ipsum dolor sit amet...</span>
                            <span class="star star-yellow">
                                <i class="fa fa-star"></i>
                                Me interesa
                            </span>
                            </div>
                            <span class="brief">
                            Lorem ipsum dolor sit amet, c sed diam nonummy nibh euismod 
                            tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
                            enim ad minim veniam.
                            </span>
                        </div>
                        <div class="tool-group">
                            <a href="" class="add"><i class="fa fa-plus-square-o"></i></a>
                        </div>
                    </div>
                    {{-- end comming event item --}}
                    
                </div>
            </div>   
            </div>
        </div>
    </div>
</section>
@endsection
