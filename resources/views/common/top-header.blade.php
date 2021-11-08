<header class="topbar">
  <nav class="navbar top-navbar navbar-expand-md navbar-dark">
      <!-- ============================================================== -->
      <!-- Logo -->
      <!-- ============================================================== -->
      <div class="navbar-header">
          <a class="navbar-brand" href="index.html">
              <!-- Logo icon --><b>
                  <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                  <!-- Dark Logo icon -->
                  <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                  <!-- Light Logo icon -->
                  <img src="../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
              </b>
              <!--End Logo icon -->
              <!-- Logo text --><span class="hidden-sm-down">
               <!-- dark Logo text -->
               <img src="../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
               <!-- Light Logo text -->    
               <img src="../assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
      </div>
      <!-- ============================================================== -->
      <!-- End Logo -->
      <!-- ============================================================== -->
      <div class="navbar-collapse">
          <!-- ============================================================== -->
          <!-- toggle and nav items -->
          <!-- ============================================================== -->
          <ul class="navbar-nav mr-auto">
              <!-- This is  -->
              <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
              <li class="nav-item"> <a class="nav-link sidebartoggler d-none waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
              <!-- ============================================================== -->
          </ul>
          <!-- ============================================================== -->
          <!-- User profile and search -->
          <!-- ============================================================== -->
          <ul class="navbar-nav my-lg-0">
              <!-- ============================================================== -->
              <!-- Comment -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
                      <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                  </a>
                  <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                      <ul>
                          <li>
                              <div class="drop-title">Newest Answers</div>
                          </li>
                          <li>
                              <div class="message-center">
                                  <!-- Message -->
                                  <a href="javascript:void(0)">
                                      <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                      <div class="mail-contnet">
                                          <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                  </a>
                                  <!-- Message -->
                                  <a href="javascript:void(0)">
                                      <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                      <div class="mail-contnet">
                                          <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                  </a>
                                  <!-- Message -->
                                  <a href="javascript:void(0)">
                                      <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                      <div class="mail-contnet">
                                          <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                  </a>
                                  <!-- Message -->
                                  <a href="javascript:void(0)">
                                      <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                      <div class="mail-contnet">
                                          <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                  </a>
                              </div>
                          </li>
                          <li>
                              <a class="nav-link text-center link" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                          </li>
                      </ul>
                  </div>
              </li>
              <li class="nav-item dropdown u-pro">
                  <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user" class=""> <span class="hidden-md-down">Mark &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                  <div class="dropdown-menu dropdown-menu-right animated flipInY">
                      <!-- text-->
                      <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                      <!-- text-->
                      <div class="dropdown-divider"></div>
                      <!-- text-->
                      <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                      <!-- text-->
                      <div class="dropdown-divider"></div>
                      <!-- text-->
                      <a href="{{route('logout')}}" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                      <!-- text-->
                  </div>
          </ul>
      </div>
  </nav>
</header>