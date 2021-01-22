@extends('layouts.master')

@section('title')
    home
@endsection

@section('header')
  @include('layouts.header')    
@endsection

@section('content')
<section class="py-5 hero-search-pan">
  <div class="text-center m-auto">
    <h3 class="title mb-3">Expo 2021</h3>
    <span class="subtitle px-5 mb-4">
      Encuentra información de tu campus, facultad o carrera de interés, a través de nuestro <br>
      buscador o ingresa a la sección directamente.
    </span>
    <div class="input-group search-input wow animated fadeInDown">
      <div class="input-group-prepend">
        <span class="input-group-text form-control"><i class="fa fa-search"></i></span>
      </div>
      <input type="text" class="form-control" name="search" placeholder="Lorem ipsum dolor sit amet..." >
    </div>
  </div>
</section>
<section class="history-section py-5">
  <div class="container">
    <div class="contents_m mb-5">
      <div class="title mb-4">
        <h5>Tus carreras de interés Ver tod</h5>
        <div class="view-more">
          <a href=""><span>Ver todas</span></a>
        </div>
      </div>      
      <div class="row">
        <div class="col-md-4 mb-3">
          {{-- history card item --}}
          <div class="history-card wow animated fadeInUp">
            <div class="left-color-mark" style="background-color: #00A99D;">
            </div>
            <div class="history-card-body">
              <span class="title">
                Ingenieria industrial
              </span>
              <span class="brief">
                Lorem ipsum dolor sit amet, c sed diam nonummy nibh euismod tincidunt ut.
              </span>
            </div>
          </div>
          {{-- end history card item --}}
        </div>
        <div class="col-md-4 mb-3">
          {{-- history card item --}}
          <div class="history-card wow animated fadeInUp delay-1">
            <div class="left-color-mark" style="background-color: #5CA6BF;">
            </div>
            <div class="history-card-body">
              <span class="title">
                Medicina
              </span>
              <span class="brief">
                Lorem ipsum dolor sit amet, c sed diam nonummy nibh euismod tincidunt ut.
              </span>
            </div>
          </div>
          {{-- end history card item --}}
        </div>
        <div class="col-md-4 mb-3">
          {{-- history card item --}}
          <div class="history-card wow animated fadeInUp delay-2">
            <div class="left-color-mark" style="background-color: #D6495A;">
            </div>
            <div class="history-card-body">
              <span class="title">
                Administración
              </span>
              <span class="brief">
                Lorem ipsum dolor sit amet, c sed diam nonummy nibh euismod tincidunt ut.
              </span>
            </div>
          </div>
          {{-- end history card item --}}
        </div>
      </div>
    </div>
    <div class="contents_m">
      <div class="title mb-4">
        <h5>Facultades</h5>
        <div class="view-more">
          <a href=""><span>Ver todas</span></a>
        </div>
      </div>      
      <div class="row">
        <div class="col-md-4 mb-5">
          {{-- history card item --}}
          <div class="history-card wow animated fadeInUp">
            <div class="left-color-mark" style="background-color: #00A99D;">
            </div>
            <div class="history-card-body py-3">
              <span class="title">
                Ingeniería
              </span>
            </div>
          </div>
          {{-- end history card item --}}
        </div>
        <div class="col-md-4 mb-5">
          {{-- history card item --}}
          <div class="history-card wow animated fadeInUp delay-1">
            <div class="left-color-mark" style="background-color: #5CA6BF;">
            </div>
            <div class="history-card-body py-3">
              <span class="title">
                Ingeniería
              </span>
            </div>
          </div>
          {{-- end history card item --}}
        </div>
        <div class="col-md-4 mb-5">
          {{-- history card item --}}
          <div class="history-card wow animated fadeInUp delay-2">
            <div class="left-color-mark" style="background-color: #D6495A;">
            </div>
            <div class="history-card-body py-3">
              <span class="title">
                Ingeniería
              </span>
            </div>
          </div>
          {{-- end history card item --}}
        </div>
        <div class="col-md-4 mb-5">
          {{-- history card item --}}
          <div class="history-card wow animated fadeInUp">
            <div class="left-color-mark" style="background-color: #662D91;">
            </div>
            <div class="history-card-body py-3">
              <span class="title">
                Ingeniería
              </span>
            </div>
          </div>
          {{-- end history card item --}}
        </div>
        <div class="col-md-4 mb-5">
          {{-- history card item --}}
          <div class="history-card wow animated fadeInUp delay-1">
            <div class="left-color-mark" style="background-color: #F15A24;">
            </div>
            <div class="history-card-body py-3">
              <span class="title">
                Ingeniería
              </span>
            </div>
          </div>
          {{-- end history card item --}}
        </div>
        <div class="col-md-4 mb-5">
          {{-- history card item --}}
          <div class="history-card wow animated fadeInUp delay-2">
            <div class="left-color-mark" style="background-color: #90B753;">
            </div>
            <div class="history-card-body py-3">
              <span class="title">
                Ingeniería
              </span>
            </div>
          </div>
          {{-- end history card item --}}
        </div>
        <div class="col-md-4 mb-5">
          {{-- history card item --}}
          <div class="history-card wow animated fadeInUp">
            <div class="left-color-mark" style="background-color: #031B5E;">
            </div>
            <div class="history-card-body py-3">
              <span class="title">
                Ingeniería
              </span>
            </div>
          </div>
          {{-- end history card item --}}
        </div>
        <div class="col-md-4 mb-5">
          {{-- history card item --}}
          <div class="history-card wow animated fadeInUp delay-1">
            <div class="left-color-mark" style="background-color: #A67C52;">
            </div>
            <div class="history-card-body py-3">
              <span class="title">
                Ingeniería
              </span>
            </div>
          </div>
          {{-- end history card item --}}
        </div>
        <div class="col-md-4 mb-5">
          {{-- history card item --}}
          <div class="history-card wow animated fadeInUp delay-2">
            <div class="left-color-mark" style="background-color: #F9C50D;">
            </div>
            <div class="history-card-body py-3">
              <span class="title">
                Ingeniería
              </span>
            </div>
          </div>
          {{-- end history card item --}}
        </div>
      </div>
    </div>
  </div>
