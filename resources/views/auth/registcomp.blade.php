@extends('layouts.master')

@section('title')
    regist completed  
@endsection

@php
    $MONTH = [
        '',
        'enero',
        'febrero',
        'En marzo',
        'abril',
        'En Mayo',
        'junio',
        'En julio',
        'agosto',
        'septiembre',
        'octubre',
        'noviembre',
        'diciembre'
    ];
    $now = \Carbon\Carbon::now();
    $start_time = \Carbon\Carbon::create($event->start_time);   
    $left_seconds = $now->diffInSeconds($start_time);
    // dd($start_time->format('g:i A'));
@endphp

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
                <p class="w-100 mb-3 subtitle">Este evento empieza el {!! $start_time->day !!} de {!! $MONTH[$start_time->month] !!} {!! $start_time->year !!} a las {!! $start_time->format('g:i A') !!}</p>
                {{-- countdown --}}
                <p class="w-100 mb-5 time">
                    <span id="evt_left_hours">00</span>
                    <span class="time-flicker">:</span>
                    <span id="evt_left_minutes">00</span>
                    <span class="time-flicker">:</span>
                    <span id="evt_left_seconds">00</span>
                </p>
                {{-- end countdown --}}
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

@section('script')
<script>
    let left_seconds = "{{ $left_seconds }}";

    let lefttime_minute_interval = setInterval(() => {
        if(left_seconds % 2 == 0) {
            $('.time-flicker').css('color', "var(--secondary-color)");
        } else {
            $('.time-flicker').css('color', "transparent");
        }
        const { days, hours, minutes, seconds } = getDateTimeAttrFromSeconds(left_seconds);
        $('#evt_left_hours').text(hours);
        $('#evt_left_minutes').text(minutes);
        $('#evt_left_seconds').text(seconds);
        left_seconds --;      
    }, 1000);
</script>
@endsection
