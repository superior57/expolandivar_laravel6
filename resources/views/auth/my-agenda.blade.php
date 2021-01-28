@extends('layouts.master')

@section('title')
    my agenda    
@endsection

@section('content')
<section class="agenda-section no-header">
    <div class="w-100 p-3 px-md-5">
        <div class="d-flex py-5 head">
            <div class="m-auto text-center container-size-md">
                <h2 class="title">Mi agenda</h2>
                <p>Ve todos los eventos que tendremos a lo largo de la Expo y <a href="" class="yellow-link hover-dark">selecciona los que sean de tu interés</a>, para recibir recordatorios a tu email y celular.</p>
            </div>
        </div>
        <div class="body">
            <div class="comming-event-list  wow animated fadeInLeft">
                <div class="scrollbox" style="max-height: 433px;">
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
                    </div>
                    {{-- end comming event item --}}
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