</section>

<section class="middle-signup-section bg-primary">
  <div class="container">
    <div class="container-big d-flex justify-content-between py-4">
      <div>
        <h3 class="wow animated fadeInLeft">
          ¿Quieres saber tus siguientes pasos?
        </h3>
        <span class="text-description wow animated fadeInLeft delay-2">Entérate aquí de todo lo que necesitas.</span>
      </div>
      <div class="d-flex">
        <a href="" class="btn btn-signup wow animated fadeInRight">
          Siguientes pasos
        </a>
      </div>
    </div>
  </div>
</section>

<section class="central-section py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 mb-5">
        <div class="contents_m mr-md-30">
          <div class="title mb-4">
            <h5>Próximos eventos</h5>
            <div class="view-more">
              <a href=""><span>Ver agenda</span></a>
            </div>
          </div>     
          <div class="comming-event-list  wow animated fadeInLeft">
            <div class="scrollbox" style="max-height: 319px;">
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
            </div>
          </div>   
        </div>             
      </div>
      <div class="col-md-6 mb-5">
        <div class="contents_m ml-md-30">
          <div class="title mb-4">
            <h5>Unidades</h5>
            <div class="view-more">
              <a href=""><span>Ver más unidades</span></a>
            </div>
          </div>     
          <div class="unite-list wow animated fadeInRight">
            <div class="scrollbox" style="max-height: 319px;">
              {{-- unite item --}}
              <div class="comming-event-item unite-item">
                <div class="comming-event-body unite-body">
                  <span class="title mb-2">Lorem ipsum dolor sit amet...</span>
                  <span class="brief mb-2">
                    Lorem ipsum dolor sit amet, c sed diam nonummy nibh euismod 
                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
                    enim ad minim veniam.
                  </span>
                  <div class="d-flex">
                    <span class="mr-30">(502) 2223-2536</span>
                    <span>email@email.com</span>
                  </div>
                </div>
              </div>
              {{-- end unite item --}}
              {{-- unite item --}}
              <div class="comming-event-item unite-item">
                <div class="comming-event-body unite-body">
                  <span class="title mb-2">Lorem ipsum dolor sit amet...</span>
                  <span class="brief mb-2">
                    Lorem ipsum dolor sit amet, c sed diam nonummy nibh euismod 
                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
                    enim ad minim veniam.
                  </span>
                  <div class="d-flex">
                    <span class="mr-30">(502) 2223-2536</span>
                    <span>email@email.com</span>
                  </div>
                </div>
              </div>
              {{-- end unite item --}}
              {{-- unite item --}}
              <div class="comming-event-item unite-item">
                <div class="comming-event-body unite-body">
                  <span class="title mb-2">Lorem ipsum dolor sit amet...</span>
                  <span class="brief mb-2">
                    Lorem ipsum dolor sit amet, c sed diam nonummy nibh euismod 
                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
                    enim ad minim veniam.
                  </span>
                  <div class="d-flex">
                    <span class="mr-30">(502) 2223-2536</span>
                    <span>email@email.com</span>
                  </div>
                </div>
              </div>
              {{-- end unite item --}}
              {{-- unite item --}}
              <div class="comming-event-item unite-item">
                <div class="comming-event-body unite-body">
                  <span class="title mb-2">Lorem ipsum dolor sit amet...</span>
                  <span class="brief mb-2">
                    Lorem ipsum dolor sit amet, c sed diam nonummy nibh euismod 
                    tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi 
                    enim ad minim veniam.
                  </span>
                  <div class="d-flex">
                    <span class="mr-30">(502) 2223-2536</span>
                    <span>email@email.com</span>
                  </div>
                </div>
              </div>
              {{-- end unite item --}}
              
            </div>
          </div>   
        </div>             
      </div>
    </div>
  </div>
