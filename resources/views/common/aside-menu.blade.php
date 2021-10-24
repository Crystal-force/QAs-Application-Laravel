
<aside class="left-sidebar">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
          <ul id="sidebarnav">
              <li class="user-pro"> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"><span class="hide-menu">Mark Jeckson</span></a>
                  <ul aria-expanded="false" class="collapse">
                      {{-- <li><a href="javascript:void(0)"><i class="ti-user"></i> My Profile</a></li> --}}
                      <li><a href="javascript:void(0)"><i class="ti-settings"></i> Account Setting</a></li>
                      <li><a href="javascript:void(0)"><i class="fa fa-power-off"></i> Logout</a></li>
                  </ul>
              </li>
              <li> <a class="waves-effect waves-dark" href="{{route('ask-subject')}}" aria-expanded="false"><i class="icon-speedometer"></i>Subject</a></li>
              <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-question"></i><span class="hide-menu">Question Management <span class="badge badge-pill badge-cyan ml-auto">4</span></span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="{{route('allquestions')}}">All Questions</a></li>
                </ul>
              </li>
              {{-- <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-book"></i><span class="hide-menu">Answer Management <span class="badge badge-pill badge-cyan ml-auto">4</span></span></a>
                <ul aria-expanded="false" class="collapse">
                    <li><a href="index.html">Answers List </a></li>
                    <li><a href="index2.html">My Answers</a></li>
                </ul>
              </li> --}}
              <li> <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-cogs"></i>Account setting</a></li>
          </ul>
      </nav>
  </div>
</aside>