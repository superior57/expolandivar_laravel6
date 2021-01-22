<header class="header-area">
    <div class="container">
      <div class="classy-nav-container breakpoint-off">
        <nav class="classy-navbar justify-content-between" id="saasboxNav">
          <!-- Logo--><a class="nav-brand mr-5" href="{{ url('/') }}"><img src="img/logo-2.png" alt="Logo"></a>
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
                  <a href="/">Home</a>
                </li>
                <li>
                  <a href="/">Cambiar Campus o Plan de Estudio</a>
                </li>
                <li>
                  <a href="/">Agenda de Sesiones</a>
                </li>
                <li>
                  <a href="/">FAQ general</a>
                </li>  
                <li>
                  <a href="#home">
                    <img width="50px" height="50px" src="{{ asset('img/core-img/user.png') }}" alt="User">
                    Luciano Renneti
                    <i class="fa fa-angle-down ml-15"></i>
                  </a>
                  <ul class="dropdown">
                    <li><a href="/"><i class="fa fa-user"></i><span>User Profile</span></a></li>
                  </ul>
                </li>     
              </ul>
              <!-- Login Button-->
              {{-- <div class="login-btn-area ml-4 mt-4 mt-lg-0">
                <i class="fa fa-user-circle-o"></i>                
                <a class="btn " href="#">Luciano Renneti</a>
              </div> --}}
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>