</section>

<section class="history-section">
  <div class="container">
    <div class="contents_m mb-5">
      <div class="title mb-4">
        <h5>También te podría interesar</h5>
        <div class="view-more">
          <a href=""><span>Ver todas</span></a>
        </div>
      </div>      
      <div class="row justify-content-between">
        <div class="col-md-4 mb-3 ">
          {{-- history card item --}}
          <div class="history-card wow animated fadeInUp">
            <div class="left-color-mark" style="background-color: #00A99D;">
            </div>
            <div class="history-card-body">
              <span class="title">
                Ingenieria Mecánica
              </span>
              <span class="brief">
                Lorem ipsum dolor sit amet, c sed diam nonummy nibh euismod tincidunt ut.
              </span>
            </div>
          </div>
          {{-- end history card item --}}
        </div>
        <div class="col-md-4 mb-3">
          {{-- history card item --}}
          <div class="history-card wow animated fadeInUp delay-1">
            <div class="left-color-mark" style="background-color: #5CA6BF;">
            </div>
            <div class="history-card-body">
              <span class="title">
                Ingeniería en alimentos
              </span>
              <span class="brief">
                Lorem ipsum dolor sit amet, c sed diam nonummy nibh euismod tincidunt ut.
              </span>
            </div>
          </div>
          {{-- end history card item --}}
        </div>
        <div class="col-md-4 mb-3">
          {{-- history card item --}}
          <div class="history-card wow animated fadeInUp delay-2">
            <div class="left-color-mark" style="background-color: #D6495A;">
            </div>
            <div class="history-card-body">
              <span class="title">
                Mercadeo 
              </span>
              <span class="brief">
                Lorem ipsum dolor sit amet, c sed diam nonummy nibh euismod tincidunt ut.
              </span>
            </div>
          </div>
          {{-- end history card item --}}
        </div>
      </div>
    </div>
  </div>
</section>
@endsection


@section('footer')
  @include('layouts.footer')    
@endsection