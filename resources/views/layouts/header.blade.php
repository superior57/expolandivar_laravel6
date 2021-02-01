<header class="header-area">
  <div class="session-notification" style="display: none;">
    <span class="title">AHORA</span>
    <a href="">
      Lorem ipsum dolor sit amet, c sed diam nonummy
    </a>
  </div>
    <div class="container">
      <div class="classy-nav-container breakpoint-off">
        <nav class="classy-navbar justify-content-between" id="saasboxNav">
          <!-- Logo--><a class="nav-brand mr-5 logo" href="{{ url('/') }}"><img src="{{ asset('img/logo-2.png') }}" alt="Logo"></a>
          <!-- Navbar Toggler-->
          <div class="classy-navbar-toggler"><span class="navbarToggler"><span></span><span></span><span></span><span></span></span></div>
          <!-- Menu-->
          <div class="classy-menu">
            <!-- close btn-->
            <div class="classycloseIcon">
              <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
            </div>
            <!-- Nav Start-->
            <div class="classynav">
              <ul id="corenav">
                <li>
                  <a href="{{ url('home') }}" class="{{ Request::is('home') ? 'active' : '' }}">Home</a>
                </li>
                <li>
                  <a href="{{ url('change-plan') }}" class="{{ Request::is('change-plan') ? 'active' : '' }}">Cambiar Campus</a>
                </li>
                <li>
                  <a href="/">Agenda de Sesiones</a>
                </li>
                <li>
                  <a href="{{ url('settings/faq') }}" class="{{ Request::is('settings/faq*') ? 'active' : '' }}">FAQ general</a>
                </li>  
                <li>
                  <a href="/" class="loginbtn">
                    <img width="50px" height="50px" src="{{ asset('img/core-img/user.png') }}" alt="User">
                    Luciano Renneti
                    <i class="fa fa-angle-down ml-15"></i>
                  </a>
                  <ul class="dropdown">
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i><span>Logout</span></a></li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </ul>
                </li>     
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>