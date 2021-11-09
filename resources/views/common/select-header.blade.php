<header class="topbar">
  <nav class="navbar top-navbar navbar-expand-md navbar-dark">
      <!-- ============================================================== -->
      <!-- Logo -->
      <!-- ============================================================== -->
      <div class="navbar-header">
          <a class="navbar-brand" href="index.html">
              <!-- Logo icon --><b>
                  {{-- <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                  <!-- Dark Logo icon -->
                  <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                  <!-- Light Logo icon -->
                  <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" /> --}}
              </b>
              <!--End Logo icon -->
              <!-- Logo text --><span class="hidden-sm-down">
               <!-- dark Logo text -->
               <img src="../assets/images/qa-logo.png" alt="homepage" class="dark-logo qa-logo" />
               <!-- Light Logo text -->    
               <img src="../assets/images/qa-logo.png" class="light-logo qa-logo" alt="homepage" /></span> </a>
      </div>
      <div class="navbar-collapse">
          <ul class="navbar-nav mr-auto">
              <!-- This is  -->
              <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
              <li class="nav-item"> <a class="nav-link sidebartoggler d-none waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
          </ul>
          <ul class="navbar-nav my-lg-0">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle waves-effect waves-dark login-bar" href="{{route('logout')}}"> <i class="fas fa-power-off"></i>
                  </a>
              </li>
          </ul>
      </div>
  </nav>
</header>